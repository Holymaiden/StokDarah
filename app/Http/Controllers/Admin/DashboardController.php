<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        //   
    }

    public function index()
    {
        return view('admin.dashboard');
    }

    public function data(Request $request)
    {
        $jml = $request->jml == '' ? 5 : $request->jml;
        $title = 'dashboard';
        $data = Transaction::when($request->input('cari'), function ($query) use ($request) {
            $query->where('total', 'like', "%{$request->input('cari')}%")
                ->orWhere("status", "like", "%{$request->input('cari')}%");
        })
            ->paginate($jml);

        $view = view('admin.data', compact('data', 'title'))->with('i', ($request->input('page', 1) -
            1) * $jml)->render();
        return response()->json([
            "total_page" => $data->lastpage(),
            "total_data" => $data->total(),
            "html"       => $view,
        ]);
    }
}
