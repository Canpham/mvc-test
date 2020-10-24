@extends('layouts.main')
@section('title', 'Sửa công ty')
@section('content')
<form action="{{ BASE_URL . 'saveEdit-com'}}" onsubmit="return validate()" method="post" class="form-horizontal" enctype="multipart/form-data">
  <fieldset>
    <input type="hidden" name="id" value="{{$model->id}}">
    <div class="form-group">
      <label class="col-md-4 control-label" for="product_name">NAME</label>  
      <div class="col-md-4">
        <input id="name" name="name"  class="form-control input-md"  type="text" value="{{$model->name}}">
        <span id="name_err"></span>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" for="available_quantity">Address</label>  
      <div class="col-md-4">
        <textarea id="desc" name="address" class="form-control input-md"  type="text"> {{$model->address}}</textarea>
        <span id="desc_err"></span>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" for="available_quantity">Director</label>  
      <div class="col-md-4">
        <textarea id="director" name="director_name" class="form-control input-md"  type="text">{{$model->director_name}} </textarea>
        <span id="desc_err"></span>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" for="filebutton">AVATAR</label>
      <img  style="width: 20%; margin-left: -520px; margin-top: 50px;" src="{{BASE_URL . 'public/' .  $model->logo}}" alt="">
      <div class="col-md-4">
        <input id="logo" name="logo" class="input-file" type="file">
      </div>
      <span id="img_err"></span>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" for="singlebutton">Actions</label>
      <div class="col-md-4">
        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Save</button>
      </div>
    </div>

  </fieldset>
</form>


<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

@endsection

@section('js')


<script type="text/javascript">
  var check_name = document.getElementById("cate_name");
  var check_desc = document.getElementById("desc");
  function validate()
  {

    if (check_name.value == "") 
    {
      check_name.style.border = "1px solid red";
      name_err.innerHTML = "Vui lòng nhập tên danh mục";
      name_err.style.color ="red";
      return false;
    }

    if (check_desc.value == "") 
    {
      check_name.style.border = "1px solid red";
      desc_err.innerHTML = "Vui lòng nhập mô tả";
      desc_err.style.color ="red";
      return false;
    }


  }
</script>

@endsection
