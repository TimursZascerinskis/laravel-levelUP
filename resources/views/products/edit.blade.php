@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/products/{{ $singleProduct->id }}" method="post">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ old('name', $singleProduct->name) }}">
    <input type="number" name="quantity" value="{{ old('quantity', $singleProduct->quantity) }}">
    <textarea name="description">{{ old('description', $singleProduct->description) }}</textarea>
    <input type="submit" value="Submit">
</form>

<a href="/products">Back to product list</a>
