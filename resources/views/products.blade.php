@foreach ($products as $product)

    <h1>{{ $product->brand->brand_name ." ". $product->name }}</h1>

    <h1>Specs:</h1>
    {{ $product->specs }}

@endforeach

<?php 