@extends('admin.master.master')
@section('body')
<div class="container-fluid">
    <div class="row">
    	
    
	<div class="col-md-3">
		
	</div>
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				Add Product
        <h3 class="text-center text-success">{{Session::get('message')}}</h3>
			</div>
			<div class="card-body">
			       {{Form::open(['route'=>'new-product','method'=>'post', 'class'=>'form-horizontal','enctype'=>'multipart/form-data'])}}
                    <div class="form-group row">
                        <label class="control-label col-md-3">Category Name</label>
                        <div class="col-md-9">
                            <select class="form-control" name="category_id">
                                <option>---Select Category Name---</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->add_category}}</option>
                                @endforeach
                            </select>
                        </div>
                        <span class="text-danger offset-3">{{$errors->has('category_id') ? $errors->first('category_id') : ' '}}</span>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Brand Name</label>
                        <div class="col-md-9">
                            <select class="form-control" name="brand_id">
                                <option>---Select Brand Name---</option>
                                @foreach($brands as $brand)
                                <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                @endforeach
                            </select>

                        </div>
                        <span class="text-danger offset-3">{{$errors->has('brand_id') ? $errors->first('brand_id') : ' '}}</span>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Product Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="product_name">
                        </div>
                        <span class="text-danger offset-3">{{$errors->has('product_name') ? $errors->first('product_name') : ' '}}</span>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Product Price</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="product_price">
                        </div>
                        <span class="text-danger offset-3">{{$errors->has('product_price') ? $errors->first('product_price') : ' '}}</span>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Product Quantity</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="product_quantity">
                        </div>
                        <span class="text-danger offset-3">{{$errors->has('product_quantity') ? $errors->first('product_quantity') : ' '}}</span>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Short Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" name="short_desc" rows="2"></textarea>
                        </div>
                        <span class="text-danger offset-3">{{$errors->has('short_desc') ? $errors->first('short_desc') : ' '}}</span>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Long Description</label>
                        <div class="col-md-9">
                            <textarea id="editor" class="form-control" name="long_desc" rows="5"></textarea>
                        </div>
                        <span class="text-danger offset-3">{{$errors->has('long_desc') ? $errors->first('long_desc') : ' '}}</span>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Product Image</label>
                        <div class="col-md-9">
                            <input type="file" name="product_image">
                        </div>
                        <span class="text-danger offset-3">{{$errors->has('product_image') ? $errors->first('product_image') : ' '}}</span>
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-md-3">Publication Status</label>
                        <div class="col-md-9 radio">
                            <label><input type="radio" name="publication_status" value="1"> Published</label>
                            <label><input type="radio" name="publication_status" value="0"> Unpublished</label>
                        </div>
                        <span class="text-danger offset-3">{{$errors->has('publication_status') ? $errors->first('publication_status') : ' '}}</span>
                    </div>
                    <div class="form-group row">
                        <div class="offset-3 col-md-9">
                            <input type="submit" name="btn" class="btn btn-primary" value="Add Product">
                        </div>
                    </div>
                {{Form::close()}}
			</div>
		</div>
		
	</div>
	<div class="col-md-3">
		
	</div>
	</div>
	
</div>
@endsection