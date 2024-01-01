<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
{
    public function authorize(): bool{
        return true;
    }

    public function rules(): array{
        if( $this->method() == 'PUT'){
            $rules=[
                'name'=>'required',
                'email'=>'required', Rule::unique('users')->ignore($this->input('email')),
                'contact'=>'required',
            ];
        }else{
            $rules=[
                'name'=>'required',
                'email'=>'required|unique:users',
                'contact'=>'required',
                'password'=>'required'
            ];
        }
        return $rules;
    }
}
