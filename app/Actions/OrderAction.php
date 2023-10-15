<?php

namespace App\Actions;

use App\Models\Order;

class OrderAction{
    public function execute(Order $order){
        return $order->load("bank");
    }
}