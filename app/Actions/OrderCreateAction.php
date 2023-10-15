<?php

namespace App\Actions;

use App\Models\Bank;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Enums\OrderStatusEnum;

class OrderCreateAction{

    public function execute(Request $request){
        return Order::create([
            "dealer_name" => $request->dealer_name,
            "employee_name" => $request->employee_name,
            "amount" => $request->amount,
            "time" => $request->time,
            "bank_id" => $request->bank_id,
            "reason" => $request->reason,
            "status" => $request->status
        ]);
    }
}