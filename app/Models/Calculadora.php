<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calculadora extends Model
{
    use HasFactory;
    protected $fillable = ['valor1','valor2','operador','resultado'];
    static function operadoresArray(){
        return ['+','-','/','*'];
    }
}
