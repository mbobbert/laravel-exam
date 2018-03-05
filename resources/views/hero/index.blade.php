@extends('layouts/app')

@section('content')
<h1>The hero roster</h1>

    <ul>
    @foreach($heroes as $hero)
    <li><a href="/hero/{{$hero->slug}}">{{$hero->name}}</a></li>
    @endforeach
    </ul>

@endsection