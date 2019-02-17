@extends('layouts.admin.admin_master')

@push('css')
    <!-- JQuery DataTable Css -->
    
    {{-- <link rel="stylesheet" href={{asset('admin/vendor/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/tables/datatable.css')}}"> --}}

    
    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset('admin/vendor/animsition/animsition.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/asscrollable/asScrollable.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/switchery/switchery.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/intro-js/introjs.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/slidepanel/slidePanel.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/flag-icon-css/flag-icon.css')}}">
        <link rel="stylesheet" href="{{asset('admin/vendor/datatables.net-bs4/dataTables.bootstrap4.css')}}">
        <link rel="stylesheet" href="{{asset('admin/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.css')}}">
        <link rel="stylesheet" href="{{asset('admin/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.css')}}">
        <link rel="stylesheet" href="{{asset('admin/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css')}}">
        <link rel="stylesheet" href="{{asset('admin/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css')}}">
        <link rel="stylesheet" href="{{asset('admin/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css')}}">
        <link rel="stylesheet" href="{{asset('admin/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css')}}">
        <link rel="stylesheet" href="{{asset('admin/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css')}}">
        <link rel="stylesheet" href="{{asset('admin/css/tables/datatable.css')}}">
        <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
        <link rel="stylesheet" href="{{  asset('admin/css/profile.css')}}">

@endpush

@section('content')

