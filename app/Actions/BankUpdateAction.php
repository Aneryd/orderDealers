<?php

namespace App\Actions;

class BankUpdateAction{
    public function execute($request, $bank){
        $bank->update([
            "name" => $request->name ?? $bank->name,
            "interest_rate" => $request->interest_rate ?? $bank->interest_rate,
        ]);
        return $bank;
    }
}