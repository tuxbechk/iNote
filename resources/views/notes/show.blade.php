@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card text-white bg-dark mb-3">
            <div class="card-header">{{$note->title}}</div>
                <div class="card-body">
                {{$note->message}}
                </div>
            </div>
            <div class="row">
                    <a href="/notes/{{$note->id}}/edit" class="btn btn-secondary mr-3 ml-3">Modifier</a>
                <form action="/notes/{{$note->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </div>
        </div>
        <div class="container my-5"><a href="/notes" class="text-white ">Retour</a></div>
        
    </div>
@endsection