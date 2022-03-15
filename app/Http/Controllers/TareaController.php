<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tareas =Tarea::all();
        return view('tareas.indexTareas',compact('tareas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tareas.formTarea');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'tarea' => ['required','min:5'],
            'descripcion' => ['required','min:5'],
            'tipo' => 'required',
        ]);

        $tarea = new Tarea;
        $tarea->tareas = $request->tarea;
        $tarea->descripcion = $request->descripcion;
        $tarea->tipo = $request->tipo;
        $tarea->save();
        return redirect('/tarea');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function show(Tarea $tarea)
    {
        //
        //$tarea = Tarea::where('id',$id)->first();
        return view('tareas.showTarea',compact('tarea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarea $tarea)
    {
        return view('tareas.formTarea',compact('tarea'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarea $tarea)
    {
        $request->validate([
            'tarea' => ['required','min:5'],
            'descripcion' => ['required','min:5'],
            'tipo' => 'required',
        ]);
        $tarea->tareas = $request->tarea;
        $tarea->descripcion = $request->descripcion;
        $tarea->tipo = $request->tipo;
        $tarea->save();
        return redirect('/tarea');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tarea  $tarea
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarea $tarea)
    {
        $tarea->delete();
        return redirect('/tarea');
    }
}
