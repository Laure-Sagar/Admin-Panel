<?php

namespace App\Order;

use Illuminate\Http\Request;
use App\Billing\PaymentGateway;

class OrderDetails
{
    /**
     * @var PaymentGateway
     */

    public function __construct(PaymentGateway $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function all()
    {
        $this->paymentGateway->setDiscount(500);

        return [
            'name' => 'Victor',
            'address' => '123 Street',
        ];
    }
}
