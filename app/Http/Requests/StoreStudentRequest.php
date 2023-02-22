<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:500',
            'birthdate' => 'required|date',
            'father_name' => 'required|string|max:500',
            'mother_name' => 'required|string|max:500',
            'course_grade' => 'required|string|max:500',
            'section' => 'required|string|max:500',
            'carnet' => 'required|string|max:500',
            'date_admission' => 'required|string|max:500'
        ];
    }
}
