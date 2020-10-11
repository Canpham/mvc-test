@extends('_share.home')
@section('title', 'Danh sách người dùng')
@section('content')
<a style="width: 68px;" class="btn btn-sm btn-info" href="{{BASE_URL . 'add-user'}}">Add</a>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              @foreach ($users as $item)
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>avatar</th>
                  <th>email</th>
                  <th>role</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->name}}</td>
                  <td><img style="width: 40%; height: 70%;" src="{{BASE_URL. 'public/'  . $item->avatar}}" alt=""></td>
                  <td>{{$item->email}}</td>
                  <td>
                    @php
                    $u = $item->role;
                    if ($u == 1) {
                    echo "<span>Admin</span>";
                  }
                    if ($u == 900) {
                   echo " <span>User</span>";
                  }
                    @endphp
                  </td>
                  <td>
                  <a class="btn btn-sm btn-danger" onclick="confirmRemove('{{BASE_URL . 'remove-user?id=' . $item->id}}')" href="javascript:;">Remove</a>
                  <a style="width: 68px;" class="btn btn-sm btn-info" href="{{BASE_URL . 'edit-user?id=' . $item->id}}">Edit</a>
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
  text: "Sau khi xóa, bạn sẽ không thể khôi phục tài khoản này!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
  })
.then((willDelete) => {
  if (willDelete) {
    window.location.href = url; 
    swal("Tài khoản đã được xóa thành công!", {
      icon: "success",
    });
  } else {
    swal("Tài khoản đã an toàn!");
  }
  });

  }
    
</script>
@endsection

