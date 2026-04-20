@extends('layouts.site')

@section('title', 'Crear organisme')

@section('content')
    @include('organismes.partials.form', [
        'title' => 'Crear organisme',
        'action' => route('organismes.store'),
        'method' => 'POST',
        'organisme' => null,
    ])
@endsection
