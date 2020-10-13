@extends('_share.home')
@section('title', 'Thêm tài khoản')
@section('content')
<form action="{{ BASE_URL . 'save-addUser'}}" method="post" class="form-horizontal" enctype="multipart/form-data">
<fieldset>
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">USER NAME</label>  
  <div class="col-md-4">
  <input id="product_name" name="name" placeholder="USER NAME" class="form-control input-md"  type="text">
    
</div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">EMAIL</label>  
  <div class="col-md-4">
  <input id="available_quantity" name="email" placeholder="EMAIL" class="form-control input-md"  type="text">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">PASSWORD</label>  
  <div class="col-md-4">
  <input id="product_name" name="password" placeholder="PASSWORD" class="form-control input-md"  type="text">
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="product_categorie">ROLE</label>
  <div class="col-md-4">
    <select id="product_categorie" name="role" class="form-control">
                    @foreach ($model as $ca)
                        <option value="{{$ca->id}}">{{$ca->role}}</option>
                    @endforeach
    </select>
  </div>
</div>
<div class="form-group">  
  <label class="col-md-4 control-label" for="filebutton">main_image</label>
  <div class="col-md-4">
    <input id="filebutton" name="avatar" class="input-file" type="file">
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
