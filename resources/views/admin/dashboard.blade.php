@extends('layout')

@section('title', 'Admin Dashboard')

@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <div class="container">
        <h1 class="my-4">Welcome to the Admin Dashboard</h1>

        <form action="{{ route('cricketers.destroy') }}" method="POST" class="mb-4">
            @csrf
            @method('DELETE')
            <div class="form-group">
                <label for="cricketer_id">Select Cricketer to delete:</label>
                <select class="form-control" name="cricketer_id" id="cricketer_id">
                    <option value="">Select a Cricketer</option>
                    @foreach ($cricketers as $cricketer)
                        <option value="{{ $cricketer->id }}">{{ $cricketer->name }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        
        <a href="{{ route('edit') }}" class="btn btn-primary">Add Players</a>
    </div>
@endsection
