@extends('layouts.main')
@section('title', 'Thêm nhân viên')
@section('content')
<form action="{{ BASE_URL . 'save-add'}}" onsubmit="return validate()" method="post" id="add-product-form" class="form-horizontal" enctype="multipart/form-data">
<fieldset>
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">NAME</label>  
  <div class="col-md-4">
  <input id="name" name="name" placeholder="NAME" class="form-control input-md"  type="text">
  <span id="name_err"></span> 
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="product_categorie">COMPANY</label>
  <div class="col-md-4">
    <select id="company" name="company_id" class="form-control">
                    @foreach ($coms as $ca)
                        <option value="{{$ca->id}}">{{$ca->name}}</option>
                    @endforeach
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">Birth date</label>  
  <div class="col-md-4">
  <input type="date" id="birth_date" name="birth_date">
  <span id="desc_err"></span>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="product_weight">POSITION</label>  
  <div class="col-md-4">
  <textarea id="position" name="position" placeholder="POSITION" class="form-control input-md" type="text"> </textarea>
   <span id="detail_err"></span> 
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">AVATAR</label>
  <div class="col-md-4">
    <input id="filebutton" name="avatar" class="input-file" type="file">
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
 var check_name = document.getElementById("product_name");
 var check_price = document.getElementById("product_name_fr");
 var check_desc = document.getElementById("desc");
 var check_detail = document.getElementById("detail");
 var check_img = document.getElementById("image-product");
 function validate()
 {
  if (check_name.value == "") 
  {
    check_name.style.border = "1px solid red";
    name_err.innerHTML = "Vui lòng nhập tên sản phẩm";
    name_err.style.color ="red";
    return false;
  }
  if (check_price.value == "") {
    check_price.style.border = "1px solid red";
    price_err.innerHTML = "Vui lòng nhập giá bán";
    price_err.style.color ="red";
    return false;
  } else if (isNaN(check_price.value)==true) {
    check_price.style.border = "1px solid red";
    price_err.innerHTML = "Vui lòng nhập số";
    price_err.style.color ="red";
    return false;
  }
  if (check_desc.value == "") 
  {
    check_desc.style.border = "1px solid red";
    desc_err.innerHTML = "Vui lòng nhập mô tả sản phẩm";
    desc_err.style.color ="red";
    return false;
  }
  if (check_detail.value == "") 
  {
    check_detail.style.border = "1px solid red";
    detail_err.innerHTML = "Vui lòng nhập chi tiết sản phẩm";
    detail_err.style.color ="red";
    return false;
  }
  if (check_img.value == "") 
  {
    check_img.style.border = "1px solid red";
    img_err.innerHTML = "Vui lòng tải ảnh sản phẩm";
    img_err.style.color ="red";
    return false;
  }

}
</script>

@endsection 