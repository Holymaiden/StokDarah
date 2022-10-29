<?php

namespace App\Services;

use App\Helpers\Helper;
use App\Models\Sisa;
use App\Models\Stock;
use App\Repositories\Contracts\TransactionContract as TransactionRepo;
use App\Services\Contracts\TransactionContract;
use App\Traits\Uploadable;

class TransactionService implements TransactionContract
{
    use Uploadable;

    protected $contractRepo;
    protected $document = 'uploads/document';

    public function __construct(TransactionRepo $contractRepo)
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
        $mes = false;
        $input = $request->all();
        $input['status'] = 'pending';
        $input['user_id'] = auth()->user()->id;
        $input['created_at'] = date('Y-m-d H:i:s');
        $input['updated_at'] = date('Y-m-d H:i:s');
        if ($request->hasFile('medis')) {
            $image = $request->file('medis')->getClientOriginalName();
            $image_name = pathinfo($image, PATHINFO_FILENAME);
            $image_name = $this->uploadFile2($request->file('medis'), $this->document, '');
            $input['medis'] = $image_name;
        }
        $data = Helper::sisa_darah($input['blood'], $input['total']);
        for ($i = 0; $i < count($data); $i += 3) {
            $input['sisa_id'] = $data[$i];
            $input['total'] = $data[$i + 2];
            Sisa::where('id', $data[$i])->update(['total' => $data[$i + 1]]);
            $mes = $this->contractRepo->store($input);
        }
        return $mes;
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

    public function getOneWhere($column, $value)
    {
        return $this->contractRepo->getOneWhere($column, $value);
    }
    public function getTwoWhere($column, $value, $column2, $value2)
    {
        return $this->contractRepo->getTwoWhere($column, $value, $column2, $value2);
    }
}
