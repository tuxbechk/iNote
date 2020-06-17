@extends('layouts.app')

@section('content')
    @guest
        <div class="text-center" id="connect" >
            <a href="{{route('login')}}" class="btn btn-primary">Se connecter</a>
        </div>
    @endguest
    @auth
    <div class="container">
        <h1 class="text-white text-center my-3">Mes prises de Note</h1>
        <a href="{{ route('notes.index') }}" class="btn btn-primary btn-lg btn-block">Voir mes notes</a>
        
    </div>
        
        
    @endauth
@endsection
       