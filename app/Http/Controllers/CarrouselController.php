<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrousel;
use App\Http\Requests\CarrouselRequest;

use Illuminate\Support\Facades\Storage;

class CarrouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carrousels = Carrousel::orderBy('id','DESC')->paginate(5);
        return view('carrousels.index', compact('carrousels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('carrousels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarrouselRequest $request)
    {
        $carrousel = new Carrousel;

        $carrousel->file        = $request->file;
        $carrousel->titulo      = $request->titulo;
        $carrousel->description = $request->description;

        $carrousel->save();


        //IMAGE
        if($request->file('file')){
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $carrousel->fill(['file' => asset($path)])->save();
        }
        
       //return $request->file; 

            return redirect()->route('carrousels.index')->with('info', 'El carrousel fue guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $carrousel = Carrousel::find($id);
        return view('carrousels.show', compact('carrousel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carrousel = Carrousel::find($id);
        return view('carrousels.edit', compact('carrousel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CarrouselRequest $request, $id)
    {

        $carrousel = Carrousel::find($id);

        if($request->file('file')){
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $carrousel->fill(['file' => asset($path)])->save();
        }        

        $carrousel->titulo   = $request->titulo;
        $carrousel->description  = $request->description;

        $carrousel->save();

        return redirect()->route('carrousels.index')->with('info', 'El carrouselo fue actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carrousel = Carrousel::find($id);
        $carrousel->delete();

        return back()->with('info','La imagen fue eliminada');
    }
}
