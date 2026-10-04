@extends('layouts.app')

@section('title', 'dettaglio tipo')
    
@section('content')
<h3>La tua tipologia: {{$type->name}}</h3>
<p>{{$type->description}}</p>
@endsection