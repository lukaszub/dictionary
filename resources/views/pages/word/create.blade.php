@extends('layout')

@section('content')
<div class="row justify-content-center my-3 mx-3">
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
    <form method="POST" action="/words">
      @csrf
      <div class="mb-3">
        <label for="word" class="form-label">Słowo:</label>
        <input type="text" class="form-control" id="word" aria-describedby="word" name="word" value="{{old('word')}}">
        @error('word')
        <p class="text-danger">{{$message}}</p>
        @enderror
      </div>
      <div class="mb-3">
        <label for="definition" class="form-label">Definicja:</label>
        <textarea type="text" class="form-control" id="definition" aria-describedby="definition" name="definition" value="{{old('definition')}}" rows="4" cols="50">
          </textarea>
        @error('definition')
        <p class="text-danger">{{$message}}</p>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Dodaj</button>
    </form>
  </div>
</div>
@endsection
