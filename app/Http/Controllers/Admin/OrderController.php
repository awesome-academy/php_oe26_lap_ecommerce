<?php

namespace App\Http\Controllers\Admin;

use App\Enums\OrderStatus;
use App\Http\Controllers\Controller;
use App\Repositories\EloquentRepository;
use App\Repositories\Order\OrderRepository;
use App\Repositories\Order\OrderRepositoryInterface;
use App\Repositories\OrderDetail\OrderDetailRepositoryInterface;
use App\Repositories\Product\ProductRepository;
use App\Repositories\Product\ProductRepositoryInterface;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use MyEvent;

class OrderController extends Controller
{
    protected $orderRepository;
    protected $productRepository;
    protected $order_detailRepository;
    public function __construct(
        OrderRepositoryInterface $orderRepository,
        ProductRepositoryInterface $productRepository,
        OrderDetailRepositoryInterface $order_detailRepository
    ) {
        $this->orderRepository = $orderRepository;
        $this->productRepository = $productRepository;
        $this->order_detailRepository = $order_detailRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $orders = $this->orderRepository->getAll();

        return view('admin.orders.index', [
            'orders' => $orders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return void
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Factory|View
     */
    public function show($id)
    {
        $order = $this->orderRepository->find($id);
        $order_details = $order->orderDetails;
        $buyer = $this->orderRepository->find($id)->user;
        $products = $this->productRepository->getAll();

        return view('admin.orders.show', [
            'details' => $order_details,
            'buyer' => $buyer,
            'products' => $products,
            'order' => $order,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return void
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $order = $this->orderRepository->find($id);
        $details = $order->orderDetails;
        $order->status = $request->status;
        if ( $request->status == OrderStatus::shipping || $request->status == OrderStatus::shipped )
        {
            foreach ($details as $detail)
            {
                $this->productRepository->update($detail->product_id, [
                    'quantity' => $this->productRepository->quantity - $detail->quantity,
                ]);
            }
        }
        $order->save();

        return redirect()->route('admin.orders.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return void
     */
    public function destroy($id)
    {
        //
    }
}
