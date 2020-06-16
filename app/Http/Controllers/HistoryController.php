<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\History;
use App\Patient;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\MessageBag;
use App\Http\Requests\CreateHistoryValidation;

class HistoryController extends Controller
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
    public function showStories($id)
    {
        //Obtenemos todos los usuarios
        $users = User :: all();

        //Obtemos todas las historias del paciente
        $patient = Patient :: findOrFail($id);
        $stories = $patient->stories;

        return view('history.get', compact('stories', 'patient', 'users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createStories($id)
    {
        //Ver la Vista de Crear
        return view('history.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateHistoryValidation $request)
    {
        //Obtener el id del usuario que inicio sesion
        $userid = Auth :: user()->id;

        $history = History::create([
            'age' => $request['age'],
            'address' => $request['address'],
            'paternalGrandparents' => $request['paternalGrandparents'], 
            'maternalGrandparents' => $request['maternalGrandparents'], 
            'uncles' => $request['uncles'], 
            'dad' => $request['dad'], 
            'mom' => $request['mom'], 
            'brothers' => $request['brothers'],
            'birthdate' => $request['birthdate'], 
            'placeOfBirth' => $request['placeOfBirth'], 
            'currentResidence' => $request['currentResidence'], 
            'scholarship' => $request['scholarship'], 
            'maritalStatus' => $request['maritalStatus'], 
            'hygienicHabits' => $request['hygienicHabits'],
            'dietaryHabits' => $request['dietaryHabits'], 
            'drugAddiction' => $request['drugAddiction'], 
            'childhoodIllnesses' => $request['childhoodIllnesses'], 
            'surgeries' => $request['surgeries'], 
            'allergies' => $request['allergies'], 
            'currentMedication' => $request['currentMedication'],
            'menarca' => $request['menarca'], 
            'menstrualRhythm' => $request['menstrualRhythm'], 
            'fum' => $request['fum'], 
            'gestas' => $request['gestas'], 
            'paras' => $request['paras'], 
            'abortions' => $request['abortions'],
            'caesareanSections' => $request['caesareanSections'], 
            'fup' => $request['fup'], 
            'vsa' => $request['vsa'], 
            'contraceptiveUses' => $request['contraceptiveUses'], 
            'weight' => $request['weight'], 
            'size' => $request['size'],
            'head' => $request['head'], 
            'eyes' => $request['eyes'], 
            'ears' => $request['ears'],
            'nose' => $request['nose'], 
            'mouth' => $request['mouth'], 
            'neck' => $request['neck'],
            'chest' => $request['chest'],
            'shape' => $request['shape'],
            'respiratoryMovements' => $request['respiratoryMovements'], 
            'fr' => $request['fr'],
            'abnormalNoises' => $request['abnormalNoises'],
            'fc' => $request['fc'], 
            'abdomen' => $request['abdomen'], 
            'superiorLimbs' => $request['superiorLimbs'], 
            'lowerExtremities' => $request['lowerExtremities'],
            'user_id' => $userid,
            'patient_id' => $request['patient_id']
        ]);

        //Regresamos a la vista historias del paciente
        return redirect()->to('historia/'.$history->patient_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Mostrar detalles de un Paciente
        $history = History :: findOrFail($id);

        //Recuperamos el id del paciente
        $findPatient = History :: findOrFail($id)->patient_id;

        //Mostrar detalles de un Paciente
        $patient = Patient :: findOrFail($findPatient);

        return view('history.detail', compact('history', 'patient'));
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
        $history = History :: findOrFail($id);

        //Recuperamos el id del paciente
        $findPatient = History :: findOrFail($id)->patient_id;

        //Mostrar detalles de un Paciente
        $patient = Patient :: findOrFail($findPatient);
        
        //Generacion de PDF        
        $pdf = PDF::loadView('history.pdf', compact('history', 'patient'));

        // Definimos el tamaño y orientación del papel que queremos.
        $pdf->setPaper('A4', 'landscape');

        return $pdf->stream('Historia_Clinica_'.$patient->name.'_'.$patient->lastName.'.pdf');
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
        $history = History :: findOrFail($id);

        return view('history.update', compact('history'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateHistoryValidation $request, $id)
    {
        //Actualizar los datos de una Historia
        $history = History :: findOrFail($id);
        $history->age = $request->age;
        $history->address = $request->address;
        $history->paternalGrandparents = $request->paternalGrandparents;
        $history->maternalGrandparents = $request->maternalGrandparents;
        $history->uncles = $request->uncles;
        $history->dad = $request->dad;
        $history->mom = $request->mom;
        $history->brothers = $request->brothers;
        $history->birthdate = $request->birthdate;
        $history->placeOfBirth = $request->placeOfBirth;
        $history->currentResidence = $request->currentResidence;
        $history->scholarship = $request->scholarship;
        $history->maritalStatus = $request->maritalStatus;
        $history->hygienicHabits = $request->hygienicHabits;
        $history->dietaryHabits = $request->dietaryHabits;
        $history->drugAddiction = $request->drugAddiction;
        $history->childhoodIllnesses = $request->childhoodIllnesses;
        $history->surgeries = $request->surgeries;
        $history->allergies = $request->allergies;
        $history->currentMedication = $request->currentMedication;
        $history->menarca = $request->menarca;
        $history->menstrualRhythm = $request->menstrualRhythm;
        $history->fum = $request->fum;
        $history->gestas = $request->gestas;
        $history->paras = $request->paras;
        $history->abortions = $request->abortions;
        $history->caesareanSections = $request->caesareanSections;
        $history->fup = $request->fup;
        $history->vsa = $request->vsa; 
        $history->contraceptiveUses = $request->contraceptiveUses;
        $history->weight = $request->weight;
        $history->size = $request->size;
        $history->head = $request->head; 
        $history->eyes = $request->eyes;
        $history->ears = $request->ears;
        $history->nose = $request->nose; 
        $history->mouth = $request->mouth; 
        $history->neck = $request->neck;
        $history->chest = $request->chest;
        $history->shape = $request->shape;
        $history->respiratoryMovements = $request->respiratoryMovements;
        $history->fr = $request->fr;
        $history->abnormalNoises = $request->abnormalNoises;
        $history->fc = $request->fc;
        $history->abdomen = $request->abdomen;
        $history->superiorLimbs = $request->superiorLimbs;
        $history->lowerExtremities = $request->lowerExtremities;
        $history->save();

        //Regresamos a la vista historias del paciente
        return redirect()->to('historia/'.$history->patient_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Eliminar una Historia
        $history = History :: find($id);
        $history->delete();

        //Regresamos a la paginaque estabamos
        return redirect()->back();
    }
}