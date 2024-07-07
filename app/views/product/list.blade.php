@extends("layout.main")
@section("content")
<table border="1">
    <tr>
        <th>ID</th>
        <th>Ten</th>
        <th>Gia</th>
    </tr>
    @foreach($products as $product)
    <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->tensanpham}}</td>
        <td>{{$product->gia}}</td>
    </tr>
    @endforeach
</table>
@endsection