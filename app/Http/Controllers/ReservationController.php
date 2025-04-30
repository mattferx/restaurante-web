<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
        public function store(Request $request)
        {
            // Validación de datos
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'phone' => 'required|string|max:20',
                'person' => 'required|string',
                'reservation-date' => 'required|date|after_or_equal:today',
                'time' => 'required',
                'message' => 'nullable|string|max:500',
            ]);
        
            // Crear la reserva
            Reservation::create([
                'name' => $validated['name'],
                'phone' => $validated['phone'],
                'guests' => (int) str_replace('-person', '', $validated['person']),
                'reservation_date' => $validated['reservation-date'],
                'reservation_time' => $validated['time'],
                'message' => $validated['message'] ?? null,
                'status' => 'pending'
            ]);
        
            // Respuesta JSON para el frontend
            return response()->json([
                'success' => true,
                'message' => '¡Reserva realizada con éxito!'
            ]);
        }
    }        