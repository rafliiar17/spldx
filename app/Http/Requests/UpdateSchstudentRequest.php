<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateSchstudentRequest extends FormRequest
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
        return [
            'StudentFname',
            'StudentLname',
            'StudentGender',
            'StudentReligion',
            'StudentAddress',
            'StudentPob',
            'StudentDob',
            'StudentVillage',
            'StudentSubdistrict',
            'StudentDistrict',
            'StudentProvince',
            'StudentWhatsapp',
            'StudentEmail'=> [Rule::unique('schstudents','StudentEmail')->ignore($this->route('schstudents'))],
            'schgrades_id',
        ];
    }
}
