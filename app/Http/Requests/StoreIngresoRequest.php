<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreIngresoRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'codigo' => 'required|exists:colaboradores,id',
            'tipo_ingreso' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'codigo.exists' => "Codigo errado: por favor ingrese un codigo interno valido",
            'codigo.required' => "Ingrese por favor el codigo interno",
            'tipo_ingreso.required' => "Seleccione por favor el tipo de ingreso"
        ];
    }
}
