@extends('_share.home')
@section('title', 'Danh sách sản phẩm')
@section('content')
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              @foreach ($cates as $items)
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Image</th>
                  <th>Caterogy</th>
                  <th>DESC</th>
                  <th>Detail</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{$items->id}}</td>
                  <td>{{$items->name}}</td>
                  <td><img style="width: 60%;" src="{{$items->image}}" alt=""></td>
                  <td>{{$items->cate_id}}</td>
                  <td>{{$items->short_desc}}</td>
                  <td>{{$items->detail}}</td>
                  <td>
                  <a class="btn btn-sm btn-danger" onclick="confirmRemove('{{BASE_URL . 'remove-product?id=' . $items->id}}')" href="javascript:;">Remove</a>
                  <a style="width: 68px;" class="btn btn-sm btn-info" href="{{BASE_URL . 'edit-product?id=' . $items->id}}">Edit</a>
                  </td>
                </tr>
              </tbody>
              @endforeach
            </table>
          </div>
@endsection

@section('js')
<script>
    function confirmRemove(removeurl){
        alertify.confirm(
            'Thông báo', 
            'Bạn chắc chắn muốn xóa sản phẩm này ?', 
            function(){ 
                window.location.href = removeurl;
            }, 
            function(){ 
                alertify.confirm().close(); 
            }
        );
    }
    
</script>
@endsection

