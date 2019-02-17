@extends('layouts.admin.admin_master')

@section('content')

<div class="panel">
 @include('layouts.admin.meassage')
          <div class="panel-body container-fluid">
            <div class="row row-lg">
              <div class="col-md-12">
                <!-- Example Basic Form (Form grid) -->
                <div class="example-wrap">
                  <h4 class="example-title">Add New Category</h4>
                  <div class="example">
                    <form autocomplete="off" action="{{route('admin.category.update',$categories->catagoryID)}}" method="post">
                     @csrf
                     @method('PUT')
                      <div class="row">
                        <div class="form-group col-md-12 {{ $errors->first('catagoryName') or 'has-error' }}">
                          <label class="form-control-label" for="inputBasicFirstName">Category Name</label>
                          <input type="text" class="form-control" id="inputBasicFirstName" name="catagoryName"
                          
                           autocomplete="off" value="{{$categories->catagoryName}}" autofocus>
                        {{-- <span class="text-danger">{{$errors->has('catagoryName') ? $errors->first('catagoryName') : ''}}</span> --}}
                            <small class="text-danger">{{ $errors->first('catagoryName') }}</small>

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
        </div>
   
        
@endsection