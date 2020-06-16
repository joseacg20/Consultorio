<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Note;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use App\Http\Requests\CreateNoteValidation;

class NoteController extends Controller
{
    /**
     * Instantiate a new controller instance.
     *
     * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('roleSecretary')->except('create', 'store');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Obtener el id del usuario que inicio sesion
        $user = Auth::user();
        $user->id;
        $user->roles;

        foreach($user->roles as $role){
            if($role->pivot->role_id == 1){
                //Mostrar todos las Notas
                $notes = Note :: all();

                return view('note.get', compact('notes'));
            } else if ($role->pivot->role_id == 3 || $role->pivot->role_id == 2){
                //Mostrar todos las Notas de una secretaria
                $notes = Note :: where('secretary', $user->id)->get();

                return view('note.get', compact('notes'));
            } else {
                return view('home');   
            }
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Mostrar todos las Secretarias
        $secretarys = User :: whereHas(
            'roles', function($role) {
                $role->where('role', 'Secretaria');
            }
        )->get();

        //Ver la Vista de Crear
        return view('note.create', compact('secretarys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateNoteValidation $request)
    {
        //Obtener el id del usuario que inicio sesion
        $userid = Auth :: user()->id;

        $history = Note::create([
            'affair' => $request['affair'],
            'content' => $request['content'],
            'doctor' => $request['doctor'], 
            'secretary' => $request['secretary'], 
        ]);

        //Regresamos a la vista notas del usuario
        return redirect('notas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Mostrar detalles de una nota
        $note = Note :: findOrFail($id);

        return view('note.detail', compact('note'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
        $note = Note :: find($id);
        $note->delete();

        return redirect('notas');
    }
}
