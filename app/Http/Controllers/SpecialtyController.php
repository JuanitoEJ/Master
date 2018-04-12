<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Specialty;
use App\Http\Requests\SpecialtyRequest;

use Illuminate\Support\Facades\Storage;

class SpecialtyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialtys = Specialty::orderBy('id','DESC')->paginate(5);
        return view('specialities.index', compact('specialtys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('specialities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SpecialtyRequest $request)
    {
        $specialty = new Specialty;

        $specialty->file        = $request->file;
        $specialty->titulo      = $request->titulo;
        $specialty->description = $request->description;

        $specialty->save();


        //IMAGE
        if($request->file('file')){
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $specialty->fill(['file' => asset($path)])->save();
        }
        
       //return $request->file; 

            return redirect()->route('specialties.index')->with('info', 'El specialty fue guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $specialty = Specialty::find($id);
        return view('specialities.show', compact('specialty'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $specialty = Specialty::find($id);
        return view('specialties.edit', compact('specialty'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SpecialtyRequest $request, $id)
    {

        $specialty = Specialty::find($id);

        if($request->file('file')){
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $specialty->fill(['file' => asset($path)])->save();
        }        

        $specialty->titulo   = $request->titulo;
        $specialty->description  = $request->description;

        $specialty->save();

        return redirect()->route('specialties.index')->with('info', 'El specialty fue actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $specialty = Specialty::find($id);
        $specialty->delete();

        return back()->with('info','La specialty fue eliminada');
    }
}
