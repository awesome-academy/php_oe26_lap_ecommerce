<?php

namespace App\Http\Controllers\Client;

use App\Exceptions\NotFoundException;
use App\Repositories\Client\ProductRepositoryInterface;
use App\Repositories\Client\OrderRepositoryInterface;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    protected $order_repository;
    protected $product_repository;

    public function __construct(
        OrderRepositoryInterface $orderRepository,
        ProductRepositoryInterface $productRepository
    ) {
        $this->order_repository = $orderRepository;
        $this->product_repository = $productRepository;
    }

    public function success()
    {
        return view('client.order.success');
    }

    public function list()
    {
        $orders = $this->order_repository->list();
        foreach ($orders as $order) {
            $order['detail'] = $this->getdetail($order);
        }

        return view('client.order.list', compact( 'orders'));
    }

    public function detail($id)
    {
        try {
            $order = $this->order_repository->find($id);
            $details = $this->getDetail($order);
        } catch (NotFoundException $exception) {
            throw $exception;
        }

        return view('client.order.detail', compact('details', 'order'));
    }

    public function getDetail($order)
    {
        $details = $order->orderDetails;
        foreach ($details as $detail) {
            try {
                $detail['product_name'] = $this->product_repository->find($detail->product_id)->name;
            } catch (NotFoundException $exception) {
                $detail['product_name'] = "This product is no longer sold";
            }
            $detail['num_price'] = $detail->price * $detail->quantity;
        }

        return $details;
    }

    public function cancel($id)
    {
        try {
            $order = $this->order_repository->find($id);
        } catch (NotFoundException $exception) {
            throw $exception;
        }
        $order->status = 'Canceled';
        $order->update();

        return redirect()->route('home.orders.detail', $id);
    }

}
