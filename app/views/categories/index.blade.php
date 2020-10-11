@extends('_share.home')
@section('title', 'Danh sách sản phẩm')
@section('content')
<a style="width: 68px;" class="btn btn-sm btn-info" href="{{BASE_URL . 'add-cate'}}">Add</a>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              @foreach ($cates as $item)
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>DESC</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->cate_name}}</td>
                  <td>{{$item->desc}}</td>
                  <td>
                  <a class="btn btn-sm btn-danger" onclick="confirmRemove('{{BASE_URL . 'remove-cate?id=' . $item->id}}')" href="javascript:;">Remove</a>
                  <a style="width: 68px;" class="btn btn-sm btn-info" href="{{BASE_URL . 'edit-cate?id=' . $item->id}}">Edit</a>
                  </td>
                </tr>
              </tbody>
              @endforeach
            </table>
          </div>


@endsection

@section('js')
<script>

  function confirmRemove(url)
  {
    swal({
  title: "Bạn có chắc muốn xóa?",
  text: "Sau khi xóa, bạn sẽ không thể khôi phục danh mục này!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
  })
.then((willDelete) => {
  if (willDelete) {
    window.location.href = url; 
    swal("Danh mục đã được xóa thành công!", {
      icon: "success",
    });
  } else {
    swal("Danh mục đã an toàn!");
  }
  });

  }
    
</script>
@endsection