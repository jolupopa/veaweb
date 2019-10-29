<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\Distrito;
use App\Http\Controllers\Controller;
use App\Provincia;
use App\Zone;
use Illuminate\Support\Facades\Input;

class LocationController extends Controller {
	public function departamentos() {
		$departamentos = Departamento::all();
		return response()->json($departamentos);
	}

	public function provincias() {
		$departamento_id = Input::get('departamento_id');
		$provincias = Provincia::where('departamento_id', '=', $departamento_id)->get();
		return response()->json($provincias);
	}

	public function distritos() {
		$provincia_id = Input::get('provincia_id');
		$distritos = Distrito::where('provincia_id', '=', $provincia_id)->get();
		return response()->json($distritos);
	}

	public function zonas() {
		$distrito_id = Input::get('distrito_id');
		$zonas = Zone::where('distrito_id', '=', $distrito_id)->get();
		return response()->json($zonas);
	}
}
