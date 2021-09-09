<?php

namespace App;
//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Torbica extends Model
{
    //use HasFactory;
    protected $fillable=[
        'model', 'opis', 'materijal', 'cena', 'oblik'
    ];
}
