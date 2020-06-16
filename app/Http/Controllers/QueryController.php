<?php

namespace App\Http\Controllers;

Use App\User;
use App\Patient;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('query.findpatient');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function findPatient(Request $request)
    {
        $email = $request->email;
        $patient = Patient :: where('email', $email)->firstOrFail();
        return view('query.file', compact('patient'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showHistorys($id)
    {
        //Obtenemos todos los usuarios
        $users = User :: all();

        //Obtemos todas las historias del paciente
        $patient = Patient :: findOrFail($id);
        $stories = $patient->stories;

        return view('query.gethist', compact('stories', 'patient', 'users'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showHEvolutions($id)
    {
        //Obtenemos todos los usuarios
        $users = User :: all();

        //Obtemos todas las historias del paciente
        $patient = Patient :: findOrFail($id);
        $evolutions = $patient->evolutions;

        return view('query.getevo', compact('evolutions', 'patient', 'users'));
    }
}
