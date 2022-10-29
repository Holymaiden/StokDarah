<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sisa;
use App\Models\Stock;
use Illuminate\Http\Request;
use App\Services\Contracts\SisaContract;
use Illuminate\Support\Facades\DB;

class SisaController extends Controller
{
    protected $response;

    public function __construct(SisaContract $sisaContract)
    {
        $this->title = "sisas";
        $this->sisaContract = $sisaContract;
        // $this->middleware("roles:{$this->title}");
        $this->response = [
            'code' => config('constants.HTTP.CODE.FAILED'),
            'message' => __('error.public')
        ];
    }

    public function index()
    {
        try {
            $title = $this->title;
            return view('admin.' . $title . '.index', compact('title'));
        } catch (\Exception $e) {
            $this->response['message'] = $e->getMessage() . ' in file :' . $e->getFile() . ' line: ' . $e->getLine();
            return view('errors.message', ['message' => $this->response]);
        }
    }

    public function data(Request $request)
    {
        $jml = $request->jml == '' ? 5 : $request->jml;
        $title = $this->title;
        $data = Sisa::select("sisas.date_of_entry as tanggal", DB::raw("
        SUM(CASE WHEN `sisas`.`blood`='A' THEN `sisas`.`total` ELSE 0 END) AS A,
        SUM(CASE WHEN `sisas`.`blood`='B' THEN `sisas`.`total` ELSE 0 END) AS B,
        SUM(CASE WHEN `sisas`.`blood`='AB' THEN  `sisas`.`total` ELSE 0 END) AS AB,
        SUM(CASE WHEN `sisas`.`blood`='O' THEN `sisas`.`total` ELSE 0 END) AS O
        "))->groupby(DB::raw("sisas.date_of_entry"))->when($request->input('cari'), function ($query) use ($request) {
            $query->where('sisas.date_of_entry', 'like', "%{$request->input('cari')}%")
                ->orWhere("sisas.total", "like", "%{$request->input('cari')}%");
        })
            ->paginate($jml);

        $view = view('admin.' . $this->title . '.data', compact('data', 'title'))->with('i', ($request->input('page', 1) -
            1) * $jml)->render();
        return response()->json([
            "total_page" => $data->lastpage(),
            "total_data" => $data->total(),
            "html"       => $view,
        ]);
    }

    public function store(Request $request)
    {
        try {
            $data = $this->sisaContract->store($request);
            return response()->json($data);
        } catch (\Exception $e) {
            $this->response['message'] = $e->getMessage() . ' in file :' . $e->getFile() . ' line: ' . $e->getLine();
            return view('errors.message', ['message' => $this->response]);
        }
    }

    public function edit($id)
    {
        try {
            $data = $this->sisaContract->show($id);
            return response()->json($data);
        } catch (\Exception $e) {
            $this->response['message'] = $e->getMessage() . ' in file :' . $e->getFile() . ' line: ' . $e->getLine();
            return view('errors.message', ['message' => $this->response]);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $data = $this->sisaContract->update($request, $id);
            return response()->json($data);
        } catch (\Exception $e) {
            $this->response['message'] = $e->getMessage() . ' in file :' . $e->getFile() . ' line: ' . $e->getLine();
            return view('errors.message', ['message' => $this->response]);
        }
    }

    public function destroy($id)
    {
        try {
            $data = $this->sisaContract->delete($id);
            return response()->json($data);
        } catch (\Exception $e) {
            $this->response['message'] = $e->getMessage() . ' in file :' . $e->getFile() . ' line: ' . $e->getLine();
            return view('errors.message', ['message' => $this->response]);
        }
    }
}
