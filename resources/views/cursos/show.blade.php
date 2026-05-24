@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso)

@section('content')
    <h1>bienvenido al curso de {{$curso}}</h1>
@endsection
