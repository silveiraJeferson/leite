<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vaca;

use App\Http\Requests;

class VacaController extends Controller
{
    public function getIndex(){       
        return view('hackathon.folders.login');
    }
    
    public function getInicio(){
        return view('hackathon.folders.inicio');
    }
    public function getAnimais(){
        $lista = Vaca::all();
        return view('hackathon.folders.gestao_animais.index', compact('lista'));
    }
    
    public function getVacas(){
        $lista = Vaca::all();
        return  view('hackathon.folders.gestao_animais.listagem', compact('lista'));
    }
    
    public function getAdicionar(){
        return view('hackathon.folders.gestao_animais.form_add_animal');
    }
    
    public function getVer($id) {
        $id = (int)$id;        
        $lista = Vaca::where('id',$id)->get();
        
        return view('hackathon.folders.gestao_animais.ver_animal',  compact('lista'));
    }
    
    //---------------------------------------------------------------------------------------
    public function postAdd(Request $request){
        $animal =  Vaca::create($request->all());
        return redirect('/adicionar');
    }
    
}
