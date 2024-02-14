@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Treni in partenza oggi</h1>
    @foreach ($todayTrains as $train)
        <p>{{ $train->company }} - Partenza: {{ $train->departure_station }} - Arrivo: {{ $train->arrival_station }} -
            Orario di partenza: {{ $train->departure_time }}</p>
    @endforeach
@endsection
