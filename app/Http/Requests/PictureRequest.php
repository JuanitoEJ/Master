<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PictureRequest extends FormRequest
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
        $rules = [
            'file'          =>  'required', 
            'titulo'        =>  'required', 
            'description'   =>  'required',
        ];
        if($this->get('file'))
            $rules = array_merge($rules, ['file' => 'mimes:jpg,jpeg,png'] );

        return $rules;
    }
}
