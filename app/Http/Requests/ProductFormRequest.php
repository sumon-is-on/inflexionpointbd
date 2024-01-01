<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
{
    public function authorize(): bool{
        return true;
    }


    public function rules(): array
    {
        if( $this->method() == 'PUT'){
            $rules=[
                'name'=>'required',
                'category_id'=>'required'
            ];
        }else{
            $rules=[
                'name'=>'required',
                'category_id'=>'required'
            ];
        }
        return $rules;
    }
}
