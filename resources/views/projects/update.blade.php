@extends('layouts.app')

@section('title', 'Modifica un progetto')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6">
                <h1 class="mb-4">Modifica un progetto</h1>

                <form action="{{ route('projects.update', $project) }}" method="POST" class="card shadow-sm">
                    @csrf
                    @method('PUT')

                    <div class="card-body p-4">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{$project->name}}">
                        </div>

                        <div class="mb-3">
                            <label for="client" class="form-label">Cliente</label>
                            <input type="text" class="form-control" id="client" name="client" value="{{$project->client}}">
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">Tipologia</label>
                            <input type="text" class="form-control" id="type" name="type" value="{{$project->type}}">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Descrizione</label>
                            <textarea class="form-control" id="description" name="description" rows="5">{{$project->description}}</textarea>
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-warning">Conferma Modifiche</button>
                            <a href="{{ route('projects.index') }}" class="btn btn-outline-secondary">Annulla</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
