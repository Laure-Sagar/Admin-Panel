<?php

namespace App\Http\Controllers;

use App\Order\OrderDetails;
use Illuminate\Http\Request;
use App\Billing\PaymentGateway;

class OderController extends Controller
{
    public function store(OrderDetails $orderDetails,PaymentGateway $paymentGateway)
    {        
        $order = $orderDetails->all();
        dd($paymentGateway->charge(2500));

    }
}
