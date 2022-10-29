<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Services\Contracts\TransactionContract;


class ProfileController extends Controller
{
        protected $response;

        public function __construct(TransactionContract $transactionContract)
        {
                $this->title = "profile";
                $this->transactionContract = $transactionContract;
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
                        $data = $this->transactionContract->getOneWhere('user_id', Auth()->user()->id);
                        return view('user.' . $title . '.index', compact('title', 'data'));
                } catch (\Exception $e) {
                        $this->response['message'] = $e->getMessage() . ' in file :' . $e->getFile() . ' line: ' . $e->getLine();
                        return view('errors.message', ['message' => $this->response]);
                }
        }

        public function update(Request $request)
        {
                try {
                        $data = $request->all();
                        if ($data['password'] === null) {
                                unset($data['password']);
                        }

                        User::find(Auth()->user()->id)->Update($data);
                        return redirect(route('profile'));
                } catch (\Exception $e) {
                        $this->response['message'] = $e->getMessage() . ' in file :' . $e->getFile() . ' line: ' . $e->getLine();
                        return view('errors.message', ['message' => $this->response]);
                }
        }
}
