@extends('_share.home')
@section('title', 'Sửa danh mục')
@section('content')
<form action="{{ BASE_URL . 'save-editCate'}}" method="post" class="form-horizontal" enctype="multipart/form-data">
<fieldset>
  <input name ="id" type="hidden" value="{{$model->id}}">
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">CATE NAME</label>  
  <div class="col-md-4">
  <input id="product_name" name="cate_name" placeholder="CATE NAME" class="form-control input-md"  type="text" value="{{$model->cate_name}}">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">AVAILABLE DESC</label>  
  <div class="col-md-4">
  <input id="available_quantity" name="desc" placeholder="AVAILABLE DESC" class="form-control input-md"  type="text" value="{{$model->desc}}">
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
