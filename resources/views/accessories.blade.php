<!-- Inside accessories.blade.php -->

<h1>Accessories</h1>

<!-- Sell Section -->
<h2>Sell</h2>
<form method="post" action="{{ route('accessories.sell') }}">
    @csrf
    <label for="item">Select Item to Sell:</label><br>
    <select name="item" id="item">
        <option value="bat">Bat</option>
        <option value="ball">Ball</option>
        <option value="helmet">Helmet</option>
        <option value="pad">Pad</option>
        <option value="jersey">Jersey</option>
    </select><br><br>
    <label for="price">Asking Price:</label><br>
    <input type="text" id="price" name="price"><br><br>
    <label for="contact">Contact Number:</label><br>
    <input type="text" id="contact" name="contact"><br><br>
    <button type="submit">Sell</button>
</form>

<!-- Buy Section -->
<h2>Buy</h2>
<a href="{{ route('accessories.buy') }}">View Items for Sale</a>
