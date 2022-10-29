<?php

namespace App\Repositories\Contracts;

interface StockContract
{
    public function index();

    public function store(array $data);

    public function show($id);

    public function updates($data);

    public function delete($id);

    public function paginate();
}
