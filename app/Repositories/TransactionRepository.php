<?php

namespace App\Repositories;

use App\Models\Transaction;
use App\Repositories\BaseRepository;
use App\Repositories\Contracts\TransactionContract;


class TransactionRepository extends BaseRepository implements TransactionContract
{
    /**
     * @var
     */
    protected $model;

    public function __construct(Transaction $transaction)
    {
        $this->model = $transaction->whereNotNull('id');
    }

    public function getOneWhere($column, $value)
    {
        return $this->model->where($column, $value)->get();
    }
    public function getTwoWhere($column, $value, $column2, $value2)
    {
        return $this->model->where($column, $value)->where($column2, $value2)->get();
    }
}
