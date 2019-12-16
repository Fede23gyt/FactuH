<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacionCategorias extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'descripcion' => 'required',
            //
        ];
    }

    public function messages(){
      return[
        'descripcion.required' => 'Debe ingresar una categoria',
      ];
    }
}
