@extends('layout')

@section('content')

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 my-2">
  @foreach ($words as $word)
  <div class="col">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{ $word->word }}</h5>
        <p class="card-text">{{ !empty($word->definition->definition) ? $word->definition->definition : "Brak definicji"}}</p>
      </div>
    </div>
  </div>
  @endforeach
</div>

@endsection
