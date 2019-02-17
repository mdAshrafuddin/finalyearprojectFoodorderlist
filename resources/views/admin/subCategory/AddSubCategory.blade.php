@extends('layouts.admin.admin_master')

@section('content')

<div class="panel">
 @include('layouts.admin.meassage')
          <div class="panel-body container-fluid">
            <div class="row row-lg">
              <div class="col-md-12">
                <!-- Example Basic Form (Form grid) -->
                <div class="example-wrap">
                  <h4 class="example-title">Add New SubCategory</h4>
                  <div class="example">
                    <form autocomplete="off" action="{{route('admin.subcategory.store')}}" method="post">
                     @csrf
                      <div class="row">
                        <div class="form-group col-md-12 {{ $errors->first('subCatagoryName') or 'has-error' }}">
                          <label class="form-control-label" for="inputBasicFirstName">SubCategory Name</label>
                          <input type="text" class="form-control" id="inputBasicFirstName" name="subCatagoryName"
                          
                           placeholder="Enter Your Name" autocomplete="off" autofocus>
                        {{-- <span class="text-danger">{{$errors->has('catagoryName') ? $errors->first('catagoryName') : ''}}</span> --}}
                            <small class="text-danger">{{ $errors->first('subCatagoryName') }}</small>

                        </div>

                        <div class="col-md-12">
                <!-- Example Select -->
                <div class="example-wrap m-sm-0">
                  <h4 class="example-title">Select</h4>
                  <div class="form-group">
                    <select name="catagory" class="form-control">
                      <option>Add Your SubCategory</option>
                        @foreach ($categories as $category )
                           <option value="{{$category->catagoryID}}">{{$category->catagoryName}}</option> 
                        @endforeach    
                        
                      
                    </select>
                  </div>
                 
                </div>
                <!-- End Example Select -->
              </div>
              </div>
              

                      
                    
                     
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add New</button>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- End Example Basic Form (Form grid) -->
              </div>

            

              
            </div>
          </div>
        </div>
   
        
@endsection