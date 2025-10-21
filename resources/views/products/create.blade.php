<x-layout :title="'Pievienot jaunu produktu'">

    <h1>Pievienot jaunu produktu</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('product.store') }}" method="POST" class="form">
        @csrf

        <label for="name">Nosaukums</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}" required>

        <label for="quantity">Daudzums</label>
        <input type="number" id="quantity" name="quantity" value="{{ old('quantity') }}" required min="0">

        <label for="description">Apraksts</label>
        <textarea id="description" name="description" rows="4" required>{{ old('description') }}</textarea>

        <button type="submit" class="btn btn-highlight">Saglabāt</button>
    </form>

    <a href="{{ route('product.index') }}" class="btn btn-secondary" style="margin-top: 1rem; display: inline-block;">Atpakaļ uz produktu sarakstu</a>

</x-layout>
