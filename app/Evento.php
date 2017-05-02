<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{   
    public $timestamps = false;
    protected $fillable = ['nome','data','local','cliente','imagem'];
}
