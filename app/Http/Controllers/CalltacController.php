<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calltac;
use App\Http\Requests\CalltacRequest;

use Illuminate\Support\Facades\Storage;

class CalltacController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calltacs = Calltac::orderBy('id','DESC')->paginate(5);
        return view('calltacs.index', compact('calltacs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('calltacs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CalltacRequest $request)
    {
        $calltac = new Calltac;

      
        $calltac->titulo      = $request->titulo;
        $calltac->description = $request->description;

        $calltac->save();


       
        
        
       //return $request->file; 

            return redirect()->route('calltacs.index')->with('info', 'El calltac fue guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $calltac = Calltac::find($id);
        return view('calltacs.show', compact('calltac'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $calltac = Calltac::find($id);
        return view('calltacs.edit', compact('calltac'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CalltacRequest $request, $id)
    {

        $calltac = Calltac::find($id);

           

        $calltac->titulo   = $request->titulo;
        $calltac->description  = $request->description;

        $calltac->save();

        return redirect()->route('calltacs.index')->with('info', 'El calltac fue actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $calltac = calltac::find($id);
        $calltac->delete();

        return back()->with('info','La calltac fue eliminada');
    }
}
