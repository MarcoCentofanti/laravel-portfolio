@extends('layouts.app')

@section('title', 'Aggiungi un progetto')

@section('content')
    {{-- @dd($technologies) --}}
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <h1 class="mb-4">Aggiungi un progetto</h1>

                <form action="{{ route('projects.store') }}" method="POST" class="card shadow-sm">
                    @csrf

                    <div class="card-body p-4">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>

                        <div class="mb-3">
                            <label for="client" class="form-label">Cliente</label>
                            <input type="text" class="form-control" id="client" name="client">
                        </div>
                        <div class="form-control d-flex flex-column mb-3">
                            <div class="d-flex justify-content-between">
                                <label for="type" class="form-label">Tipologia</label>
                                <a  href="{{route('types.index')}}">+ Aggiungi una tipologia</a>

                            </div>
                            <select name="type" id="type">
                                @foreach ($types as $type)
                                    <option value="{{$type->id}}">{{$type->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-control mb-3 d-flex flex-wrap">
                            @foreach ($technologies as $technology)
                            <div class="check me-3">
                                <input type="checkbox" name="technologies[]" id="technology-{{$technology->id}}" value="{{$technology->id}}" >
                                <label for="technology-{{$technology->id}}">{{$technology->name}}</label>
                            </div>
                            @endforeach
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione</label>
                            <textarea class="form-control" id="description" name="description" rows="5"></textarea>
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">Salva progetto</button>
                            <a href="{{ route('projects.index') }}" class="btn btn-outline-secondary">Annulla</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
