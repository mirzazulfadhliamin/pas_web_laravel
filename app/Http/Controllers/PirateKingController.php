<?php

namespace App\Http\Controllers;

use App\Models\PirateKing;
use Illuminate\Http\Request;

class PirateKingController extends Controller
{
    public function index(){
        return view( "PirateKing.all", ['halaman' => 'PirateKing' ,
        'title' => 'PirateKing',
       'mugiwaras' => PirateKing::all(),
       ]);
    }


    public function show(PirateKing $pirateKing){
        return view( "PirateKing.detail", [
            'halaman' => 'DetailPage' ,
            'foto' => "images/ghost2.png"
            ,
        'title' => 'detail-page',
         'kru' => $pirateKing//route model binding
    ,],);//
    }
}
