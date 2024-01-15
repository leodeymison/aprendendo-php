@extends('layouts.main')

@section('title', 'Alcan Events')

@section('content')

    <h1>um evento</h1>
    <p>Nome: {{ $event->title }}</p>
    <a href="/">Voltar para home</a>
@endsection
