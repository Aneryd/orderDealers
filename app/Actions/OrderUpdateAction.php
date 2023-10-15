<?php

namespace App\Actions;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderUpdateAction{
    public function execute(Request $request, Order $order){
        $order->update([
            "dealer_name" => $request->dealer_name ?? $order->dealer_name,
            "employee_name" => $request->employee_name ?? $order->employee_name,
            "amount" => $request->amount ?? $order->amount,
            "time" => $request->time ?? $order->time,
            "bank_id" => $request->bank_id ?? $order->bank_id,
            "reason" => $request->reason ?? $order->reason,
            "status" => $request->status ?? $order->status
        ]);
        return $order;
    }
}