<?php
// app/Http/Controllers/BusquedaController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblRecurso; // Asumiendo que ya has cambiado el modelo User a TblRecurso

class AutenticarController extends Controller
{
    public function buscarLogin(Request $request)
    {
        // Validar los campos de entrada
        $request->validate([
            'Rcso_Email1' => 'required|string',
            'Rcso_Contrasena' => 'required|string',
        ]);

        // Buscar el registro por nombre y apellido
        $registro = TblRecurso::where('Rcso_Email1', $request->Rcso_Email1)
                            ->where('Rcso_Contrasena', $request->Rcso_Contrasena)
                            ->first();

        // Verificar si el registro existe
        if ($registro) {
            return view('resultados', ['existe' => true, 'registro' => $registro]);
        } else {
            return view('resultados', ['existe' => false]);
        }
    }

    public function index()
    {
        return view('autenticar');
    }

}
