<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name'=> 'required',
            'email'=> 'required | email',
            'subject'=> 'required',
            'message'=> 'required'
        ];
    }

    public function messages()
    {
      return [
        'name.required'=> 'o nome é obrigátorio',
        'email.required' => 'o email é obrigátorio',
         'subject.required' =>  'o asunto é obrigátorio',
         'message.required' => 'a mensagen é obrigatoria'

      ];
     
      
    }
}
