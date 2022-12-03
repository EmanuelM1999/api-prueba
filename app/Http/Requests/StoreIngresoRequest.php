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
            'codigo' => 'exists:colaboradores,id'
        ];
    }

    public function messages()
    {
        return [
            'codigo.exists' => "Codigo errado: por favor ingrese un codigo interno valido"
        ];
    }
}
