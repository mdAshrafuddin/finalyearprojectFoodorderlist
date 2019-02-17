@extends('layouts.admin.admin_master')



@section('content')


   <div class="col-md-12">
            <!-- Panel Static Labels -->
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Food Item Table</h3>
              </div>
              <div class="panel-body container-fluid">
                <form autocomplete="off" action="{{route('admin.fooditem.update',$fooditems->foodItem_id)}}" method="post">
                 @csrf
                 @method('PUT')
                 <div class="form-group form-material {{ $errors->first('food_name') or 'has-error' }}" data-plugin="formMaterial">
                    <label class="form-control-label" for="inputText">Food Name</label>
                 <input type="text" class="form-control" id="inputText" name="food_name" value="{{ $fooditems->food_name}}" placeholder="food name">
                   <small class="text-danger">{{ $errors->first('food_name') }}</small>
                 </div>

                 <!-- Example Select -->
                <div class="example-wrap m-sm-0">
                    <h4 class="example-title">Select</h4>
                    <div class="form-group">
                      <select name="subcatagory" class="form-control">
                        {{-- <option>Add Your SubCategory</option> --}}
                          @foreach ($subcategories as $subcategory )
                      <option value="{{ $subcategory->subCatagoryID }}" {{ $subcategory->subCatagoryID == $fooditems->foodItem_id ? 'selected' : ''}} >{{$subcategory->subCatagoryName}}</option> 
                          @endforeach    
                          
                        
                      </select>
                    </div>
                  </div>
                  <!-- End Example Select -->

                 <div class="form-group form-material {{ $errors->first('price') or 'has-error' }}" data-plugin="formMaterial">
                    <label class="form-control-label" for="inputText">Price</label>
                    <input type="text" class="form-control" id="inputText" name="price" value="{{ $fooditems->price}}" placeholder="price">
                   <small class="text-danger">{{ $errors->first('price') }}</small>
                 </div>

                 <div class="form-group form-material {{ $errors->first('food_tag') or 'has-error' }}" data-plugin="formMaterial">
                    <label class="form-control-label" for="inputText">Food Tag</label>
                    <input type="text" class="form-control" id="inputText" name="food_tag" value="{{ $fooditems->food_tag}}" placeholder="title">
                   <small class="text-danger">{{ $errors->first('food_tag') }}</small>
                 </div>

                 <div class="form-group form-material {{ $errors->first('food_description') or 'has-error' }}" data-plugin="formMaterial">
                    <label class="form-control-label" for="textarea">Description</label>
                    <textarea class="form-control" id="summernote" name="food_description" id="textarea" rows="3" placeholder="description">{{ $fooditems->food_description}}</textarea>
                   <small class="text-danger">{{ $errors->first('food_description') }}</small>
                  </div>
                
               
               <span class="input-group-btn">
                        <button class="btn btn-outline btn-primary" type="submit">Add FoodItem</button>
                </span>
                  
                  
                </form>
              </div>
            </div>
            <!-- End Panel Static Labels -->
 </div> 
        
@endsection