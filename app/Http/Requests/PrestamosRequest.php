<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PrestamosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'idsocio' => 'required',
            'responsable' => 'required|string',
            'tarifa' => 'required',
            'valor' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'responsable.required' => 'El nombre del responsable es requerido',
            'valor.required' => 'El valor del prestamo es requerido'
        ];
    }
}
