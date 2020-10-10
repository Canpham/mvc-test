<form action="{{ BASE_URL . 'save-edit'}}" method="post" class="form-horizontal" enctype="multipart/form-data">
<fieldset>
<input name ="id" type="hidden" value="<?=$model->id?>">
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>  
  <div class="col-md-4">
  <input id="product_name" name="name" placeholder="PRODUCT NAME" class="form-control input-md"  type="text" value ="{{$model->name}}">
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="product_name_fr">PRODUCT PRICE</label>
  <div class="col-md-4">
  <input id="product_name_fr" name="price" placeholder="PRODUCT PRICE" class="form-control input-md"  type="text" value = "{{$model->price}}">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="product_categorie">PRODUCT CATEGORY</label>
  <div class="col-md-4">
    <select id="product_categorie" name="cate_id" class="form-control">
                              @foreach ($cates as $ca)
                         <option
                                @if($ca->id == $model->cate_id)
                                    selected
                                @endif
                                value="{{$ca->id}}">{{$ca->cate_name}}
                          </option>
                        @endforeach
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">AVAILABLE DESC</label>  
  <div class="col-md-4">
  <input id="available_quantity" name="short_desc" placeholder="AVAILABLE DESC" class="form-control input-md"  type="text"  value = "{{$model->short_desc}}">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="product_weight">PRODUCT DETAIL</label>  
  <div class="col-md-4">
  <input id="product_weight" name="detail" placeholder="PRODUCT DETAIL" class="form-control input-md" type="text"  value = "{{$model->detail}}">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">main_image</label>
  <img  style="margin-left: -700px; margin-top: 40px;" src="{{BASE_URL . 'public/' .  $model->image}}" alt="">
  <div class="col-md-4">
    <input id="filebutton" name="image" class="input-file" type="file">
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