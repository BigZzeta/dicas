<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Empleado;

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
            'curp' => ['required', 'curp', 'max:18', 'unique:empleados,curp'],
            'curpi' => 'unique:empleados,curpi',
            'curpf' => 'unique:empleados,curpf',
            'curp' => 'unique:empleados,curp',
            'numeroSeguroSocial' => 'unique:empleados,numeroSeguroSocial',
            'rfc' => 'unique:empleados,rfc',
            'numeroAfore' => 'unique:empleados,numeroAfore',
            'numeroFonacot' => 'unique:empleados,numeroFonacot',
            'correoElectronico' => 'unique:empleados,correoElectronico',
            'cuentapagoelectronico' => 'unique:empleados,cuentapagoelectronico',
        ];
    }
     public function messages()
    {
        return [
            'codigoEmpleado.unique' => 'Valor repetido',
            'curpi.unique' => 'Valor repetido',
            'curpf.unique' => 'Valor repetido',
            'numeroSeguroSocial.unique' => 'Valor repetido',
            'rfc.unique' => 'Valor repetido',
            'homoclave.unique' => 'Valor repetido',
            'numeroAfore.unique' => 'Valor repetido',
            'numeroFonacot.unique' => 'Valor repetido',
            'correoElectronico.unique' => 'Valor repetido',
            'cuentapagoelectronico.unique' => 'Valor repetido',
        ];
    }
}
