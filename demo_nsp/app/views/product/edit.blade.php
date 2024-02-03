@extends("layout.main")
@section('content')
    <form method="POST" action="{{ route("post-product") }}">
        <input type="text" name="name" value="{{ $product->name }}">
        <input type="text" name="price" value="{{ $product->price }}">
        <input type="submit" name="btn_add" value="Thêm">
    </form>
@endsection

