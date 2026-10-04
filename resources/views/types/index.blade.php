@extends('layouts.app')

@section('title', 'Gestisci Tipi')
    
@section('content')

<div class="container">
    <div>
        <h1>Gestisci le tue tipologie</h1>
    </div>
    <div class="table-responsive">
        <table class="table table-stripped align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Nome</th>
                    <th>Descrizione</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($types as $type)
                    <tr>
                        <td>{{$type->name}}</td>
                        <td>{{$type->description}}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a class="btn btn-outline-primary" href="{{route('types.show', $type)}}">Dettaglio</a>
                                <a class="btn btn-outline-warning" href="{{route('types.edit', $type)}}">Modifica</a>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{$type->id}}">
                                Elimina
                                </button>
                                <!-- Modal -->
                                    <div class="modal fade" id="deleteModal-{{$type->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModal-{{$type->id}}">Eliminare definitivamente</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            {{$type->name}}?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <form action="{{route('types.destroy', $type)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger">Elimina definitivamente</button>
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
    <a href="{{route('types.create')}}">+ Aggiungi un tipo</a>
</div>




@endsection