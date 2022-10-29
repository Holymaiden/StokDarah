<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\BaseRepository;
use App\Repositories\Contracts\SettingContract;


class SettingRepository extends BaseRepository implements SettingContract
{
    /**
     * @var
     */
    protected $model;

    public function __construct(User $user)
    {
        $this->model = $user->whereNotNull('id');
    }

    public function pass(array $data, $id)
    {
        return $this->model->find($id)->update($data);
        // return $this->model->whereIn('id', (array) $id)->update($data);
    }
}
