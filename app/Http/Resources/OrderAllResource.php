<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderAllResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "dealer_name" => $this->dealer_name,
            "employee_name" => $this->employee_name,
            "amount" => $this->amount,
            "time" => $this->time,
            "interest_rate" => $this->bank->interest_rate,
            "reason" => $this->reason,
            "status" => $this->status,
            "created_at" => $this->created_at->format("d-m-Y"),
            "updated_at" => $this->updated_at->format("d-m-Y"),
        ];

    }
}
