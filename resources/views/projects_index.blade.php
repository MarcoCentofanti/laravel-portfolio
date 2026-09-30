@extends('layouts.app')

@section('title', 'My Projects')



@section('content')

@foreach ($projects as $project)
<h1>{{$project->name}}</h1>
<p>{{$project->client}}</p>
<p>{{$project->description}}</p>
<a href=""></a>

    
@endforeach
    
@endsection
