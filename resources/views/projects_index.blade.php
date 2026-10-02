@extends('layouts.app')

@section('title', 'My Projects')

@section('content')
    <div class="container py-5">
        <div class="mb-4 d-flex justify-content-between">
            <h1>I miei progetti</h1>
            <a class="btn btn-outline-primary" href="{{route('projects.create')}}">Inserisci un nuovo progetto</a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Nome</th>
                        <th>Cliente</th>
                        <th>Descrizione</th>
                        <th></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{ $project->name }}</td>
                            <td>{{ $project->client }}</td>
                            <td>{{ $project->description }}</td>
                            <td class="text-end">
                                <div class="d-flex gap-2">
                                     <a href="{{ route('projects.show', $project) }}" class="btn btn-outline-primary btn-sm">
                                         Dettagli
                                     </a>
                                    <a class="btn btn-outline-warning" href="{{route('projects.edit', $project)}}">Modifica</a>
                                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{$project->id}}">
                                    Elimina
                                    </button>
                                            <!-- Modal -->
                                        <div class="modal fade" id="deleteModal-{{$project->id}}" tabindex="-1" aria-labelledby="Modal-{{$project->id}}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="Modal-{{$project->id}}">Vuoi eliminare il Progetto {{$project->name}}?</h1>
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
                   

                                 </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



@endsection