<div class="row">
  <div class="col-lg-3">
    <!-- Page Widget -->
    <div class="card card-shadow text-center">
      <div class="card-block">
        <a class="avatar avatar-lg" href="javascript:void(0)">
          <img src="../../../global/portraits/5.jpg" alt="...">
        </a>
        <h4 class="profile-user">Terrance arnold</h4>
        <p class="profile-job">Art director</p>
        <p>Hi! I'm Adrian the Senior UI Designer at AmazingSurge. We hope
          you enjoy the design and quality of Social.</p>
        <div class="profile-social">
          <a class="icon bd-twitter" href="javascript:void(0)"></a>
          <a class="icon bd-facebook" href="javascript:void(0)"></a>
          <a class="icon bd-dribbble" href="javascript:void(0)"></a>
          <a class="icon bd-github" href="javascript:void(0)"></a>
        </div>
        <button type="button" class="btn btn-primary">Follow</button>
      </div>
      <div class="card-footer">
        <div class="row no-space">
          <div class="col-4">
            <strong class="profile-stat-count">260</strong>
            <span>Follower</span>
          </div>
          <div class="col-4">
            <strong class="profile-stat-count">180</strong>
            <span>Following</span>
          </div>
          <div class="col-4">
            <strong class="profile-stat-count">2000</strong>
            <span>Tweets</span>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Widget -->
  </div>

  <div class="col-lg-9">
    <!-- Panel -->
    <div class="panel">
      <div class="panel-body nav-tabs-animate nav-tabs-horizontal" data-plugin="tabs">
        <ul class="nav nav-tabs nav-tabs-line" role="tablist">
          <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab" href="#activities" aria-controls="activities" role="tab">Profile</a></li>
          <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#profile" aria-controls="profile" role="tab">Setting</a></li>
          
          <li class="nav-item dropdown" style="display: none;">
            <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" aria-expanded="false">Menu </a>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" data-toggle="tab" href="#activities" aria-controls="activities" role="tab">Profile </a>
              <a class="dropdown-item" data-toggle="tab" href="#profile" aria-controls="profile" role="tab">Setting</a>

            </div>
          </li>
        </ul>

        <div class="tab-content">
          <div class="tab-pane active animation-slide-left" id="activities" role="tabpanel">
            <div class="panel-body container-fluid">
              <form autocomplete="off" action="" method="post">
                    {{-- {{route('admin.profile.update',$fooditems->foodItem_id)}} --}}
               @csrf
               @method('PUT')
               <div class="form-group form-material {{ $errors->first('name') or 'has-error' }}" data-plugin="formMaterial">
                  <label class="form-control-label" for="inputText">User Name</label>
               <input type="text" class="form-control" id="inputText" name="name"  placeholder="food name">
                 <small class="text-danger">{{ $errors->first('name') }}</small>
               </div>

               <div class="form-group form-material {{ $errors->first('email') or 'has-error' }}" data-plugin="formMaterial">
                <label class="form-control-label" for="inputText">Email Address</label>
             <input type="text" class="form-control" id="inputText" name="email"  placeholder="food name">
               <small class="text-danger">{{ $errors->first('email') }}</small>
             </div>

             
            
               <div class="form-group form-material {{ $errors->first('about') or 'has-error' }}" data-plugin="formMaterial">
                  <label class="form-control-label" for="textarea">About</label>
                  <textarea class="form-control" id="summernote" name="about" id="textarea" rows="3" placeholder="description"></textarea>
                 <small class="text-danger">{{ $errors->first('about') }}</small>
                </div>
              
            </form>
            </div>
            <a class="btn btn-block btn-default profile-readMore" href="javascript:void(0)" role="button">Show more</a>
          </div>

          <div class="tab-pane animation-slide-left" id="profile" role="tabpanel">
            <div class="panel-body container-fluid">
              <form autocomplete="off" action="" method="post">
                    {{-- {{route('admin.profile.update',$fooditems->foodItem_id)}} --}}
               @csrf
               @method('PUT')
               <div class="form-group form-material {{ $errors->first('name') or 'has-error' }}" data-plugin="formMaterial">
                  <label class="form-control-label" for="inputText">Old Password</label>
               <input type="text" class="form-control" id="inputText" name="password"  placeholder="food name">
                 <small class="text-danger">{{ $errors->first('name') }}</small>
               </div>

               <div class="form-group form-material {{ $errors->first('name') or 'has-error' }}" data-plugin="formMaterial">
                <label class="form-control-label" for="inputText">Old Password</label>
             <input type="text" class="form-control" id="inputText" name="password"  placeholder="food name">
               <small class="text-danger">{{ $errors->first('name') }}</small>
             </div>

             <div class="form-group form-material {{ $errors->first('name') or 'has-error' }}" data-plugin="formMaterial">
              <label class="form-control-label" for="inputText">Old Password</label>
           <input type="text" class="form-control" id="inputText" name="password"  placeholder="food name">
             <small class="text-danger">{{ $errors->first('name') }}</small>
           </div>

            </form>
            </div>
            <a class="btn btn-block btn-default profile-readMore" href="javascript:void(0)" role="button">Show more</a>
          </div>
          </div>

          
        </div>
      </div>
    </div>
    <!-- End Panel -->
  </div>
</div>
        
@endsection

