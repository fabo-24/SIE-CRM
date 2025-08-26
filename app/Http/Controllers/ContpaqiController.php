<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;  // Aquí está la importación
use App\Models\Contpaqi;
use Symfony\Component\HttpFoundation\Response;

class ContpaqiController extends Controller
{
    public function download($id)
    {
        $contpaqi = Contpaqi::findOrFail($id);

        if (!$contpaqi->Certificado || !Storage::disk('public')->exists($contpaqi->Certificado)) {
            abort(404, 'El archivo no existe.');
        }

        return Storage::disk('public')->download($contpaqi->Certificado, 'certificado_'.$id.'.pdf');
    }
}
