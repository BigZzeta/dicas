<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PuestosRequest extends FormRequest
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
          'numeropuesto' => 'required|unique:puestos,numeropuesto',
          'nombre' => 'required|unique:puestos,nombre',
          'funciones' => 'required',
          'nivelestructural' => 'required',
          // 'cartatecnica' => 'required',
          'estatus' => '',
          'sueldominimo' => 'required',
          'sueldomaximo' => 'required'
        ];
    }
}
