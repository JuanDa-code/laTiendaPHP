<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
        //1. Establecer reglas de validación
        return [
            "nombre" => 'required|alpha',
            "desc" => 'required|max:100',
            "precio" => 'required|max:10000|numeric',
            "categoria" => 'required',
            "marca" => 'required'
        ];
    }

    /**
     * Mensajes personalizados
     */
    
    public function messages() {
        return [
            'required' => 'Dato obligatorio.',
            'alpha' => 'Solo letras.',
            'max' => 'Máximo :max carácteres.',
            'numeric' => 'Solo números.'
        ];
    }
}
