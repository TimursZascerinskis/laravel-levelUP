<x-layout :title="$product->name">

    <h1>{{ $product->name }}</h1>
    <h4>Daudzums: {{ $product->quantity }}</h4>
    <p>{{ $product->description }}</p>

    <a href="{{ route('product.index') }}" class="btn btn-primary" style="margin-top: 1rem;">Atpakaļ uz produktu sarakstu</a>

    @if(session('success'))
        <div class="alert alert-success" style="margin-top: 1rem; padding: 1rem; background-color: #22c55e; color: white; border-radius: 5px;">
            {{ session('success') }}
        </div>
    @endif

</x-layout>
