@extends('layout')

@section('title', 'Items for Sale')

@section('content')
<div class="container">
    <h1 class="text-center" style="color: #ff6600;">Items for Sale</h1>
    
    @if ($itemsForSale->isEmpty())
        <p class="text-center" style="color: #333;">No items are currently for sale.</p>
    @else
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th style="color: #333;">Item</th>
                        <th style="color: #333;">Price</th>
                        <th style="color: #333;">Contact</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($itemsForSale as $item)
                        <tr>
                            <td style="color: #333;">{{ $item->item }}</td>
                            <td style="color: #333;">{{ $item->price }}</td>
                            <td style="color: #333;">{{ $item->contact }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@endsection
