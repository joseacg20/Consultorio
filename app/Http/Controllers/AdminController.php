<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use App\Http\Requests\CreateRoleValidation;

class AdminController extends Controller
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
        //Obtener todos los Roles
        $roles = Role :: all();

        return view('admin.get', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function create()
    {
        //Ver la Vista de Crear
        return view('admin.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function assign()
    {
        //Obtenemos todos los usuarioas
        $users = User :: all();

        //Obtenemos todos los roles
        $roles = Role :: all();

        //Ver la Vista de Asignar Rol
        return view('admin.assign', compact('roles', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */
    public function store(CreateRoleValidation $request)
    {
        Role::create([
            'role' => $request['role'],
            'description' => $request['description'],
        ]);

        return redirect('administradores');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */
    public function storeRole(Request $request)
    {
        //Obtener el usuario a traves del formulario
        $user_id = $request->user_id;
        //Obtener el rol a traves del formulario
        $rol = $request->role_id;
        //Buscar el usuario
        $user = User :: find($user_id);
        //Buscar el rol a asignar
        $role_user = Role :: find($rol)->id;
        //Asignar el Rol al Usuario
        // $user->roles()->sync($role_user);
        $user->roles()->attach($role_user);

        return redirect('administradores');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
    */
    public function show($id)
    {
        //
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
        $role = Role :: findOrFail($id);

        return view('admin.update', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
    */
    public function update(CreateRoleValidation $request, $id)
    {
        //Actualizar los datos de un Rol
        $role = Role :: findOrFail($id);
        $role->role = $request->role;
        $role->description = $request->description;
        $role->save();

        return redirect('administradores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        //Eliminar un Role
        $role = Role :: find($id);
        $role->delete();

        return redirect('administradores');
    }

    public function asignar_role(Request $request){
        $user = User :: findOrFail($id);
        $rolesId = $request->roles;
        $user->roles()->sync($rolesId);
        return('administradores');
    }

    public function asignar(){
        $users = User :: all();
        $roles = Role :: all();

        return view('admin.deleteassign', compact('users', 'roles'));
    }
}
