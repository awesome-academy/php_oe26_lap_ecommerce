<?php

namespace App\Repositories\Client;

interface OrderRepositoryInterface
{
    public function find($id);
    public function list();
    public function cancel($id);
    public function create($order);
}
