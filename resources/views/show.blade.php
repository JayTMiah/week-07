@extends('app')

@section('content')
    <h2>{{ $owner->first_name }}</h2>
    <h2>{{ $owner->last_name }}</h2>
    <h2>{{ $owner->email }}</h2>
    <h2>{{ $owner->telephone }}</h2>
    <h2>{{ $owner->address_1 }}</h2>
    <h2>{{ $owner->address_2 }}</h2>
    <h2>{{ $owner->town }}</h2>
    <h2>{{ $owner->postcode }}</h2>
@endsection