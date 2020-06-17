@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modification de la note <span style="color: teal">{{$note->title}}</span></h1>

<form action="/notes/{{$note->id}}" method="POST">
        @csrf
        @method('PATCH')
         <div class="form-group">
         <input type="text" value=" {{ old('title') ?? $note->title }}" class="form-control @error('title') is-invalid @enderror" name="title"  placeholder="Veuillez donner un titre">
            @error('title')
                <div class="invalid-feedback">
                    {{$errors->first('title')}}
                </div>
            @enderror
             
        </div>
        <div class="form-group">
            <input type="text" value="{{old('description') ?? $note->description}}" class="form-control @error('description') is-invalid @enderror" name="description"  placeholder="Veuillez donner description ....">
            @error('description')
                <div class="invalid-feedback">
                    {{$errors->first('description')}}
            </div>
            @enderror
                
           </div>
         <div class="form-group">
            <textarea name="message" cols="30" rows="10" class="form-control @error('message') is-invalid @enderror" placeholder="Entrez votre note.....">{{old('message') ?? $note->message}}</textarea>
            @error('message')
                <div class="invalid-feedback">
                    {{$errors->first('message')}}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer les modification</button>
     </form>
</div>
    
@endsection