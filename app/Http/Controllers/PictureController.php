<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Picture;
use App\Http\Requests\PictureRequest;

use Illuminate\Support\Facades\Storage;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pictures = Picture::orderBy('id','DESC')->paginate(5);
        return view('pictures.index', compact('pictures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('pictures.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PictureRequest $request)
    {
        $picture = new Picture;

        $picture->file        = $request->file;
        $picture->titulo      = $request->titulo;
        $picture->description = $request->description;

        $picture->save();


        //IMAGE
        if($request->file('file')){
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $picture->fill(['file' => asset($path)])->save();
        }
        
       //return $request->file; 

            return redirect()->route('pictures.index')->with('info', 'El picture fue guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $picture = Picture::find($id);
        return view('pictures.show', compact('picture'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $picture = Picture::find($id);
        return view('pictures.edit', compact('picture'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PictureRequest $request, $id)
    {

        $picture = Picture::find($id);

        if($request->file('file')){
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $picture->fill(['file' => asset($path)])->save();
        }        

        $picture->titulo   = $request->titulo;
        $picture->description  = $request->description;

        $picture->save();

        return redirect()->route('pictures.index')->with('info', 'El picture fue actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $picture = Picture::find($id);
        $picture->delete();

        return back()->with('info','La picture fue eliminada');
    }
}


