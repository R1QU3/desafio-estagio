<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{
    use HasFactory;

    protected $fillable = ['nome','motorizacao','potencia','cambio','direcao','ano','valor_hora','marca','gasolina','alcool','eletrico','disel'];

    public function CarroMarca()
    {
        return $this->belongsTo(CarrosMarca::class, 'marca');
    }

}
