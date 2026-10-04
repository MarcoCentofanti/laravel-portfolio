@extends('layouts.app')

@section('title', 'crea una categoria')
    
@section('content')

<div class="container">
    <div>
        <h1>Modifica un tipo</h1>
    </div>
    
    <div>
        <form action="{{route('types.update', $type)}}" method="POST" class="form-control">
            @csrf
            @method('PUT')
            <div class="d-flex flex-column">
                <label for="name">Nome</label>
                <input name="name" id="name" type="text" value="{{$type->name}}">
                <label for="description">Descrizione</label>
                <textarea name="description" id="description" cols="30" rows="10">{{$type->description}}</textarea>
                <input type="submit" class="my-3 btn btn-outline-primary">
            </div>
        </form>
        
        
    </div>
</div>
@endsection