@extends('layout')

@section('title', 'Match Details')

@section('content')
<style>
    .match-container {
        border: 1px solid #ccc;
        padding: 10px;
        margin: 10px 0;
        background-color: #f5f5f5;
    }
</style>

<div class="container">
    <h1> Details</h1>

    @foreach ($data['data'] as $fantasy)
        <div class="match-container">
            <h2>{{ $fantasy['teamname'] }}</h2>
            <p>shortname: {{ $fantasy['shortname'] }}</p>
            <p>img: {{ $fantasy['img'] }}</p>
            <p>matches: {{ $fantasy['matches'] }}</p>
            <p>wins: {{ $fantasy['wins'] }}</p>
            <p>loss: {{ $fantasy['loss'] }}</p>
            <p>ties: {{ $fantasy['ties'] }}</p>
            <p>nr: {{ $fantasy['nr'] }}</p>

            
        </div>
    @endforeach

</div>
@endsection
