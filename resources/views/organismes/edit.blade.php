@extends('layouts.site')

@section('title', 'Editar organisme')

@section('content')
    @include('organismes.partials.form', [
        'title' => 'Editar organisme',
        'action' => route('organismes.update', $organisme),
        'method' => 'PUT',
        'organisme' => $organisme,
    ])
@endsection
