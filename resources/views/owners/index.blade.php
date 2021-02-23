@extends("app")

@section("content")
  <div class="list-group">
  @if(count($owners)) 
    @foreach ($owners as $owner)
    <a href="#" class="list-group-item list-group-item-action">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">{{ $owner->first_name }}</h5>
        <small>1 Day Ago</small>
      </div>
      <p class="mb-1">{{ $owner->address_1 }} {{ $owner->town }}</p>
    </a>
    @endforeach

    @else <p>No owners found</p>

  @endif

  
  </div>
@endsection

@section('head')
    <meta charset="utf-8" />
    <title>My Amazing Blog</title>

    <link rel="stylesheet" href="..." />
@endsection

