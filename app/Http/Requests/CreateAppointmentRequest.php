<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAppointmentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'patient_id' => 'required|exists:users,id',
            'provider_id' => 'required|exists:users,id',
            'datetime' => 'required|date|after_or_equal:today',
        ];
    }
}
