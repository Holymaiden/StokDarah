<?php

namespace App\Repositories;

use App\Models\Transaction;
use App\Repositories\BaseRepository;
use App\Repositories\Contracts\PermintaanContract;


class PermintaanRepository extends BaseRepository implements PermintaanContract
{
    /**
     * @var
     */
    protected $model;

    public function __construct(Transaction $transaction)
    {
        $this->model = $transaction->whereNotNull('id');
    }
}
