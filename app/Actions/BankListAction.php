<?php

namespace App\Actions;

use App\Models\Bank;

class BankListAction{
    public function execute($request){
        return Bank::paginate($request->per_page ?? 15);
    }
}