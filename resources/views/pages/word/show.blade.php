@extends('layout')
@section('content')
<div class="container justify-content-center mt-5">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-body">
          <h6 class="card-title text-muted mb-0"><i class="bi bi-house pe-2"></i>Słowo:</h6>
          <h5 class="card-title pt-3">{{" ". $word->word }}</h5>
          <h6 class="card-title text-muted mb-0 pt-4"><i class="bi bi-house pe-2"></i>Definicja:</h6>
          <h6 class="card-title pt-3">{{!empty($word->definition->definition) ? $word->definition->definition : "Brak definicji"}}</h5>
            <a href="/" type="button" class="btn btn-secondary mt-4">Wstecz</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
