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
    

@endpush

@section('content')
         <!-- Page -->
   <div class="page-content">
   @include('layouts.admin.meassage')
         <!-- Panel Table Tools -->
        <div class="panel">
        
          <header class="panel-heading">
            <h3 class="panel-title float-">Add New Category</h3>
            
          </header>
          
          <div class="panel-body">
          <a href="{{route('admin.category.create')}}" class="btn btn-primary float-right">Add Category</a>
            <table class="table table-hover dataTable table-striped w-full" id="exampleTableTools">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Customer Name</th>
                  <th>Food Name</th>
                  <th>Price</th>
                  <th>Order Status</th>
                  <th>Created At</th>
                 <th>Actions</th>
                  
                </tr>
              </thead>
              <tfoot>
                <tr>
                     <th>Id</th>
                    <th>Customer Name</th>
                    <th>Food Name</th>
                    <th>Price</th>
                    <th>Order Status</th>
                    <th>Created At</th>
                   <th>Actions</th>
                </tr>
              </tfoot>
              <tbody>
             @foreach ($oreders as $key => $oreder)
               <tr role="row" class="odd">
                  <td class="sorting_1" tabindex="0">{{$key+1}}</td>
                  <td>{{$oreder->coustomerName}}</td>
                  <td>{{$oreder->food_name}}</td>
                 <td>{{$oreder->price}}</td>
                  <td>{{$oreder->order_status}}</td>
                  <td>{{\Carbon\Carbon::parse($oreder->created_at)->diffForHumans()}}</td>
                
                  {{-- <td>{{\Carbon\Carbon::parse($category->updated_at)->diffForHumans()}}</td> --}}
        {{-- <td>
                  <a href="{{  }}route('admin.category.edit',$category->catagoryID)}}" class="btn btn-success btn-sm" >Edit</a>
                 <button type="button" class="btn btn-danger btn-sm" onclick="deleteCategory({{ $category->catagoryID }})">

                                            <i class="material-icons">delete</i>

                                        </button>

                                        <form id="delete-form-{{$category->catagoryID}}" action="{{route('admin.category.destroy',$category->catagoryID)}}" method="POST" style="display:none">
                                            @csrf
                                            @method('DELETE')
                                        </form>

         </td> --}}
                 
                </tr>
             @endforeach
              
              
              
              </tbody>
            </table>
          </div>
        </div>
        <!-- End Panel Table Tools -->
         </div>
</div>
    <!-- End Page -->
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
