@extends('layout')

@section('content')

<div class="container mt-auto my-4">
  <div class="row justify-content-md-center">
    <div class="col-5">
      <h3 class="my-2">Rejestracja:</h3>
      <form method="POST" action="/users">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nazwa Użytkownika:</label>
          <input type="text" class="form-control" id="name" aria-describedby="name" name="name" value="{{old('name')}}">
          @error('name')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-3">
          <label for="word" class="form-label">Email:</label>
          <input type="email" class="form-control" id="email" aria-describedby="email" name="email" value="{{old('email')}}">
          @error('email')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Hasło:</label>
          <input type="password" class="form-control" id="password" aria-describedby="password" name="password">
          @error('password')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-3">
          <label for="password_confirmation" class="form-label">Powtórz Hasło:</label>
          <input type="password" class="form-control" id="password_confirmation" aria-describedby="password_confirmation" name="password_confirmation">
          @error('password_confirmation')
          <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Rejestracja</button>
      </form>

    </div>
  </div>

</div>

@endsection
