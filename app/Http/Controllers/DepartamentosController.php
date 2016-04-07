<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;
use App\Http\Requests;

class DepartamentosController extends Controller
{
  public function index()
  {
    $departamentos = Departamento::all();

    return view('departamentos.index', compact('departamentos') );
  }

  public function show(Departamento $departamento)
  {
    return view('departamentos.show', compact('departamento') );
  }

}
