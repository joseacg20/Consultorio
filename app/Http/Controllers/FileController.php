<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
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
    public function index($id)
    {
        return view('files.file', compact('id'));
    }
}
