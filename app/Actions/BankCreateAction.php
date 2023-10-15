<?php 

namespace App\Actions;

use App\Models\Bank;
use Illuminate\Http\Request;

class BankCreateAction{
    public function execute(Request $request){
        return Bank::create([
            "name" => $request->name,
            "interest_rate" => $request->interest_rate
        ]);
    }
}