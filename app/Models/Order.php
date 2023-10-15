<?php

namespace App\Models;

use App\Models\Bank;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        "dealer_name",
        "employee_name",
        "amount",
        "time",
        "bank_id",
        "interest_rate",
        "reason",
        "status",
    ];

    public function bank(){
        return $this->hasOne(Bank::class, "id", "bank_id");
    }
}
