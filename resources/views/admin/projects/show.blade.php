@extends('layouts.admin')

@section('content')
    <h1 class="text-center mb-5">Admin Project - Show</h1>
    <img src="{{ asset('storage/'. $project->image ) }}" alt="{{ $project->image_name }}">
    <h2>{{$project->name}}</h2>
    <p>Data di inizio: {{$project->start_date}}</p>
    <p>Data di fine: {{$project->end_date}}</p>
    <p>Stato: {{$project->status}}</p>
    <p>{{$project->description}}</p>
@endsection
