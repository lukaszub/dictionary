@extends('layout')

@section('content')
@isset($words)
<div class="container-fluid">
  <div class="row">
    @foreach ($words as $word)
    <div class="col-md-4 col-xs-12 my-2">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">{{ $word->word }}</h5>
          <p class="card-text">{{ !empty($word->definition->definition) ? (substr($word->definition->definition, 0, 30) . ".....") : "Brak definicji"}}</p>
          <div class="container text-center">
            <a href="/words/show/{{$word->id}}" class="btn btn-outline-primary mt-2"><i class="bi bi-binoculars pe-1"></i>Podgląd</a>
            <a href="/words/edit/{{$word->id}}" class="btn btn-outline-secondary mt-2"><i class="bi bi-pencil-square pe-1"></i>Edycja</a>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@endisset
@isset($info)
<div class="container-fluid justify-content-center">
  <h5 class="text-center mt-5">{{ $info }}</h5>
</div>
@endisset
@endsection
