@extends('layouts.app')

@section('title', 'crea una categoria')
    
@section('content')

<div class="container">
    <div>
        <h1>Aggiugni un tipo</h1>
    </div>
    
    <div>
        <form action="{{route('types.store')}}" method="POST" class="form-control">
            @csrf
            <div class="d-flex flex-column">
                <label for="name">Nome</label>
                <input name="name" id="name" type="text">
                <label for="description">Descrizione</label>
                <input name="description" id="description" type="textarea">
                <input type="submit" class="my-3 btn btn-outline-primary">
            </div>
        </form>
        
        
    </div>
</div>
@endsection