@extends("app")


@section('head')
  <meta charset="utf-8" />
  <title>My Amazing Blog</title>

  <link rel="stylesheet" href="..." />
@endsection

@section("content")
  <div class="list-group">
    <p>{{ $greeting }}</p>
  </div>
@endsection

