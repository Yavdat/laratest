@extends('layout')

@section('content')
    @unless (empty($news))
        <h1>There are some articles.</h1>
    @endunless
    @if (empty($news))
        There are no news!
    @else
        Something else here.
    @endif
    @foreach ($news as $article)
        <li>{{ $article }}</li>
    @endforeach
@stop