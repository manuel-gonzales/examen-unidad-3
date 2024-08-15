<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nombres' => 'required',
            'email' => 'required|email',
            'direccion' => 'required',
            'telefono' => 'required|numeric'
        ];
    }

    public function messages(): array
    {
        return [
            'nombres.required' => 'Ingresa tu nombre y apellido',
            'email.required' => 'Ingresa tu correo electrónico',
            'direccion.required' => 'Ingresa tu dirección',
            'telefono.required' => 'Ingresa tu teléfono'
        ];
    }
}
