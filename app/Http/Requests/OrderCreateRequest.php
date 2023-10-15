<?php

namespace App\Http\Requests;

use App\Enums\OrderStatusEnum;
use Illuminate\Validation\Rules\Enum;
use Illuminate\Foundation\Http\FormRequest;

class OrderCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        if($this->method() == "POST"){
            return [
                "dealer_name" => "required|string|max:255",
                "employee_name" => "required|string|max:255",
                "amount" => "required|integer",
                "time" => "required|integer",
                "bank_id" => "required|integer|exists:banks,id",
                "reason" => "required|string",
                "status" => ["required", new Enum(OrderStatusEnum::class)]
            ];
        }else{
            return [
                "dealer_name" => "sometimes|required|string|max:255",
                "employee_name" => "sometimes|required|string|max:255",
                "amount" => "sometimes|required|integer",
                "time" => "sometimes|required|integer",
                "bank_id" => "sometimes|required|integer|exists:banks,id",
                "reason" => "sometimes|required|string",
                "status" => ["sometimes", "required", new Enum(OrderStatusEnum::class)]
            ];
        }
    }

    public function messages(){
        return parent::messages();
    }
}
