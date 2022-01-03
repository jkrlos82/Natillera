<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PagosprestamoRequest extends FormRequest
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
            'fecha_abono' => 'required',
            'abono_capital' => 'required|integer',
            'interes' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'fecha_abono.required' => 'La fecha de la transaccion es requerida',
            'abono_capital.required' => 'El valor del abono es requerido',
            'interes.required' => 'El valor del interes es requerido'
        ];
    }
}
