@extends('layouts.main')

@section('title', 'Crie Aula' )


@section('content')


<div id="aula-create-container" class="col-md-6 offset-md-3">
    <h1>Crie Sua aula</h1>
    <form action="/aula" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="image">Imagem do Curso:</label>
        <input type="file" id="image" name="image"class="from-control-file">
    </div>
    <div class="form-group">
        <label for="title">Curso:</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Curso">
    </div>
     <div class="form-group">
        <label for="title">O Evento é privado?</label>
        <select name="private" id="private" class="form-control">
            <option value="0">Não</option>
            <option value="1"> Sim</option>
        </select>
    </div>
    <div class="form-group">
        <label for="title">Descricao:</label>
        <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no Curso."></textarea>
    </div>
    <input type="submit" class="btn btn-primary" value="Criar Curso">
    </form>
</div>


@endsection