@push('script')
    {{-- <script src={{asset('admin/vendor/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
    <script src="{{asset('admin/js/Plugin/datatables.js')}}"></script> --}}
    
     <script src="{{asset('admin/js/tables/datatable.js')}}"></script>

     <!-- Core  -->
    <script src="{{asset('admin/vendor/babel-external-helpers/babel-external-helpers.js')}}"></script>
    <script src="{{asset('admin/vendor/jquery/jquery.js')}}"></script>
    <script src="{{asset('admin/vendor/popper-js/umd/popper.min.js')}}"></script>
    <script src="{{asset('admin/vendor/bootstrap/bootstrap.js')}}"></script>
    <script src="{{asset('admin/vendor/animsition/animsition.js')}}"></script>
    <script src="{{asset('admin/vendor/mousewheel/jquery.mousewheel.js')}}"></script>
    <script src="{{asset('admin/vendor/asscrollbar/jquery-asScrollbar.js')}}"></script>
    <script src="{{asset('admin/vendor/asscrollable/jquery-asScrollable.js')}}"></script>
    <script src="{{asset('admin/vendor/ashoverscroll/jquery-asHoverScroll.js')}}"></script>
    
    <!-- Plugins -->
    <script src="{{asset('admin/vendor/switchery/switchery.js')}}"></script>
    <script src="{{asset('admin/vendor/intro-js/intro.js')}}"></script>
    <script src="{{asset('admin/vendor/screenfull/screenfull.js')}}"></script>
    <script src="{{asset('admin/vendor/slidepanel/jquery-slidePanel.js')}}"></script>
        <script src="{{asset('admin/vendor/datatables.net/jquery.dataTables.js')}}"></script>
        <script src="{{asset('admin/vendor/datatables.net-bs4/dataTables.bootstrap4.js')}}"></script>
        <script src="{{asset('admin/vendor/datatables.net-fixedheader/dataTables.fixedHeader.js')}}"></script>
        <script src="{{asset('admin/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.js')}}"></script>
        <script src="{{asset('admin/vendor/datatables.net-rowgroup/dataTables.rowGroup.js')}}"></script>
        <script src="{{asset('admin/vendor/datatables.net-scroller/dataTables.scroller.js')}}"></script>
        <script src="{{asset('admin/vendor/datatables.net-responsive/dataTables.responsive.js')}}"></script>
        <script src="{{asset('admin/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.js')}}"></script>
        <script src="{{asset('admin/vendor/datatables.net-buttons/dataTables.buttons.js')}}"></script>
        <script src="{{asset('admin/vendor/datatables.net-buttons/buttons.html5.js')}}"></script>
        <script src="{{asset('admin/vendor/datatables.net-buttons/buttons.flash.js')}}"></script>
        <script src="{{asset('admin/vendor/datatables.net-buttons/buttons.print.js')}}"></script>
        <script src="{{asset('admin/vendor/datatables.net-buttons/buttons.colVis.js')}}"></script>
        <script src="{{asset('admin/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.js')}}"></script>
        <script src="{{asset('admin/vendor/asrange/jquery-asRange.min.js')}}"></script>
        <script src="{{asset('admin/vendor/bootbox/bootbox.js')}}"></script>
    
    <!-- Scripts -->
    <script src="{{asset('admin/js/Component.js')}}"></script>
    <script src="{{asset('admin/js/Plugin.js')}}"></script>
    <script src="{{asset('admin/js/Base.js')}}"></script>
    <script src="{{asset('admin/js/Config.js')}}"></script>
    
    <script src="{{asset('admin/js/Section/Menubar.js')}}"></script>
    <script src="{{asset('admin/js/Section/GridMenu.js')}}"></script>
    <script src="{{asset('admin/js/Section/Sidebar.js')}}"></script>
    <script src="{{asset('admin/js/Section/PageAside.js')}}"></script>
    <script src="{{asset('admin/js/Plugin/menu.js')}}"></script>
    
    <script src="{{asset('admin/js/config/colors.js')}}"></script>
    <script src="{{asset('admin/js/config/tour.js')}}"></script>
    {{-- <script>Config{{asset('admin', '{{asset('admin');</script> --}}
    
    <!-- Page -->
    <script src="{{asset('admin/js/Site.js')}}"></script>
    <script src="{{asset('admin/js/Plugin/asscrollable.js')}}"></script>
    <script src="{{asset('admin/js/Plugin/slidepanel.js')}}"></script>
    <script src="{{asset('admin/js/Plugin/switchery.js')}}"></script>
        <script src="{{asset('admin/js/Plugin/datatables.js')}}"></script>
    
        <script src="{{asset('admin/js/tables/datatable.js')}}"></script>

<script type="text/javascript">

        function deleteCategory(catagoryID) {

            const swalWithBootstrapButtons = swal.mixin({
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
            })

            swalWithBootstrapButtons({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                event.preventDefault();
                document.getElementById('delete-form-'+catagoryID).submit();
            } else if (
                // Read more about handling dismissals
            result.dismiss === swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })


        }


</script>

@endpush
