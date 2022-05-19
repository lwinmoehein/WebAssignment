<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudent extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            'name'=>'string',
            'email'=>'email|unique:students,email',
            'dob'=>'date',
            'nrc'=>'string|max:50|unique:students,nrc',
            'courses'=>'required|array|min:1'
        ];
    }
}
