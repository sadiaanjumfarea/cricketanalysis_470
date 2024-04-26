@extends('layout')

@section('title', 'All About Cricket')

@section('content')
<div class="container">
    <h1>All About Cricket</h1>
    <div class="row">
        <div class="col-md-6">
            <h2>Cricket Stadium Details</h2>
            <p>Here are some details about cricket stadiums:</p>
            <ul>
                <li>Stadium 1: Location, capacity, facilities, etc.</li>
                <li>Stadium 2: Location, capacity, facilities, etc.</li>
                <!-- Add more stadiums as needed -->
            </ul>
        </div>
        <div class="col-md-6">
            <h2>Ticket Prices</h2>
            <p>Here are the ticket prices for upcoming matches:</p>
            <ul>
                <li>Match 1: Price 1</li>
                <li>Match 2: Price 2</li>
                <!-- Add more matches and prices as needed -->
            </ul>
        </div>
    </div>
    <a href="{{ route('accessories') }}">Accessories</a>
    </div>
</div>
@endsection

