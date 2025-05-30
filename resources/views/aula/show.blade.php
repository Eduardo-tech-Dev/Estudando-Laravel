@extends('layouts.main')

@section('title',  $aula->title )


@section('content')

<div class="col-md-10 offset-md-1">
    <div class="row">
        <div id="image-container" class="col-md-6">
            <img src="/img/aulas/{{  $aula->image }}" class ="img-thumbnail"   alt="{{ $aula->title }}">
        </div>
        <div id="info-container" class="col-md-6">
            <h1>{{ $aula->title}} </h1>
            <p class="aulas-participants"> <ion-icon name="people-outline"></ion-icon>X Participantes</p>
            <p class="aula-owner"><ion-icon name="star-outline"></ion-icon>Dono do evento</p>
            <a href="#" class="btn btn-primary" id="aula-submit">Confirmar Presença</a>
        </div>
            <div class="col-md-12" id="description-container">
                <h3>Sobre o Curso:</h3>
                <p class="aula-description">{{ $aula->description }}</p>
            </div>
    </div>
</div>



@endsection
