@extends('layout')
@section('title', 'Cricketers by Runrate')
@section('content')
<link rel="stylesheet" href="{{ asset('css/inn.css') }}">
<div class="container">
    <h1>Cricketers by runrate</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Innings</th>
                <th>Run Rate</th>
                <th>Matches Played</th>
                <th>Other Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cricketers as $cricketer)
            <tr>
                <td>{{ $cricketer->name }}</td>
                <td>{{ $cricketer->innings }}</td>
                <td>{{ $cricketer->run_rate }}</td>
                <td>{{ $cricketer->matches_played }}</td>
                <td>{{ $cricketer->other_details }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
