@extends('layouts.app')

@section('content')
    <div class="container">
        
        <div class="container">
            <div class="card text-white bg-dark mb-3">
                <div class="card-header"><h1>NOUVELLE NOTE</h1></div>
                <div class="card-body">
                <form action="{{'/notes'}}" method="POST">
                    @csrf
                     <div class="form-group">
                     <input type="text" value="{{old('title')}}" class="form-control @error('title') is-invalid @enderror" name="title"  placeholder="Veuillez donner un titre">
                         @error('title')
                             <div class="invalid-feedback">
                                {{$errors->first('title')}}
                            </div>
                         @enderror
                         
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{old('description')}}" class="form-control @error('description') is-invalid @enderror" name="description"  placeholder="Veuillez donner description ....">
                            @error('description')
                                <div class="invalid-feedback">
                                    {{$errors->first('description')}}
                               </div>
                            @enderror
                            
                       </div>
                     <div class="form-group">
                        <textarea name="message" cols="30" rows="10" class="form-control @error('message') is-invalid @enderror" placeholder="Entrez votre note....."></textarea>
                        @error('message')
                        <div class="invalid-feedback">
                            {{$errors->first('message')}}
                       </div>
                    @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                 </form>
                </div>
        </div>
    </div>
@endsection