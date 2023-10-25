<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;
use Illuminate\Foundation\Http\FormRequest;

class StoreSchstudentRequest extends FormRequest
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
           'StudentNisn'=>['required',Rule::unique('schstudents','StudentNisn')->ignore($this->route("schstudents"))],
           'StudentNis'=>['required',Rule::unique('schstudents','StudentNis')->ignore($this->route("schstudents"))],
            'StudentFname'=> 'required',
            'StudentLname'=> 'required',
            'StudentGender'=> 'required',
            'StudentReligion'=> 'required',
            'StudentPob'=> 'required',
            'StudentDob'=> 'required',
            'StudentAddress'=> 'required',
            'StudentVillage'=> 'required',
            'StudentSubdistrict'=> 'required',
            'StudentDistrict'=> 'required',
            'StudentProvince'=> 'required',
            'StudentWhatsapp'=> ['required',Rule::unique('schstudents','StudentWhatsapp')->ignore($this->route('schstudents'))],
            'StudentEmail'=> ['required',Rule::unique('schstudents','StudentEmail')->ignore($this->route('schstudents'))],
            'StudentToken' => ['required'],
            'password' =>'confirmed|min:6',
            'schgrades_id'=> 'required',
           
        ];
    }
}
