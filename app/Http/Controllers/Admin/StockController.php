<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Stock;
use Illuminate\Http\Request;
use App\Services\Contracts\StockContract;
use Illuminate\Support\Facades\DB;

class StockController extends Controller
{
    protected $response;

    public function __construct(StockContract $stockContract)
    {
        $this->title = "stocks";
        $this->stockContract = $stockContract;
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
        $data = Stock::select("date_of_entry as tanggal", DB::raw("
        SUM(CASE WHEN `blood`='A' THEN `total` ELSE 0 END) AS A,  
        SUM(CASE WHEN `blood`='B' THEN `total` ELSE 0 END) AS B,
        SUM(CASE WHEN `blood`='AB' THEN  `total` ELSE 0 END) AS AB,
        SUM(CASE WHEN `blood`='O' THEN `total` ELSE 0 END) AS O
        "))->groupby(DB::raw("date_of_entry"))->when($request->input('cari'), function ($query) use ($request) {
            $query->where('date_of_entry', 'like', "%{$request->input('cari')}%")
                ->orWhere("total", "like", "%{$request->input('cari')}%");
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
            $data = $this->stockContract->store($request);
            return response()->json($data);
        } catch (\Exception $e) {
            $this->response['message'] = $e->getMessage() . ' in file :' . $e->getFile() . ' line: ' . $e->getLine();
            return view('errors.message', ['message' => $this->response]);
        }
    }

    public function edit($id)
    {
        try {
            $data = $this->stockContract->show($id);
            return response()->json($data);
        } catch (\Exception $e) {
            $this->response['message'] = $e->getMessage() . ' in file :' . $e->getFile() . ' line: ' . $e->getLine();
            return view('errors.message', ['message' => $this->response]);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $data = $this->stockContract->update($request, $id);
            return response()->json($data);
        } catch (\Exception $e) {
            $this->response['message'] = $e->getMessage() . ' in file :' . $e->getFile() . ' line: ' . $e->getLine();
            return view('errors.message', ['message' => $this->response]);
        }
    }

    public function destroy($id)
    {
        try {
            $data = $this->stockContract->delete($id);
            return response()->json($data);
        } catch (\Exception $e) {
            $this->response['message'] = $e->getMessage() . ' in file :' . $e->getFile() . ' line: ' . $e->getLine();
            return view('errors.message', ['message' => $this->response]);
        }
    }

    public function printForm()
    {
        try {
            $title = $this->title;
            $data = Stock::all();
            return view('admin.' . $title . '.print', compact('data'));
        } catch (\Exception $e) {
            $this->response['message'] = $e->getMessage() . ' in file :' . $e->getFile() . ' line: ' . $e->getLine();
            return view('errors.message', ['message' => $this->response]);
        }
    }
}
