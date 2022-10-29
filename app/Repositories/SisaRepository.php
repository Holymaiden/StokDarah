<?php

namespace App\Repositories;

use App\Models\Sisa;
use App\Repositories\BaseRepository;
use App\Repositories\Contracts\SisaContract;


class SisaRepository extends BaseRepository implements SisaContract
{
    /**
     * @var
     */
    protected $model;

    public function __construct(Sisa $sisa)
    {
        $this->model = $sisa->whereNotNull('id');
    }
}
