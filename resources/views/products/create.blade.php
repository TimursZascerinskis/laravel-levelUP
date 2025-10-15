<h1>Create Product</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/products" method="post">
    @csrf

    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="{{ old('name') }}">

    <label for="quantity">Quantity</label>
    <input type="number" id="quantity" name="quantity" value="{{ old('quantity') }}">

    <label for="description">Description</label>
    <textarea id="description" name="description">{{ old('description') }}</textarea>

    <input type="submit" value="Submit">
</form>

<a href="/products">Back to product list</a>
