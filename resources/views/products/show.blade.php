<x-layout>
<h1>{{ $product->name }}</h1>
<h4>Quantity: {{ $product->quantity }}</h4>
<p>{{ $product->description }}</p>

<a href="{{ route('product.index') }}">Back to all product list</a>


@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

</x-layout>