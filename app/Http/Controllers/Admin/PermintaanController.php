<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Services\Contracts\PermintaanContract;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class PermintaanController extends Controller
{
    protected $response;

    public function __construct(PermintaanContract $permintaanContract)
    {
        $this->title = "permintaans";
        $this->permintaanContract = $permintaanContract;
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
        $data = Transaction::select('*', DB::raw('SUM(total) as totals'))->where('status', 'like', "%$request->status%")->groupBy('request_date')->when($request->input('cari'), function ($query) use ($request) {
            $query->where('name', 'like', "%{$request->input('cari')}%")
                ->orWhere("email", "like", "%{$request->input('cari')}%");
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

    public function approve(Request $request, $id)
    {
        try {
            $request['out_date'] = Carbon::now();
            $data = $this->permintaanContract->update($request, $id);
            return response()->json($data);
        } catch (\Exception $e) {
            $this->response['message'] = $e->getMessage() . ' in file :' . $e->getFile() . ' line: ' . $e->getLine();
            return view('errors.message', ['message' => $this->response]);
        }
    }

    public function edit($id)
    {
        try {
            $data = $this->permintaanContract->show($id);
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
            $data = Transaction::all();
            return view('admin.' . $title . '.print', compact('data'));
        } catch (\Exception $e) {
            $this->response['message'] = $e->getMessage() . ' in file :' . $e->getFile() . ' line: ' . $e->getLine();
            return view('errors.message', ['message' => $this->response]);
        }
    }
}
