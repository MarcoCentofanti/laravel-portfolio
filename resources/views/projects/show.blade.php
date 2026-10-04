@extends('layouts.app')

@section('title', $project->name)

@section('content')
    <div class="container py-5">
        <div class="card shadow-sm">
            <div class="card-body p-4">
                <div class="d-flex gap-2">
                    <a class="btn btn-outline-warning" href="{{route('projects.edit', $project)}}">Modifica</a>
                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      Elimina
                    </button>
                   

                </div>
                <h1 class="card-title mb-3">Nome Progetto: {{ $project->name }}</h1>
                <h2 class="h5 text-secondary mb-3">Cliente: {{ $project->client }}</h2>
                <p class="card-text">Tipologia: {{ $project->type->name }}</p>
                <p class="card-text">Descrizione: {{ $project->description }}</p>

                <a href="{{ route('projects.index') }}" class="btn btn-outline-primary mt-3">
                    Torna ai progetti
                </a>
            </div>
        </div>
    </div>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Vuoi eliminare il Progetto?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Il progetto verrà eliminato definitivamente
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         <form action="{{route('projects.destroy', $project)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-outline-danger">Elimina definitivamente</button>
                    </form>
      </div>
    </div>
  </div>
</div>
@endsection
