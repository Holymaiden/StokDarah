<?php

namespace App\Services;

use App\Models\Sisa;
use App\Models\Stock;
use App\Repositories\Contracts\StockContract as StockRepo;
use App\Services\Contracts\StockContract;
use Illuminate\Support\Facades\Hash;

class StockService implements StockContract
{
    protected $contractRepo;

    public function __construct(StockRepo $contractRepo)
    {
        $this->contractRepo = $contractRepo;
    }

    /**
     * Get Data
     */
    public function getAll()
    {
        return $this->contractRepo->index();
    }

    /**
     * Store Data
     */
    public function store($request)
    {
        $status = 0;
        $jml = count($request->blood);
        for ($i = 0; $i < $jml; $i++) {
            $code = Stock::orderBy('id', 'desc')->first();
            $code = (int) substr($code['code'], 3);
            $data = [
                'code' => 'DRH' . sprintf("%03s", $code + 1),
                'date_of_entry' => $request->tanggal,
                'blood' => $request->blood[$i],
                'pouch_number' => $request->pouch_number[$i],
                'donor' => $request->donor[$i],
                'total' => $request->total[$i]
            ];
            Sisa::create($data);
            $status = $this->contractRepo->store($data);
        }
        return $status;
    }

    /**
     * Get Data By ID
     */
    public function show($id)
    {
        return $this->contractRepo->show($id);
    }

    /**
     * Update Data By ID
     */
    public function update($request, $id)
    {
        $status = false;
        // $jml = count($request->blood);
        // dd($request->all());
        // // dd($jml);
        // for ($i = 0; $i < $jml; $i++) {
        //         $data = [
        //                 'date_of_entry' => $request->tanggal,
        //                 'blood' => $request->blood[$i],
        //                 'pouch_number' => $request->pouch_number[$i],
        //                 'donor' => $request->donor[$i],
        //                 'total' => $request->total[$i]
        //         ];
        $status = $this->contractRepo->updates($request);
        // }
        // dd($data);
        return $status;
    }

    /**
     * Delete Data By ID
     */
    public function delete($id)
    {
        return $this->contractRepo->delete($id);
    }

    /**
     * Get Data with Pagination
     */
    public function paginate($perPage = 0, $columns = array('*'))
    {
        $perPage = $perPage ?: config('constants.PAGINATION');

        return $this->contractRepo->paginate($perPage, $columns);
    }
}
