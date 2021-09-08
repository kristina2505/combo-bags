<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Torbica;

class TorbicasController extends Controller
{
    public function getAllTorbice(){
        return Torbica::all();
    }

    public function addTorbica(){
        request()->validate([
            'model'=>'required',
            'opis'=>'required',
            'materijal'=>'required',
            'cena'=>'required',
        ]);
        return Torbica::create([
            'model'=>request('model'),
            'opis'=>request('opis'),
            'materijal'=>request('materijal'),
            'cena'=>request('cena')
        ]);
    }

    public function editTorbica(Torbica $torbica){
        request()->validate([
            'model'=>'required',
            'opis'=>'required',
            'materijal'=>'required',
            'cena'=>'required',
        ]);
        $success = $torbica -> update([
            'model'=>request('model'),
            'opis'=>request('opis'),
            'materijal'=>request('materijal'),
            'cena'=>request('cena')
        ]);

        return[
            'success'=>$success
        ];
    }
    public function deleteTorbica(Torbica $torbica){
        
        $success = $torbica -> delete();

        return[
            'success'=>$success
        ];
    }

}
