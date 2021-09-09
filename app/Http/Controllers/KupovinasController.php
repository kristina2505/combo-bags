<?php

namespace App\Http\Controllers;
use App\Kupovina;
use Illuminate\Http\Request;

class KupovinasController extends Controller
{
    public function getKupovine(){
        $data=Kupovina::join('torbicas', 'torbicas.id', '=', 'kupovinas.Torbica')
        ->get(['kupovinas.ime', 'kupovinas.prezime', 'torbicas.model', 'torbicas.cena']);
        return $data;
    }

    public function addKupovina(){
        request()->validate([
            'ime'=> 'required',
            'prezime'=> 'required',
            'Torbica'=> 'required',
            'email'=> 'email'
        ]);
        return Kupovina::create([
            'ime'=>request('ime'),
            'prezime'=>request('prezime'),
            'email'=>request('email'),
            'Torbica'=>intval(request('Torbica'))
        ]);
    }

}
