<?php

namespace App\Http\Controllers;

use App\Models\Redhaired;
use Illuminate\Http\Request;

class RedhairedController extends Controller
{
    public function index(){
        return view( "redhaired.all", ['halaman' => 'Red-Haired' ,
        'title' => 'Red-Haired',
       'mugiwaras' => Redhaired::all(),
       ]);
    }


    public function show(Redhaired $mugiwara){
        return view( "redhaired.detail", [
            'halaman' => 'DetailPage' ,
            'foto' => "images/ghost2.png"
            ,
        'title' => 'detail-page',
         'kru' => $mugiwara//route model binding
    ,],);//
    }
}
