<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller{
    public $pool=[
        ['nome'=>'Minigheddu','img'=>'/Media/Merc1.jpg'],
        ['nome'=>'Passagareddu','img'=>'/Media/Merc2.jpg'],
        ['nome'=>'Franco','img'=>'/Media/Merc3.jpg'],
        ['nome'=>'Paoleddu','img'=>'/Media/Merc4.jpg'],

    ];
    public function Welcome(){
        return view('welcome');
    }
    public function People(){
        return view('personale');
    }
    public function Mercenary(){
    return view('mercenario',['pool'=>$this->pool]);
}
public function Selezionato($Scelto){
    $Empty=['nome'=>'Igor','img'=>'/Media/Casa.jpg'];
    foreach($this->pool as $single){
    if($Scelto==$single['nome']){
        return view('Chosen',['theone'=>$single]);
    }
}
return view('Chosen',['theone'=>$Empty]);
}
    
}