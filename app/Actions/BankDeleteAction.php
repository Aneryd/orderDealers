<?php

namespace App\Actions;

class BankDeleteAction{
    public function execute($bank){
        return $bank->delete();
    }
}