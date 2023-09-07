@extends('layout')

@section('content')

<div class="container mt-auto">
  <div class="row justify-content-md-center">
    <div class="col-8">
      <form method="POST" action="/words">
        @csrf
        <div class="mb-3">
          <label for="word" class="form-label">Słowo:</label>
          <input type="text" class="form-control" id="word" aria-describedby="word" name="word" value="{{old('word')}}">
        </div>
        <div class="mb-3">
          <label for="definition" class="form-label">Definicja:</label>
          <textarea type="text" class="form-control" id="definition" aria-describedby="definition" name="definition" value="{{old('definition')}}" rows="4" cols="50">
          </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Dodaj</button>
      </form>

    </div>
  </div>

</div>

@endsection
