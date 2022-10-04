@extends('layouts.main')

@section('title', 'MVC Events')

@section('content')

<h1>Titulo Laravel ...</h1>
<img src="img/banner.jpg" alt="Banner">
@if( 10 > 5)
    <p>A condição é true.. </p>
@endif

<p> {{ $nome }} </p>

@if($nome == "Pedro")
<p>O nome é Pedro</p>

@elseif($nome == "Marcos")
<p>O nome é {{ $nome }} e ele tem {{ $idade }} anos e trabalha como {{ $profissao }}</p>

@else
<p>O nome não é Pedro</p>

@endif

@for($i = 0; $i < count($arr); $i ++)
    <p>{{ $arr[$i] }} - {{ $i }}</p> 
    @if($i == 2)
    <p>O i é 2</p>
    @endif
@endfor
    
@foreach($nomes as $nome)
    <p>{{ $loop->index }}</p>
    <p>{{ $nome }}</p>
@endforeach

    <!-- PHP puro -->
@php
    $name = "joaquim";
    echo $name;
@endphp

<!-- Comentário do HTML -->    
{{-- Este é um comentário do Blade--}}

@endsection