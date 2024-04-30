@extends('layout')

@section('title', 'Cricket Accessories')

@section('content')
<div class="container">
    <h1 class="text-center" style="color: #ff6600;">Accessories</h1>

    <!-- Sell Section -->
    <div class="row justify-content-center">
        <div class="col-md-10"> <!-- Changed col-md-6 to col-md-10 -->
            <div class="card" style="background-color: #f8f9fa; padding: 20px; border-radius: 10px;">
                <h2 style="color: #008080;">Sell</h2>
                <form method="post" action="{{ route('accessories.sell') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="item" style="color: #333;">Select Item to Sell:</label><br>
                        <select class="form-select" name="item" id="item">
                            <option value="bat">Bat</option>
                            <option value="ball">Ball</option>
                            <option value="helmet">Helmet</option>
                            <option value="pad">Pad</option>
                            <option value="jersey">Jersey</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="price" style="color: #333;">Asking Price:</label><br>
                        <input type="text" class="form-control" id="price" name="price">
                    </div>
                    <div class="mb-3">
                        <label for="contact" style="color: #333;">Contact Number:</label><br>
                        <input type="text" class="form-control" id="contact" name="contact">
                    </div>
                    <button type="submit" class="btn btn-primary" style="background-color: #ff6600; border-color: #ff6600;">Sell</button>
                </form>
            </div>
        </div>
    </div>
    
    <!-- Buy Section -->
    <div class="row justify-content-center mt-5">
        <div class="col-md-10"> <!-- Changed col-md-6 to col-md-10 -->
            <div class="card" style="background-color: #f8f9fa; padding: 20px; border-radius: 10px;">
                <h2 style="color: #008080;">Buy</h2>
                <a href="{{ route('accessories.buy') }}" style="color: #333; text-decoration: none;">View Items for Sale</a>
            </div>
        </div>
    </div>
</div>
@endsection
