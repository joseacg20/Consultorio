<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Patient;
use App\Evolution;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\MessageBag;
use App\Http\Requests\CreateEvolutionValidation;

class EvolutionController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');
        
        // $this->middleware('roleAdmin');

        $this->middleware('roleDoctor');

    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showEvolutions($id)
    {
        //Obtenemos todos los usuarios
        $users = User :: all();

        //Obtemos todas las historias del paciente
        $patient = Patient :: findOrFail($id);
        $evolutions = $patient->evolutions;

        return view('evolution.get', compact('evolutions', 'patient', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createEvolutions($id)
    {
        //Ver la Vista de Crear
        return view('evolution.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEvolutionValidation $request)
    {
        //Obtener el id del usuario que inicio sesion
        $userid = Auth :: user()->id;

        $evolution = Evolution::create([
            'type' => $request['type'],
            'syptoms' => $request['syptoms'],
            'pressure' => $request['pressure'], 
            'temp' => $request['temp'], 
            'rc' => $request['rc'], 
            'diagnosis' => $request['diagnosis'], 
            'treatment' => $request['treatment'], 
            'user_id' => $userid,
            'patient_id' => $request['patient_id']
        ]);

        //Regresamos a la vista consultas o evoluciones del paciente
        return redirect()->to('evolucion/'.$evolution->patient_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Mostrar detalles de una consulta o evolucion
        $evolution = Evolution :: findOrFail($id);

        //Recuperamos el id del paciente
        $findPatient = Evolution :: findOrFail($id)->patient_id;

        //Mostrar detalles de un Paciente
        $patient = Patient :: findOrFail($findPatient);

        return view('evolution.detail', compact('evolution', 'patient'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function createPDF($id)
    {
        //Mostrar detalles de un Paciente
        $evolution = Evolution :: findOrFail($id);

        //Recuperamos el id del paciente
        $findPatient = Evolution :: findOrFail($id)->patient_id;

        //Mostrar detalles de un Paciente
        $patient = Patient :: findOrFail($findPatient);
        
        //Generacion de PDF        
        $pdf = PDF::loadView('evolution.pdf', compact('evolution', 'patient'));

        // Definimos el tamaño y orientación del papel que queremos.
        $pdf->setPaper('A4', 'landscape');

        return $pdf->stream('Conculta_'.$patient->name.'_'.$patient->lastName.'_'.$patient->create_at.'.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Ver la Vista de Actualizar
        $evolution = Evolution :: findOrFail($id);

        return view('evolution.update', compact('evolution'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateEvolutionValidation $request, $id)
    {
        //Actualizar los datos de una consulta o evolucion
        $evolution = Evolution :: findOrFail($id);
        $evolution->type = $request->type;
        $evolution->syptoms = $request->syptoms;
        $evolution->pressure = $request->pressure;
        $evolution->temp = $request->temp;
        $evolution->rc = $request->rc;
        $evolution->diagnosis = $request->diagnosis;
        $evolution->treatment = $request->treatment;
        $evolution->save();

        //Regresamos a la vista evoluciones o consultas del paciente
        return redirect()->to('evolucion/'.$evolution->patient_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Eliminar una Evolucion
        $evolution = Evolution :: find($id);
        $evolution->delete();

        //Regresamos a la pagina que estabamos
        return redirect()->back();
    }
}
