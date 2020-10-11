@extends('_share.home')
@section('title', 'Danh sách sản phẩm')
@section('content')
<a style="width: 68px;" class="btn btn-sm btn-info" href="{{BASE_URL . 'add-product'}}">Add</a>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              @foreach ($products as $item)
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
                  <td>{{$item->id}}</td>
                  <td>{{$item->name}}</td>
                  <td><img style="width: 40%; height: 70%;" src="{{BASE_URL. 'public/'  . $item->image}}" alt=""></td>
                  <td>
                    @php
                        $parent = $item->category;
                    @endphp
                    @if($parent !== false)
                        <?= $parent->cate_name; ?>
                    @endif
                  </td>
                  <td>{{$item->short_desc}}</td>
                  <td>{{$item->detail}}</td>
                  <td>
                  <a class="btn btn-sm btn-danger" onclick="confirmRemove('{{BASE_URL . 'remove-product?id=' . $item->id}}')" href="javascript:;">Remove</a>
                  <a style="width: 68px;" class="btn btn-sm btn-info" href="{{BASE_URL . 'edit-product?id=' . $item->id}}">Edit</a>
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
  text: "Sau khi xóa, bạn sẽ không thể khôi phục sản phẩm này!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
  })
.then((willDelete) => {
  if (willDelete) {
    window.location.href = url; 
    swal("Sản phẩm đã được xóa thành công!", {
      icon: "success",
    });
  } else {
    swal("Sản phẩm đã an toàn!");
  }
  });

  }
    
</script>
@endsection

