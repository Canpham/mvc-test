@extends('layouts.main')
@section('title', 'Danh sách nhân viên')
@section('content')
<a style="width: 68px;" class="btn btn-sm btn-info" href="{{BASE_URL . 'add-em'}}">Add</a>
          <div class="table-responsive">
            <table class="table table-striped table-sm">
              @foreach ($ems as $item)
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Avatar</th>
                  <th>Company</th>
                  <th>Birth date</th>
                  <th>Position</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>{{$item->id}}</td>
                  <td>{{$item->name}}</td>
                  <td><img style="width: 20%;" src="{{BASE_URL. 'public/'  . $item->avatar}}" alt=""></td>
                  <td>
                    @php
                        $parent = $item->company;
                    @endphp
                    @if($parent !== false)
                        <?= $parent->name; ?>
                    @endif
                  </td>
                  <td>{{$item->birth_date}}</td>
                  <td>{{$item->position}}</td>
                  <td>
                  <a class="btn btn-sm btn-danger" onclick="confirmRemove('{{BASE_URL . 'remove-em?id=' . $item->id}}')" href="javascript:;">Remove</a>
                  <a style="width: 68px;" class="btn btn-sm btn-info" href="{{BASE_URL . 'edit-em?id=' . $item->id}}">Edit</a>
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
  text: "Sau khi xóa, bạn sẽ không thể khôi phục nhân viên này!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
  })
.then((willDelete) => {
  if (willDelete) {
    window.location.href = url; 
    swal("Nhân viên đã được xóa thành công!", {
      icon: "success",
    });
  } else {
    swal("Nhân viên đã an toàn!");
  }
  });

  }
    
</script>
@endsection

