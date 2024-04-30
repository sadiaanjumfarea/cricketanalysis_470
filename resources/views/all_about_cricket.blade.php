@extends('layout')

@section('title', 'Top 10 Stadiums In The World')

@section('content')
<div class="container">
    <h1>All About Cricket</h1>
    <div class="row">
        @foreach($top_10_stadiums as $stadium)
        <div class="col-md-6">
            <div class="card" style="margin-bottom: 20px;">
                <img src="{{ asset('images/'.$stadium['image']) }}" class="card-img-top" alt="{{ $stadium['name'] }}" style="max-height:200rem;">
                <div class="card-body">
                    <h2 class="card-title">{{ $stadium['name'] }}</h2>
                    <p class="card-text">Location: {{ $stadium['location'] }}</p>
                    <p class="card-text">Capacity: {{ $stadium['capacity'] }}</p>
                    <p class="card-text">Ticket Price: {{ $stadium['ticket_price'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="text-center">
        <a href="{{ route('accessories') }}" class="btn btn-primary" style="background-color: #ff6600; border-color: #ff6600;">Buy or Sell Your Cricket Accessories</a>
    </div>
</div>
@endsection
