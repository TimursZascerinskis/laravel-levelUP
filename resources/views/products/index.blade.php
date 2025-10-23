<x-layout :title="'Produktu saraksts'">
    <ul class="product-list">
        @foreach ($allProducts as $product)
            <li class="product-card">
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>

                <div class="actions">
                    <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary">Skatīt</a>
                    <a href="{{ route('product.edit', $product->id) }}" class="btn btn-secondary">Labot</a>

                    <form action="{{ route('product.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Tiešām dzēst?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Dzēst</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('product.create') }}" class="btn btn-highlight">Pievienot jaunu produktu</a>
</x-layout>

