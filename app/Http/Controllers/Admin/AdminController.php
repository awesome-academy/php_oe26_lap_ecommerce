<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Suggest;
use App\Repositories\OrderDetail\OrderDetailRepository;
use App\Repositories\OrderDetail\OrderDetailRepositoryInterface;
use App\Repositories\Order\OrderRepositoryInterface;
use App\Repositories\Rate\RateRepositoryInterface;
use App\Repositories\Suggest\SuggestRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Sodium\add;

class AdminController extends Controller
{
    protected $orderRepository;
    protected $orderDetailRepository;
    protected $suggestRepository;
    protected $rateRepository;

    public function __construct(
        OrderRepositoryInterface $orderRepository,
        SuggestRepositoryInterface $suggestRepository,
        OrderDetailRepositoryInterface $orderDetailRepository,
        RateRepositoryInterface $rateRepository
    ) {
        $this->orderRepository = $orderRepository;
        $this->suggestRepository = $suggestRepository;
        $this->orderDetailRepository = $orderDetailRepository;
        $this->rateRepository = $rateRepository;
    }

    public function index()
    {
        $monthArr = [];
        $revenueArr = [];
        $productArr = [];
        $numArr = [];
        $yearArr = [];

        $years = $this->orderRepository->getYear();

        foreach ($years as $year)
        {
            $dataMonth = [];
            $dataRevenue = [];
            $dataBarCharts = $this->orderRepository->getRevenueByMonth($year->year);
            foreach ($dataBarCharts as $dataBarChart)
            {
                $dataMonth[] = $dataBarChart->month;
                $dataRevenue[] = $dataBarChart->revenue;

            }
            array_push($monthArr, $dataMonth);
            array_push($revenueArr, $dataRevenue);
            array_push($yearArr, $year->year);
        }

        $dataPieCharts = $this->orderDetailRepository->getOrderByProduct();

        $numSuggest = $this->suggestRepository->getQuantitySuggest();

        $numOrder = $this->orderRepository->getQuantityNewOrder();

        $numRate = $this->rateRepository->getQuantityRate();

        foreach ($dataPieCharts as $dataPieChart)
        {
            array_push($productArr, $dataPieChart->product);
            array_push($numArr, $dataPieChart->num);
        }

        return view('admin.index', [
            'months' => $monthArr,
            'revenues' => $revenueArr,
            'product' => $productArr,
            'num' => $numArr,
            'suggest' => $numSuggest,
            'order' => $numOrder,
            'rate' => $numRate,
            'years' => $years,
            'yearArr' => $yearArr,
        ]);
    }
}
