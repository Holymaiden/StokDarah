<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Services\Contracts\SettingContract;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    protected $response;

    public function __construct(SettingContract $settingContract)
    {
        $this->title = "settings";
        $this->settingContract = $settingContract;
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
            $user = User::find(Auth::user()->id);
            return view('admin.' . $title . '.index', compact('title', 'user'));
        } catch (\Exception $e) {
            $this->response['message'] = $e->getMessage() . ' in file :' . $e->getFile() . ' line: ' . $e->getLine();
            return view('errors.message', ['message' => $this->response]);
        }
    }

    public function update(Request $request)
    {
        try {
            $data = $this->settingContract->update($request, Auth::user()->id);
            return response()->json($data);
        } catch (\Exception $e) {
            $this->response['message'] = $e->getMessage() . ' in file :' . $e->getFile() . ' line: ' . $e->getLine();
            return view('errors.message', ['message' => $this->response]);
        }
    }

    public function pass(Request $request)
    {
        try {
            $data = $this->settingContract->pass($request, Auth::user()->id);
            return response()->json($data);
        } catch (\Exception $e) {
            $this->response['message'] = $e->getMessage() . ' in file :' . $e->getFile() . ' line: ' . $e->getLine();
            return view('errors.message', ['message' => $this->response]);
        }
    }
}
