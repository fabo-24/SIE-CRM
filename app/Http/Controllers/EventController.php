<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    // Obtener todos los eventos
    public function index()
    {
        $events = Event::all()->map(function ($event) {
            return [
                'id' => $event->id,
                'title' => $event->event,
                'start' => $event->start_date,
                'end' => $event->end_date,
                'backgroundColor' => $this->getColorByEtiqueta($event->etiqueta), // Asigna color correctamente
            ];
        });
        
        return response()->json($events);
    }

    private function getColorByEtiqueta($etiqueta)
    {
        $colors = [
              'SOPORTE' => 'rgb(0,123,255)',    // Azul
            'REUNION' => 'rgb(108,117,125)',  // Gris
            'VIDEO' => 'rgb(111,66,193)',     // Morado
            'WEBINARS' => 'rgb(121,85,72)',   // Café
            'LISTO' => 'rgb(40,167,69)',      // Verde
            'PENDIENTE' => 'rgb(255,193,7)',  // Amarillo
            'CANCELADO' => 'rgb(220,53,69)'   // Rojo
        ];
    
        return $colors[$etiqueta] ?? '#6c757d'; // Default: gris
    }

    // Guardar un nuevo evento
    public function store(Request $request)
    {
        $event = Event::create([
            'event' => $request->event,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'etiqueta' => $request->etiqueta,
        ]);

        return response()->json($event);
    }

    // Eliminar un evento
    public function destroy($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();

        return response()->json(['message' => 'Evento eliminado correctamente']);
    }

    // Actualizar un evento
    public function update(Request $request, $id)
    {
        $event = Event::findOrFail($id);
        $event->update([
            'event' => $request->event,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'etiqueta' => $request->etiqueta,
        ]);

        return response()->json($event);
    }
}
