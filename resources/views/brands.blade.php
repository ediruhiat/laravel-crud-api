@foreach ($brands as $brand)

    <h1>{{ $brand->brand_name }}</h1>

    @foreach ($brand->products as $product)
        <ul>
            <li>{{$product->name}}</li>
        </ul>
    @endforeach

@endforeach