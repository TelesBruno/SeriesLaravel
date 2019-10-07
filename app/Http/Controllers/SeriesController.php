<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use Illuminate\Http\Request;
use App\Serie;

class SeriesController extends Controller{
    public function index(Request $request){
       $series = Serie::query()->orderby('nome')->get();
       $mensagem  = $request->session()->get('mensagem');
       return view('series.index', compact('series','mensagem'));
       
    }
    public function create(){
        return view('series.create');

    }
    public function store(SeriesFormRequest $request){
        $nome = $request->nome;
        $serie = Serie::create( $request->all());
        $request->session()->
            flash('mensagem',"Série {$serie->nome} 
                criada com sucesso!");
        return redirect('series');
    }
    public function destroy(Request $request){
        Serie::destroy($request->id);
        $request->session()->
            flash('mensagem',"Série
                deletada com sucesso!");
        return redirect('series');
    }
}