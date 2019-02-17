@extends('layouts.admin.admin_master')



@section('content')


   <div class="col-md-12">
            <!-- Panel Static Labels -->
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Home Table</h3>
              </div>
              <div class="panel-body container-fluid">
                <form autocomplete="off" action="{{route('admin.about.store')}}" method="post">
                 @csrf
                 <div class="form-group form-material {{ $errors->first('title') or 'has-error' }}" data-plugin="formMaterial">
                    <label class="form-control-label" for="inputText">Title</label>
                    <input type="text" class="form-control" id="inputText" name="title" placeholder="title">
                   <small class="text-danger">{{ $errors->first('title') }}</small>
                  </div>

              

                  <div class="form-group form-material {{ $errors->first('description') or 'has-error' }}" data-plugin="formMaterial">
                    <label class="form-control-label" for="textarea">Description</label>
                    <textarea class="form-control" id="summernote" name="description" id="textarea" rows="3" placeholder="description"></textarea>
                   <small class="text-danger">{{ $errors->first('description') }}</small>
                  </div>
                
               
               <span class="input-group-btn">
                        <button class="btn btn-outline btn-primary" type="submit">Add Home</button>
                </span>
                  
                  
                </form>
              </div>
            </div>
            <!-- End Panel Static Labels -->
 </div> 
        
@endsection