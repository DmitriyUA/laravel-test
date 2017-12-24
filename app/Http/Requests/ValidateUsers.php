<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateUsers extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:30',
            'surname' => 'required|regex:/[\D]/',
            'age' => 'required|integer|min:18|max:99',
        ];
    }

    public function messages()
    {
        return [
            'age.required' => 'The field age is required',
            'age.integer'  => 'The field age must be integer',
            'age.min'  => 'Field age must be beetwen 18 and 99',
            'age.max'  => 'Field age must be beetwen 18 and 99',
        ];
    }
}
