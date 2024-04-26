<!-- In buy.blade.php -->
@extends('layout')

@section('title', 'Items for Sale')

@section('content')
    <div class="container">
        <h1>Items for Sale</h1>
        
        @if ($itemsForSale->isEmpty())
            <p>No items are currently for sale.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Contact</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($itemsForSale as $item)
                        <tr>
                            <td>{{ $item->item }}</td>
                            <td>{{ $item->price }}</td>
                            <td>{{ $item->contact }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
