<?php

namespace App\Http\Controllers;

use App\Models\Assento;
use Illuminate\Http\Request;

class AssentoController extends Controller
{
    public function index()
    {
        $assentos = Assento::all(48);
        return view('assentos.index', ['assentos' => $assentos]);
    }

    public function reservar(Request $request)
    {
        $selectedSeats = $request->input('selectedSeats');

        foreach ($selectedSeats as $seat) {
            $assento = Assento::where('numero_assento', $seat)->first();
            if ($assento) {
                $assento->reservado = true;
                $assento->save();
            }
        }

        return response()->json(['message' => 'Assentos reservados com sucesso.']);
    }
}
