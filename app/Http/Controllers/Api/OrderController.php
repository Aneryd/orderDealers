<?php

namespace App\Http\Controllers\Api;

use App\Models\Order;
use App\Actions\OrderAction;
use App\Actions\OrderListAction;
use App\Actions\OrderCreateAction;
use App\Actions\OrderDeleteAction;
use App\Actions\OrderUpdateAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\PaginateRequest;
use App\Http\Resources\OrderAllResource;
use App\Http\Requests\OrderCreateRequest;
use App\Http\Resources\OrderCreateResource;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PaginateRequest $request, OrderListAction $action)
    {
        return OrderAllResource::collection($action->execute($request));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrderCreateRequest $request, OrderCreateAction $action)
    {
        return (new OrderCreateResource($action->execute($request)))->additional([
            "message" => "Order is added!",
            "status" => 200
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order, OrderAction $action)
    {
        return (new OrderAllResource($action->execute($order)))->additional([
            "message" => "Order with id: ".$order->id." is success load!",
            "status" => "200"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OrderCreateRequest $request, Order $order, OrderUpdateAction $action)
    {
        return (new OrderCreateResource($action->execute($request, $order)))->additional([
            "message" => "Order with id: ".$order->id." is updated!",
            "status" => 200
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order, OrderDeleteAction $action)
    {
        return response()->json([
            "data" => $action->execute($order),
            "message" => "Order with id: ".$order->id." is deleted!",
            "status" => 200
        ]);
    }
}
