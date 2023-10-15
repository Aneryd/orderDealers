<?php

namespace App\Http\Controllers\Api;

use Exception;
use App\Models\Bank;
use Illuminate\Http\Request;
use App\Actions\BankListAction;
use App\Actions\BankCreateAction;
use App\Actions\BankDeleteAction;
use App\Actions\BankUpdateAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\PaginateRequest;
use App\Http\Requests\BankCreateRequest;
use App\Http\Resources\BankCreateResource;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(PaginateRequest $request, BankListAction $action)
    {
        return BankCreateResource::collection($action->execute($request));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BankCreateRequest $request, BankCreateAction $action)
    {
        return (new BankCreateResource($action->execute($request)))->additional([
            "message" => "Bank is added!",
            "status" => 200
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Bank $bank)
    {
        return (new BankCreateResource($bank))->additional([
            "message" => "Bank with id: ".$bank->id." is loaded!",
            "status" => 200
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
    public function update(BankCreateRequest $request, Bank $bank, BankUpdateAction $action)
    {
        return (new BankCreateResource($action->execute($request, $bank)))->additional([
            "message" => "Order with id: ".$bank->id." is updated!",
            "status" => 200
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bank $bank, BankDeleteAction $action)
    {
        return response()->json([
            "data" => $action->execute($bank),
            "message" => "Bank with id: ".$bank->id." is deleted!",
            "status" => 200
        ]);
    }
}
