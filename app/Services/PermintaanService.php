<?php

namespace App\Services;

use App\Models\Sisa;
use App\Repositories\Contracts\PermintaanContract as PermintaanRepo;
use App\Services\Contracts\PermintaanContract;
use Illuminate\Support\Facades\Hash;

class PermintaanService implements PermintaanContract
{
    protected $contractRepo;

    public function __construct(PermintaanRepo $contractRepo)
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
        $input = $request->all();
        return $this->contractRepo->store($input);
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
        $input = $request->all();
        if ($input['status'] == 'rejected') {
            $data = $this->contractRepo->show($id);
            $sisa = Sisa::where('id', $data->sisa_id)->first();
            $sisa->update([
                'total' => $sisa->total + $data->total
            ]);
        }
        return $this->contractRepo->update($input, $id);
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
