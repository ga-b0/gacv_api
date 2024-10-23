<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;

class DepartamentoController extends Controller
{
    public function getAllDepartments(){
        $departments = Departamento::all();
        return response()->json($departments);
    }

}
