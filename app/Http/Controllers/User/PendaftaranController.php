<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Services\Contracts\TransactionContract;
use Illuminate\Support\Facades\Auth;

class PendaftaranController extends Controller
{
    protected $response;

    public function __construct(TransactionContract $transactionContract)
    {
        $this->title = "pendaftaran";
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
            return view('user.' . $title . '.index', compact('title'));
        } catch (\Exception $e) {
            $this->response['message'] = $e->getMessage() . ' in file :' . $e->getFile() . ' line: ' . $e->getLine();
            return view('errors.message', ['message' => $this->response]);
        }
    }

    public function pendaftaran($id)
    {
        try {
            if ($id != 'A' && $id != 'B' && $id != 'AB' && $id != 'O') {
                $this->response['message'] = __('error.public');
                return view('errors.message', ['message' => $this->response]);
            }
            $title = $this->title;
            return view('user.' . $title . '.pendaftaran', compact('title', 'id'));
        } catch (\Exception $e) {
            $this->response['message'] = $e->getMessage() . ' in file :' . $e->getFile() . ' line: ' . $e->getLine();
            return view('errors.message', ['message' => $this->response]);
        }
    }

    public function store(Request $request)
    {
        try {
            $data = $this->transactionContract->store($request);
            return redirect(route('pendaftaran.print'));
        } catch (\Exception $e) {
            $this->response['message'] = $e->getMessage() . ' in file :' . $e->getFile() . ' line: ' . $e->getLine();
            return view('errors.message', ['message' => $this->response]);
        }
    }

    public function printForm()
    {
        try {
            $title = $this->title;
            $data = $this->transactionContract->getTwoWhere('user_id', Auth()->user()->id, 'status', 'pending');
            return view('user.' . $title . '.print', compact('data'));
        } catch (\Exception $e) {
            $this->response['message'] = $e->getMessage() . ' in file :' . $e->getFile() . ' line: ' . $e->getLine();
            return view('errors.message', ['message' => $this->response]);
        }
    }
}
