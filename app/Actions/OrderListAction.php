<?php

namespace App\Actions;

use App\Models\Order;

class OrderListAction{

    public function execute($request){
        return Order::with("bank")->paginate($request->per_page ?? 15);
    }
}