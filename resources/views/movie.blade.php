@extends('layouts.app')

@section('content')
    <div class="row">
        @foreach ($movies as $movie)
        <div class="col-3">
            <div class="card text-bg-dark border-light " style="width: 18rem;">
                <img src="{{ $movie->image }}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $movie->title }}</h5>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">{{ $movie->nationality }}</li>
                  <li class="list-group-item">{{ $movie->date }}</li>
                  <li class="list-group-item">{{ $movie->vote }}</li>
                </ul>
              </div>
        </div>
        @endforeach
    </div>  
@endsection