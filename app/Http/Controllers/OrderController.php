<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\StripeClient;

class OrderController extends Controller
{
    public function createPay()
    {
        $stripe = new StripeClient(config("services.stripe.secret_key"));
        $result=$stripe->checkout->sessions->create([
            'success_url' => route("order.callback"),
            'line_items' => [
                [
                    'price_data' => [
                        "currency"=>"EUR",
                        "unit_amount"=>100,
                        "product_data"=> [
                            "name"=>"test",
                            "description"=>"test123",
                        ]
                    ],
                    'quantity' => 2,
                ],
                [
                    'price_data' => [
                        "currency"=>"EUR",
                        "unit_amount"=>100,
                        "product_data"=> [
                            "name"=>"test2",
                            "description"=>"test321",
                        ]
                    ],
                    'quantity' => 2,
                ],
            ],
            'mode' => 'payment',
        ]);
        dd($result);
    }

    public function callbackPay()
    {
        $stripe = new StripeClient(config("services.stripe.secret_key"));
        $result=$stripe->checkout->sessions->retrieve(
            'cs_test_b1e7kEtkj2G32PtdqC6TzNVD8lzxDHwNZVBJNZeAjz4iKZbOQboM6ZHaVE',
        );
        dd($result);
    }
}
