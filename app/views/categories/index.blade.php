@extends('layouts.main')
@section('title', 'Danh sách danh mục')
@section('content')
<table>
<thead>
    <th>ID</th>
    <th>Name</th>
    <th>Total Product</th>
    <th>
        <a href="add-cate">Add</a>
    </th>
</thead>
<tbody>
    @foreach ($cates as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->cate_name}}</td>
            <td>0</td>
            <td>
                <a href="remove-cate?id={{$item->id}}">Remove</a>
                <a href="edit-cate?id={{$item->id}}">Edit</a>
            </td>
        </tr>
    @endforeach
</tbody>

</table>
@endsection