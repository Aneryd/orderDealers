<?php

namespace App\Actions;

use App\Models\Order;


class OrderDeleteAction{
    public function execute(Order $order){
        return $order->delete();
    }
}