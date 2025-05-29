@extends('layouts.main')

@section('title', 'Estudando laravel' )


@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque uma Aula</h1>
    <form action="">
        <input type="text" name="search" id="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="aulas-container" class="col-md-12">
    <h2>Próximoas Aulas</h2>
    <p class="subtitle">Veja as Aulas dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach($aulas as $aula)
        <div class="card col-md-3">
            <img src="/img/banner.jpg" alt="{{  $aula->title }}">
            <div class="card-body">
                <p class="card-date">27/05/2025</p>
                <h5 class="card-title">{{ $aula->title}}</h5>
                <p class="card-participantes">X participantes</p>
                <a href="#"  class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
