<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller{
    public function Welcome(){
        return view('welcome');
    }
    public function People(){
        return view('personale');
    }
    public function Mercenary(){
        $pool=[
            ['nome'=>'Minigheddu','img'=>'/Media/Merc1.jpg'],
            ['nome'=>'Passagareddu','img'=>'/Media/Merc2.jpg'],
            ['nome'=>'Franco','img'=>'/Media/Merc3.jpg'],
            ['nome'=>'Paoleddu','img'=>'/Media/Merc4.jpg'],

        ];
    //     $Empty=['nome'=>'Igor','img'=>'/Media/Casa.jpg'];
    //     foreach($pool as $single){
    //     if($recruit==$single['name']){
    //         return view('Mercenario',['Scelto'=>$single]);
    //     }
    // }
    // return view('Mercenario',['Scelto'=>$Empty]);
    // }
    return view('mercenario',['pool'=>$pool]);
}
public function Selezionato($Scelto){
    $pool=[
        ['nome'=>'Minigheddu','img'=>'/Media/Merc1.jpg'],
        ['nome'=>'Passagareddu','img'=>'/Media/Merc2.jpg'],
        ['nome'=>'Franco','img'=>'/Media/Merc3.jpg'],
        ['nome'=>'Paoleddu','img'=>'/Media/Merc4.jpg'],

    ];
    $Empty=['nome'=>'Igor','img'=>'/Media/Casa.jpg'];
    foreach($pool as $single){
    if($Scelto==$single['nome']){
        return view('Chosen',['theone'=>$single]);
    }
}
return view('Chosen',['theone'=>$Empty]);
}
    
}