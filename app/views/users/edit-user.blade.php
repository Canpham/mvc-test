@extends('_share.home')
@section('title', 'Sửa tài khoản')
@section('content')
<form action="{{ BASE_URL . 'save-editUser'}}" method="post" class="form-horizontal" enctype="multipart/form-data">
<fieldset>
<input name ="id" type="hidden" value="{{$model->id}}">
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">USER NAME</label>  
  <div class="col-md-4">
  <input id="product_name" name="name" placeholder="USER NAME" class="form-control input-md"  type="text" value="{{$model->name}}">
    
</div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">EMAIL</label>  
  <div class="col-md-4">
  <input id="available_quantity" name="email" placeholder="EMAIL" class="form-control input-md"  type="text" value="{{$model->email}}">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="product_categorie">ROLE</label>
  <div class="col-md-4">
    <select id="product_categorie" name="role" class="form-control">
                   @foreach($role as $value)
                                <option value={{$value['value']}} {{$model->role == $value['value'] ? 'selected' : ''}} >{{$value['name']}}</option>
                   @endforeach
    </select>
  </div>
</div>
<img  style="margin-left: 530px; margin-top: 30px;" src="{{BASE_URL . 'public/' .  $model->avatar}}" alt="">
<br></br>
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
