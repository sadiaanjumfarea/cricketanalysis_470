@extends('layout')

@section('title', 'Propose Match & Bidding')

@section('content')
<div class="container">
    <h1>Propose Match & Bidding</h1>

    <!-- Form for proposing a match -->
    <form action="{{ route('match.propose') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="match_date" class="form-label">Match Date</label>
            <input type="date" name="match_date" id="match_date" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="match_location" class="form-label">Match Location</label>
            <input type="text" name="match_location" id="match_location" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="match_description" class="form-label">Match Description</label>
            <textarea name="match_description" id="match_description" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="user_id" class="form-label">User ID</label>
            <input type="number" name="user_id" id="user_id" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Propose Match</button>
    </form>

    <hr>

    <h2>Available Matches for Bidding</h2>
    @foreach ($matches as $match)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Match Date: {{ $match->match_date }}</h5>
                <p class="card-text">Location: {{ $match->match_location }}</p>
                <p class="card-text">Description: {{ $match->match_description }}</p>
                <form action="{{ route('match.bid', $match->id) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="bid_amount" class="form-label">Bid Amount</label>
                        <input type="number" name="bid_amount" id="bid_amount" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="user_id" class="form-label">User ID</label>
                        <input type="number" name="user_id" id="user_id" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Place Bid</button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection
