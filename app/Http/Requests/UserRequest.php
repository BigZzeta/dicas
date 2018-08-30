<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Validation\Rule;

class UserRequest extends FormRequest
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
            'name' => 'required',
            'apellidoPaterno' => '',
            'apellidoMaterno' => '',
            'foto' => '',          
            'email' => ['required', 'email', 'max:255', 'unique:users,email,$id'],
            'username'=>'required|unique:users,username',
            'tipousuario'=>'required',
            'password'=> 'required'
        ];
    }
}
