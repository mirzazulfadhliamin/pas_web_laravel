<?php

namespace App\Http\Controllers;

use App\Models\Mugiwara;
use Illuminate\Http\Request;

class MugiwaraController extends Controller
{
    public function index(){
        return view( "mugiwara.all", ['halaman' => 'Mugiwara' ,
        'title' => 'Mugiwara',
       'mugiwaras' => Mugiwara::all(),
       ]);
    }


    public function show(Mugiwara $mugiwara){
        return view( "mugiwara.detail", [
            'halaman' => 'DetailPage' ,
            'foto' => "images/ghost2.png"
            ,
        'title' => 'detail-page',
         'kru' => $mugiwara//route model binding
    ,],);//
    }
}
