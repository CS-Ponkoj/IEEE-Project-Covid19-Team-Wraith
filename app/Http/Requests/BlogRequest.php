<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
        $rules= [
            'title'         =>'required|unique:blogs',
            'body'          =>'required',
            'category_id'   =>'required',
            'image'         =>'mimes:jpeg,bmp,png,jpg',
        ];
        switch($this->method()){
            case 'PUT':
            case 'PATCH':
                $rules['title']='required';

                break;
        }

        return $rules;

    }
}
