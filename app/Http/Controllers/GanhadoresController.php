<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\User_sorteio;
use App\Models\Sorteio;

class GanhadoresController extends Controller
{
    //
    public function index(Request $e){
        $dados=[];
        $user=[];
        $sorteios=User_sorteio::All();

        

        

        return view('ganhadores', $dados);
        
    }
}
