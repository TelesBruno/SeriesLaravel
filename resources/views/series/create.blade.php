@extends('layout')
@section('cabecalho')
Series    
@endsection
@section('conteudo')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form  method="post">
            @csrf
            <div class="form-group">
                <label for="nome">Nome</label>
                <input  class="form-control" type="text" name="nome" id="nome">
            </div>
            <button class="btn btn-primary">Adicionar</button>
        </form>
@endsection