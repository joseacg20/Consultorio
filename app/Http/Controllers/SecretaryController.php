<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\MessageBag;
use App\Http\Requests\CreateSecretaryValidation;
use App\Http\Requests\UpdateSecretaryValidation;

class SecretaryController extends Controller
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
        //Mostrar todas las Secretarias
        $secretaries = User :: whereHas(
            'roles', function($role) {
                $role->where('role', 'Secretaria');
            }
        )->get();

        return view('secretary.get', compact('secretaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Ver la Vista de Crear
        return view('secretary.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSecretaryValidation $request)
    {
        //Crear una Secretaria nueva
        $user = User::create([
            'name' => $request['name'],
            'lastName' => $request['lastName'],
            'specialty' => null,
            'professionalCertificate' => null,
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        //Buscar el rol a asignar
        $role_user = Role :: find(3);
        //Asignar el Rol al Usuario
        $user->roles()->attach($role_user);
        //Redireccion a la ruta doctores
        return redirect('secretarias');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Mostrar detalles de una Secretaria
        $secretary = User :: findOrFail($id);

        return view('secretary.details', compact('secretary'));
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
        $secretary = User :: findOrFail($id);

        return view('secretary.update', compact('secretary'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSecretaryValidation $request, $id)
    {
        //Actualizar los datos de una Secretaria
        $user = User :: findOrFail($id);
        $user->name = $request->name;
        $user->lastName = $request->lastName;
        $user->specialty = null;
        $user->professionalCertificate = null;
        $user->email = $request->email;
        $user->save();

        return redirect('secretarias');
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
        $users = User :: find($id);
        $users->delete();

        return redirect('secretarias');
    }
}
