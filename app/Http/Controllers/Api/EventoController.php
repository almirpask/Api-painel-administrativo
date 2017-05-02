<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Evento;

class EventoController extends Controller
{   
    use \App\Http\Controllers\ApiControllerTrait;

    protected $model;

    public function __construct(Evento $model){
        $this->model = $model;
    }
}
