<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderCreateResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "data" => [
                "id" => $this->id,
                "dealer_name" => $this->dealer_name,
                "employee_name" => $this->employee_name,
                "amount" => $this->amount,
                "time" => $this->time,
                "bank_id" => $this->bank_id,
                "reason" => $this->reason,
                "status" => $this->status,
                "created_at" => $this->created_at,
                "updated_at" => $this->updated_at,
            ]
        ];
    }
}
