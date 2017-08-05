<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vaca;

use App\Http\Requests;

class VacaController extends Controller
{
    public function getIndex(){
        
        $vacas = Vaca::all();
        dd($vacas);
        return view('hackathon.folders.welcome');
    }
}
