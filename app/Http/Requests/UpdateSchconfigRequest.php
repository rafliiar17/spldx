<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateSchconfigRequest extends FormRequest
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
        $id = $this->route('managements.configs.update');

        return [
            "SchCode" => [
                "required",
                Rule::unique("schconfigs","SchCode")->ignore($id),
            ],
            "SchValue" => [
                "required",
                Rule::unique("schconfigs","SchValue")->ignore($id)
            ]
        ];
    }
}
