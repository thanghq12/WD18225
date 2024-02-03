@extends("layout.main")
@section('content')
    <form method="POST" action="{{ route("post-product") }}">
        <input type="text" name="name">
        <input type="text" name="price">
        <input type="submit" name="btn_add" value="Thêm">
    </form>
@endsection
