<?php

namespace App\Repositories\Contracts;

interface TransactionContract
{
    public function index();

    public function store(array $data);

    public function show($id);

    public function update(array $data, $id);

    public function delete($id);

    public function paginate();

    public function getOneWhere($column, $value);

    public function getTwoWhere($column, $value, $column2, $value2);
}
