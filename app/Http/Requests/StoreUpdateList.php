<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use PhpParser\Builder\Function_;

class StoreUpdateList extends FormRequest
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
            'name' => 'required|min:2|max:100',
            'quantidade' => 'required',
        ];
    }

    public  function messages()
    {
        return[
             'name.required' => 'o produto é obrigátorio',
             'quantidade.required' => 'aquantidade é obrigátoria'
        ];
    }
}
