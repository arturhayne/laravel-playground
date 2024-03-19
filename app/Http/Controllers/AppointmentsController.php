<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Http\Resources\AppointmentResource;
use App\Http\Resources\AppointmentsCollection;
use App\Http\Requests\CreateAppointmentRequest;

class AppointmentsController extends Controller
{
    public function index()
    {
        $appointments = Appointment::all();
        return new AppointmentsCollection($appointments);
    }

    public function store(CreateAppointmentRequest $request)
    {
        $validatedData = $request->validated();

        $appointment = Appointment::create([
            'patient_id' => $validatedData['patient_id'],
            'provider_id' => $validatedData['provider_id'],
            'datetime' => $validatedData['datetime'],
            'status' => 'pending',
        ]);

        // Send confirmation email to patient
        // Notify healthcare provider

        return new AppointmentResource($appointment);
    }
}
