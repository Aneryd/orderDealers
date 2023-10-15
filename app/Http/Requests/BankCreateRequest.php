<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BankCreateRequest extends FormRequest
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
                "name" => "required|string|max:255",
                "interest_rate" => "required|numeric"
            ];
        }else{
            return [
                "name" => "sometimes|required|string|max:255",
                "interest_rate" => "sometimes|required|numeric"
            ];
        }
    }

    public function messages(){
        return [
            "name.required" => "required",
            "name.string" => "This is string",
            "name.max" => "max",
            "interest_rate.required" => "required",
            "interest_rate.numeric" => "numeric",
        ];
    }
}
