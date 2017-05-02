<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Evento;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $limit = empty($request->all()['limit']) ? 15 : $request->all()['limit'];

        $order = empty($request->all()['order']) ? null : $request->all()['order'];

        if($order != null){
            $order = explode(',',$order);

        }

        $order[0] = empty($order[0])? 'id' : $order[0];
        $order [1] = empty($order[1])? 'asc': $order[0]; 
        
        $where = empty($request->all()['where']) ? null : $request->all()['where'];

        $like = empty($request->all()['like']) ? null : $request->all()['like'];

        if($like){
            $like = explode(',',$like);
            $like[1] = '%' . $like[1] . '%';
        }

        
        $result = Evento::orderBy($order[0], $order[1])
        ->where(function($query) use($like){
            if($like){
                return $query->where($like[0], 'like', $like[1]);
            }
            return $query;
        })
        ->where($where)
        ->paginate($limit);
        
        return response()->json($result);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
