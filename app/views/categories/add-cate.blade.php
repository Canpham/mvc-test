@extends('_share.home')
@section('title', 'Thêm danh mục')
@section('content')
<form action="{{ BASE_URL . 'save-addCate'}}" onsubmit="return validate()" method="post" id="add-cate-form" class="form-horizontal" enctype="multipart/form-data">
  <fieldset>
    <div class="form-group">
      <label class="col-md-4 control-label" for="product_name">CATE NAME</label>  
      <div class="col-md-4">
        <input id="cate_name" name="cate_name" placeholder="CATE NAME" class="form-control input-md"  type="text">
        <span id="name_err"></span>
      </div>
    </div>
    <div class="form-group">
      <label class="col-md-4 control-label" for="available_quantity">AVAILABLE DESC</label>  
      <div class="col-md-4">
        <input id="desc" name="desc" placeholder="AVAILABLE DESC" class="form-control input-md"  type="text">
        <span id="desc_err"></span>
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
<!-- <script type="text/javascript">

 $(document).ready(function()
 {
          $('#add-product-form').validate({
            rules:{
                name:{
                    required: true,
                    rangelength: [4, 100],
                    remote: {
                        url: "{{BASE_URL .'cates/check-cate-name'}}",
                        type: "post",
                        data: {
                            name: function()
                            {
                                return $('#add-cate-form :input[name="cate_name"]').val();
                            }
                        }
                    }
                }
            },
            messages: {
                name:{
                    required: "Hãy nhập tên danh mục",
                    rangelength: "Tên danh mục nằm trong khoảng 4-10 ký tự",
                    remote: "Tên danh mục đã tồn tại"
                }
            }
        });
    });

</script> -->

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
