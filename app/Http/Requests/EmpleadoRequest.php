<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadoRequest extends FormRequest
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
            'codigoEmpleado' => 'unique:empleados,codigoEmpleado',
            'curpi' => 'unique:empleados,curpi',
            'curpf' => 'unique:empleados,curpf',
            'numeroSeguroSocial' => 'unique:empleados,numeroSeguroSocial',
            'umf' => 'unique:empleados,umf',
            'rfc' => 'unique:empleados,rfc',
            'homoclave' => 'unique:empleados,homoclave',
            'numeroAfore' => 'unique:empleados,numeroAfore',
            'numeroFonacot' => 'unique:empleados,numeroFonacot',
            'correoElectronico' => 'unique:empleados,correoElectronico',
            'clabeInterbancaria' => 'unique:empleados,clabeInterbancaria',
        ];
    }
}
