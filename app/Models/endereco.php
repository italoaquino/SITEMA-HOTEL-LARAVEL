<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class endereco extends Model
{
    use HasFactory;

    protected $fillable = [
        'cep',
        'bairro',
        'largadouro',
        'complemento',
        'numero',
    ];

    public function Hospede(){
        return$this->hasMany('App\Models\Hospede');
    }

}