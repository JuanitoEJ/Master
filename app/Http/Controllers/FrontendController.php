<?php

namespace App\Http\Controllers;

use App\Carrousel;
use App\About;
use App\Client;
use App\Calltac;
use App\Team;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        //Paginate(4) me dice cuantos registros voy a mostrar en la página
        //OrdenBy me da en que order voy a mostrar los registros asd or desc
        
        $carrousel = Carrousel::orderBy('id', 'asc')->paginate(5);
        $about = About::orderBy('id', 'asc')->paginate(3);
        $client = Client::orderBy('id', 'asc')->paginate(8);
        $calltac = Calltac::orderBy('id', 'asc')->paginate(1);
        $team = Team::orderBy('id', 'asc')->paginate(4);

        //Coloco las tablas que voy a mostrar en el welcome
        //$products2 = Product::orderBy('id', 'desc')->paginate(3);
        //$products3 = Product::orderBy('id', 'desc')->paginate(3);

        //Si temgo varias paginas debo hacer un metodo para cada uno de ellas
        return view('index', compact('carrousel','about','client','calltac', 'team'));
    }

}