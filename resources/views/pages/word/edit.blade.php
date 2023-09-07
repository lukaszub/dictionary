@extends('layout')

@section('content')

<div class="container mt-auto">
  <div class="row justify-content-md-center">
    <div class="col-8">
      <form method="POST" action="/words/update/{{ $word->id }}/{{ $definition->id }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
          <label for="word" class="form-label">Słowo:</label>
          <input type="text" class="form-control" id="word" aria-describedby="word" name="word" value="{{$word->word}}">
        </div>
        <div class="mb-3">
          <label for="definition" class="form-label">Definicja:</label>
          <textarea class="form-control" id="definition" aria-describedby="definition" name="definition" rows="4" cols="50" style="align-content:center">
          {{ !empty($word->definition->definition) ? $word->definition->definition : "Brak definicji"}}
          </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Zapisz zmiany</button>
      </form>

    </div>
  </div>

</div>

@endsection
