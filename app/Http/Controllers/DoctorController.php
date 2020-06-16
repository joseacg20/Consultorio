<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\MessageBag;
use App\Http\Requests\CreateDoctorValidation;
use App\Http\Requests\UpdateDoctorValidation;

class DoctorController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');
        
        $this->middleware('roleAdmin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      
        //Mostrar todos los Doctores
        $doctors = User :: whereHas(
            'roles', function($role) {
                $role->where('role', 'Doctor');
            }
        )->get();

        return view('doctor.get', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Ver la Vista de Crear
        return view('doctor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateDoctorValidation $request)
    {
        //Crear un Doctor nuevo
        $user = User::create([
            'name' => $request['name'],
            'lastName' => $request['lastName'],
            'specialty' => $request['specialty'],
            'professionalCertificate' => $request['professionalCertificate'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        //Buscar el rol a asignar
        $role_user = Role :: find(2);
        //Asignar el Rol al Usuario
        $user->roles()->attach($role_user);
        //Redireccion a la ruta doctores
        return redirect('doctores');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Mostrar detalles de un doctor
        $doctor = User :: findOrFail($id);

        return view('doctor.details', compact('doctor'));
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
        $doctor = User :: findOrFail($id);

        return view('doctor.update', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDoctorValidation $request, $id)
    {
        //Actualizar los datos de un Doctor
        $user = User :: findOrFail($id);
        $user->name = $request->name;
        $user->lastName = $request->lastName;
        $user->specialty = $request->specialty;
        $user->professionalCertificate = $request->professionalCertificate;
        $user->email = $request->email;
        $user->save();

        return redirect('doctores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Eliminar un Doctor
        $users = User :: find($id);
        $users->delete();

        return redirect('doctores');
    }
}
