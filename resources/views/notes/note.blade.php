@extends('layouts.app')

@section('content')
    <div class="container">
            <h1 class="text-center text-white" style="font-family: 'Tangerine', serif;
            font-size: 48px;">Mes Notes</h1>
        <a href="{{route('notes.create')}}" class="btn btn-primary">Nouvelle note</a>
        <div class="row">
            @if ($notes->count() ==0 )
                <strong class="text-white my-3">Aucune note enregistrer..........................</strong>
            @endif
            @foreach ($notes as $note)
            
                        @if ($note->user_id == Auth::user()->id)
                            
                        <div class="col-md-4 col-lg-3 my-3">
                            <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                                <h5 class="card-header">{{$note->title}}</h5>
                                <div class="card-body">
                                <p class="card-text">{{$note->description}}</p>
                                <a href="/notes/{{$note->id}}" class="btn btn-warning" >Voir</a>
                                    
                                </div>
                            </div>
                        </div>
                    
                        @endif

            @endforeach
        </div>
        {{$notes->links()}}
    </div>
@endsection