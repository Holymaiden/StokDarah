<?php

namespace App\Repositories;

use App\Models\Stock;
use App\Repositories\BaseRepository;
use App\Repositories\Contracts\StockContract;


class StockRepository extends BaseRepository implements StockContract
{
    /**
     * @var
     */
    protected $model;

    public function __construct(Stock $stock)
    {
        $this->model = $stock->whereNotNull('id');
    }

    /**
     * @param $id
     */
    public function show($id)
    {
        return $this->model->where('date_of_entry', $id)->get();
    }

    public function delete($id)
    {
        return $this->model->where('date_of_entry', $id)->delete();
    }

    public function updates($data)
    {
        // dd($data->total);
        $status = false;
        $jml = count($data->blood);
        for ($i = 0; $i < $jml; $i++) {
            $a = Stock::find($data->id[$i]);
            $a->date_of_entry = $data->tanggal;
            $a->blood = $data->blood[$i];
            $a->pouch_number = $data->pouch_number[$i];
            $a->donor = $data->donor[$i];
            $a->total = $data->total[$i];
            $status = $a->save();
        }
        return $status;
        // return $this->model->whereIn('id', (array) $id)->update($data);
    }
}
