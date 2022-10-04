@extends('layouts.main')

@section('title', 'Produto')

@section('content')

    @if($id != null)
         <P>Exibindo produto id: {{ $id }}</P>
    @endif

@endsection