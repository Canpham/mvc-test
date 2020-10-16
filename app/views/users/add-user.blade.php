@extends('_share.home')
@section('title', 'Thêm tài khoản')
@section('content')
<form action="{{ BASE_URL . 'save-addUser'}}" onsubmit="return validate()" method="post" class="form-horizontal" enctype="multipart/form-data">
  <fieldset>
    <div class="form-group">
      <label class="col-md-4 control-label" for="product_name">USER NAME</label>  
      <div class="col-md-4">
        <input id="user_name" name="name" placeholder="USER NAME" class="form-control input-md"  type="text">
        <span id="name_err"></span> 
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" for="available_quantity">EMAIL</label>  
      <div class="col-md-4">
        <input id="email" name="email" placeholder="EMAIL" class="form-control input-md"  type="text">
        <span id="email_err"></span> 
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" for="product_name">PASSWORD</label>  
      <div class="col-md-4">
        <input id="pass" name="password" placeholder="PASSWORD" class="form-control input-md"  type="password">
        <span id="pass_err"></span> 
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" for="product_categorie">ROLE</label>
      <div class="col-md-4">
        <select id="role" name="role" class="form-control">
          <option value=1>Administrator</option>
          <option value=900>User</option>
        </select>
      </div>
    </div>
    <div class="form-group">  
      <label class="col-md-4 control-label" for="filebutton">main_image</label>
      <span id="img_err"></span> 
      <div class="col-md-4">
        <input id="img" name="avatar" class="input-file" type="file">
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" for="singlebutton">Single Button</label>
      <div class="col-md-4">
        <button id="singlebutton" name="singlebutton" class="btn btn-primary">Button</button>
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
  var check_name = document.getElementById("user_name");
  var check_email = document.getElementById("email");
  var reg_email = /\w{1,}@\w{1,}\.\w{1,}/;
  var check_role = document.getElementById("role");
  var check_pass = document.getElementById("pass");
  var check_img = document.getElementById("img");
  function validate()
  {

    if (check_name.value == "") 
    {
      check_name.style.border = "1px solid red";
      name_err.innerHTML = "Vui lòng nhập tên tài khoản";
      name_err.style.color ="red";
      return false;
    }

    if (check_email.value == "") {
      check_email.style.border = "1px solid red";
      email_err.innerHTML = "Vui nhập email";
      email_err.style.color ="red";
      return false;
    } else if (!check_email.value.match(reg_email)) {
      check_email.style.border = "1px solid red";
      email_err.innerHTML = "Vui nhập đúng định dạng email";
      email_err.style.color ="red";
      return false;
    }

    if (check_pass.value == "") 
    {
      check_pass.style.border = "1px solid red";
      pass_err.innerHTML = "Vui lòng nhập mật khẩu";
      pass_err.style.color ="red";
      return false;
    }

    if (check_img.value == "") 
    {
      check_img.style.border = "1px solid red";
      img_err.innerHTML = "Vui lòng chọn ảnh";
      img_err.style.color ="red";
      return false;
    }



  }
</script>

@endsection