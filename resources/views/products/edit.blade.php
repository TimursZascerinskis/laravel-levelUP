<x-layout :title="'Labot produktu: ' . $singleProduct->name">

    <h1>Labot produktu: {{ $singleProduct->name }}</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('product.update', $singleProduct->id) }}" method="POST" class="form">
        @csrf
        @method('PUT')

        <label for="name">Nosaukums</label>
        <input type="text" id="name" name="name" value="{{ old('name', $singleProduct->name) }}" required>

        <label for="quantity">Daudzums</label>
        <input type="number" id="quantity" name="quantity" value="{{ old('quantity', $singleProduct->quantity) }}" required min="0">

        <label for="description">Apraksts</label>
        <textarea id="description" name="description" rows="4" required>{{ old('description', $singleProduct->description) }}</textarea>

        <button type="submit" class="btn btn-highlight">Atjaunot</button>
    </form>

    <a href="{{ route('product.index') }}" class="btn btn-secondary" style="margin-top: 1rem; display: inline-block;">Atpakaļ uz produktu sarakstu</a>

</x-layout>
