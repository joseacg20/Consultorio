<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use App\Http\Requests\CreatePatientValidation;

class PatientController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');
        
        $this->middleware('roleDoctor');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Obtener el id del Usuario que inicio sesion
        $userid = Auth :: user()->id;
        
        //Obtener todos los Pacientes del usuario
        $patients  = User :: find($userid)->patients;

        $sharePatient = Patient :: where('share', 1)->get();
        
        return view('patient.get', compact('patients', 'sharePatient'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Ver la Vista de Crear
        return view('patient.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePatientValidation $request)
    {
        //Obtener el id del usuario que inicio sesion
        $userid = Auth :: user()->id;

        Patient::create([
            'name' => $request['name'],
            'lastName' => $request['lastName'],
            'email' => $request['email'],
            'home' => $request['home'],
            'phone' => $request['phone'], 
            'share' => false,
            'user_id' => $userid
        ]);

        return redirect('pacientes');
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
        $patient = Patient :: findOrFail($id);

        $doctor = User :: findOrFail($patient->user_id);
        
        return view('patient.detail', compact('patient', 'doctor'));
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
        $patient = Patient :: findOrFail($id);

        return view('patient.update', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreatePatientValidation $request, $id)
    {
        $patient = Patient :: findOrFail($id);
        if(empty($request->share)){
            $patient->name = $request->name;
            $patient->lastname = $request->lastName;
            $patient->email = $request->email;
            $patient->home = $request->home;
            $patient->phone = $request->phone;
            $patient->share = false;
            $patient->save();
        } else {
            $patient->name = $request->name;
            $patient->lastname = $request->lastName;
            $patient->email = $request->email;
            $patient->home = $request->home;
            $patient->phone = $request->phone;
            $patient->share = true;
            $patient->save();
        }
        
        return redirect('pacientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Eliminar una Secretaria
        $patient = Patient :: find($id);
        $patient->delete();

        return redirect('pacientes');
    }
}
