@extends('layouts.main')

@section('title', 'Estudando laravel' )


@section('content')


    <h1>Algum título</h1>
    <img src="/img/banner.jpg" alt="Banner">

    @if (10 > 5 )
    <p>A condição é true</p>
    @endif

    <p>{{ $nome }}</p>

    @if ($nome == "Pedro")
        <p>O nome é Pedro</p>
    @elseif ($nome == "Eduardo")
        <p>O nome é {{  $nome  }} e ele tem {{ $idade }} anos, e a profissão é {{ $profissao }}</p>
    @else
        <p>O nome não é Pedro</p>
    @endif

    @for ($i = 0; $i < count($arr); $i++)
        <p>{{ $arr[$i] }} - {{ $i }}</p>
        @if ($i == 2)
        <p> o i é 2</p>
        @endif
    @endfor

    @foreach ($nomes  as $nome)
    <p> {{ $loop->index }}</p>
    <p>{{ $nome }}</p>

    @endforeach

    @php
        $name = "Eduardo";
        echo $name;
    @endphp

@endsection
