<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateSchclassRequest extends FormRequest
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
            $id = $this->route('managements.class.update');
        return [
            'schGrade'=>[
            'required',
            Rule::unique('schclasses','schgrade')->ignore($id)
            ],
            'schClass'=>[
                'required',
                Rule::unique('schlasses','schClass')->ignore($id)
            ],
            'schStatus'=>[
                'required',
                Rule::enum('schStatus', ['0','1'])
            ]
        ];
    }
}
