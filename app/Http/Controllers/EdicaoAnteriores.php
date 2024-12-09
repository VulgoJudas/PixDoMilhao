<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\edicoes_anteriores;

class EdicaoAnteriores extends Controller
{
    //
    public function index(){
        $dados=[];

        $data=edicoes_anteriores::All();

        $dados=$data;
        

        return view('edicao_anteriores',$dados);
    }
}
