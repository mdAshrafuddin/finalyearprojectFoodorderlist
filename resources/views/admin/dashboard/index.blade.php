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
        <link rel="stylesheet" href="{{asset('admin/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css')}}">
           
            <link rel="stylesheet" href="{{asset('admin/vendor/flag-icon-css/flag-icon.css ')}}">
            <link rel="stylesheet" href="{{asset('admin/vendor/chartist/chartist.css ')}}">
            <link rel="stylesheet" href="{{asset('admin/vendor/aspieprogress/asPieProgress.css')}}">
            <link rel="stylesheet" href="{{asset('admin/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css')}}">
            <link rel="stylesheet" href="{{asset('admin/css/ecommerce.css')}}">
        
        <link rel="stylesheet" href="{{asset('admin/css/tables/datatable.css')}}">
        <link rel="stylesheet" href="{{asset('admin/css/style.css')}}">
    

@endpush

@section('content')
         <!-- Page -->
         
                <div class="page-content container-fluid">
                  <div class="row">
                    <!-- First Row -->
                    <div class="col-xl-3 col-md-3 info-panel">
                      <div class="card card-shadow">
                        <div class="card-block bg-white p-20">
                          <button type="button" class="btn btn-floating btn-sm btn-warning">
                            <i class="icon wb-shopping-cart"></i>
                          </button>
                          <span class="ml-15 font-weight-400">ORDERS</span>
                          <div class="content-text text-center mb-0">
                            <i class="text-danger icon wb-triangle-up font-size-20">
                        </i>
                            <span class="font-size-40 font-weight-100">399</span>
                            <p class="blue-grey-400 font-weight-100 m-0">+45% From previous month</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-md-3 info-panel">
                      <div class="card card-shadow">
                        <div class="card-block bg-white p-20">
                          <button type="button" class="btn btn-floating btn-sm btn-danger">
                            <i class="icon fa-dollar"></i>
                          </button>
                          <span class="ml-15 font-weight-400">INCOM</span>
                          <div class="content-text text-center mb-0">
                            <i class="text-success icon wb-triangle-down font-size-20">
                        </i>
                            <span class="font-size-40 font-weight-100">$18,628</span>
                            <p class="blue-grey-400 font-weight-100 m-0">+45% From previous month</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-md-3 info-panel">
                      <div class="card card-shadow">
                        <div class="card-block bg-white p-20">
                          <button type="button" class="btn btn-floating btn-sm btn-success">
                            <i class="icon wb-eye"></i>
                          </button>
                          <span class="ml-15 font-weight-400">VISITORS</span>
                          <div class="content-text text-center mb-0">
                            <i class="text-danger icon wb-triangle-up font-size-20">
                        </i>
                            <span class="font-size-40 font-weight-100">23,456</span>
                            <p class="blue-grey-400 font-weight-100 m-0">+25% From previous month</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-3 col-md-3 info-panel">
                      <div class="card card-shadow">
                        <div class="card-block bg-white p-20">
                          <button type="button" class="btn btn-floating btn-sm btn-primary">
                            <i class="icon wb-user"></i>
                          </button>
                          <span class="ml-15 font-weight-400">CUSTOMERS</span>
                          <div class="content-text text-center mb-0">
                            <i class="text-danger icon wb-triangle-up font-size-20">
                        </i>
                            <span class="font-size-40 font-weight-100">4,367</span>
                            <p class="blue-grey-400 font-weight-100 m-0">+25% From previous month</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End First Row -->
          
                    <!-- second Row -->
                    <div class="col-12" id="ecommerceChartView">
                      <div class="card card-shadow">
                        <div class="card-header card-header-transparent py-20">
                          <div class="btn-group dropdown">
                            <a href="#" class="text-body dropdown-toggle blue-grey-700" data-toggle="dropdown">PRODUCTS SALES</a>
                            <div class="dropdown-menu animate" role="menu">
                              <a class="dropdown-item" href="#" role="menuitem">Sales</a>
                              <a class="dropdown-item" href="#" role="menuitem">Total sales</a>
                              <a class="dropdown-item" href="#" role="menuitem">profit</a>
                            </div>
                          </div>
                          <ul class="nav nav-pills nav-pills-rounded chart-action">
                            <li class="nav-item"><a class="active nav-link" data-toggle="tab" href="#scoreLineToDay">Day</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToWeek">Week</a></li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#scoreLineToMonth">Month</a></li>
                          </ul>
                        </div>
                        <div class="widget-content tab-content bg-white p-20">
                          <div class="ct-chart tab-pane active" id="scoreLineToDay"><div class="chartist-tooltip"></div><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="300" class="ct-chart-line" style="width: 100%; height: 300px;"><g class="ct-grids"><line y1="265" y2="265" x1="50" x2="964" class="ct-grid ct-vertical"></line><line y1="202.5" y2="202.5" x1="50" x2="964" class="ct-grid ct-vertical"></line><line y1="140" y2="140" x1="50" x2="964" class="ct-grid ct-vertical"></line><line y1="77.5" y2="77.5" x1="50" x2="964" class="ct-grid ct-vertical"></line><line y1="15" y2="15" x1="50" x2="964" class="ct-grid ct-vertical"></line></g><g><g ct:series-name="series-1" class="ct-series ct-series-a"><path d="M 50 265 L 50 190 C 126.167 190 126.167 124.375 202.333 124.375 C 278.5 124.375 278.5 108.75 354.667 108.75 C 430.833 108.75 430.833 74.375 507 74.375 C 583.167 74.375 583.167 24.375 659.333 24.375 C 735.5 24.375 735.5 108.75 811.667 108.75 C 887.833 108.75 887.833 211.875 964 211.875 L 964 265 Z" class="ct-area"></path><path d="M 50 190 C 126.167 190 126.167 124.375 202.333 124.375 C 278.5 124.375 278.5 108.75 354.667 108.75 C 430.833 108.75 430.833 74.375 507 74.375 C 583.167 74.375 583.167 24.375 659.333 24.375 C 735.5 24.375 735.5 108.75 811.667 108.75 C 887.833 108.75 887.833 211.875 964 211.875" class="ct-line" filter="url(#shadowscoreLineToDay)"></path><line x1="50" y1="190" x2="50.01" y2="190" class="ct-point" ct:value="2400"></line><line x1="50" y1="190" x2="50.01" y2="190" class="ct-point-content"></line><line x1="202.33333333333334" y1="124.375" x2="202.34333333333333" y2="124.375" class="ct-point" ct:value="4500"></line><line x1="202.33333333333334" y1="124.375" x2="202.34333333333333" y2="124.375" class="ct-point-content"></line><line x1="354.6666666666667" y1="108.75" x2="354.6766666666667" y2="108.75" class="ct-point" ct:value="5000"></line><line x1="354.6666666666667" y1="108.75" x2="354.6766666666667" y2="108.75" class="ct-point-content"></line><line x1="507" y1="74.375" x2="507.01" y2="74.375" class="ct-point" ct:value="6100"></line><line x1="507" y1="74.375" x2="507.01" y2="74.375" class="ct-point-content"></line><line x1="659.3333333333334" y1="24.375" x2="659.3433333333334" y2="24.375" class="ct-point" ct:value="7700"></line><line x1="659.3333333333334" y1="24.375" x2="659.3433333333334" y2="24.375" class="ct-point-content"></line><line x1="811.6666666666667" y1="108.75" x2="811.6766666666667" y2="108.75" class="ct-point" ct:value="5000"></line><line x1="811.6666666666667" y1="108.75" x2="811.6766666666667" y2="108.75" class="ct-point-content"></line><line x1="964" y1="211.875" x2="964.01" y2="211.875" class="ct-point" ct:value="1700"></line><line x1="964" y1="211.875" x2="964.01" y2="211.875" class="ct-point-content"></line></g><g ct:series-name="series-2" class="ct-series ct-series-b"><path d="M 50 265 L 50 224.375 C 126.167 224.375 126.167 136.875 202.333 136.875 C 278.5 136.875 278.5 15 354.667 15 C 430.833 15 430.833 140 507 140 C 583.167 140 583.167 58.75 659.333 58.75 C 735.5 58.75 735.5 90 811.667 90 C 887.833 90 887.833 146.25 964 146.25 L 964 265 Z" class="ct-area"></path><path d="M 50 224.375 C 126.167 224.375 126.167 136.875 202.333 136.875 C 278.5 136.875 278.5 15 354.667 15 C 430.833 15 430.833 140 507 140 C 583.167 140 583.167 58.75 659.333 58.75 C 735.5 58.75 735.5 90 811.667 90 C 887.833 90 887.833 146.25 964 146.25" class="ct-line" filter="url(#shadowscoreLineToDay)"></path><line x1="50" y1="224.375" x2="50.01" y2="224.375" class="ct-point" ct:value="1300"></line><line x1="50" y1="224.375" x2="50.01" y2="224.375" class="ct-point-content"></line><line x1="202.33333333333334" y1="136.875" x2="202.34333333333333" y2="136.875" class="ct-point" ct:value="4100"></line><line x1="202.33333333333334" y1="136.875" x2="202.34333333333333" y2="136.875" class="ct-point-content"></line><line x1="354.6666666666667" y1="15" x2="354.6766666666667" y2="15" class="ct-point" ct:value="8000"></line><line x1="354.6666666666667" y1="15" x2="354.6766666666667" y2="15" class="ct-point-content"></line><line x1="507" y1="140" x2="507.01" y2="140" class="ct-point" ct:value="4000"></line><line x1="507" y1="140" x2="507.01" y2="140" class="ct-point-content"></line><line x1="659.3333333333334" y1="58.75" x2="659.3433333333334" y2="58.75" class="ct-point" ct:value="6600"></line><line x1="659.3333333333334" y1="58.75" x2="659.3433333333334" y2="58.75" class="ct-point-content"></line><line x1="811.6666666666667" y1="90" x2="811.6766666666667" y2="90" class="ct-point" ct:value="5600"></line><line x1="811.6666666666667" y1="90" x2="811.6766666666667" y2="90" class="ct-point-content"></line><line x1="964" y1="146.25" x2="964.01" y2="146.25" class="ct-point" ct:value="3800"></line><line x1="964" y1="146.25" x2="964.01" y2="146.25" class="ct-point-content"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="50" y="270" width="152.33333333333334" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 152px; height: 20px;">1st</span></foreignObject><foreignObject style="overflow: visible;" x="202.33333333333334" y="270" width="152.33333333333334" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 152px; height: 20px;">2nd</span></foreignObject><foreignObject style="overflow: visible;" x="354.6666666666667" y="270" width="152.33333333333331" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 152px; height: 20px;">3rd</span></foreignObject><foreignObject style="overflow: visible;" x="507" y="270" width="152.33333333333337" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 152px; height: 20px;">4th</span></foreignObject><foreignObject style="overflow: visible;" x="659.3333333333334" y="270" width="152.33333333333337" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 152px; height: 20px;">5th</span></foreignObject><foreignObject style="overflow: visible;" x="811.6666666666667" y="270" width="152.33333333333326" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 152px; height: 20px;">6th</span></foreignObject><foreignObject style="overflow: visible;" x="964" y="270" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;">7th</span></foreignObject><foreignObject style="overflow: visible;" y="202.5" x="10" height="62.5" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 63px; width: 30px;">0K</span></foreignObject><foreignObject style="overflow: visible;" y="140" x="10" height="62.5" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 63px; width: 30px;">2K</span></foreignObject><foreignObject style="overflow: visible;" y="77.5" x="10" height="62.5" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 63px; width: 30px;">4K</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="10" height="62.5" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 63px; width: 30px;">6K</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">8K</span></foreignObject></g><defs><filter x="0" y="-10%" id="shadowscoreLineToDay"><feGaussianBlur in="SourceAlpha" stdDeviation="8" result="offsetBlur"></feGaussianBlur><feOffset dx="0" dy="10"></feOffset><feBlend in="SourceGraphic" mode="multiply"></feBlend></filter></defs></svg></div>
                          <div class="ct-chart tab-pane" id="scoreLineToWeek"></div>
                          <div class="ct-chart tab-pane" id="scoreLineToMonth"></div>
                        </div>
                      </div>
                    </div>
                    <!-- End Second Row -->
          
                    <!-- Third Row -->
                    <!-- Third Left -->
                    <div class="col-lg-8" id="ecommerceRecentOrder">
                      <div class="card card-shadow table-row">
                        <div class="card-header card-header-transparent py-20">
                          <div class="btn-group dropdown">
                            <a href="#" class="text-body dropdown-toggle blue-grey-700" data-toggle="dropdown">RECENT ORDER</a>
                            <div class="dropdown-menu animate" role="menu">
                              <a class="dropdown-item" href="#" role="menuitem">Sales</a>
                              <a class="dropdown-item" href="#" role="menuitem">Total sales</a>
                              <a class="dropdown-item" href="#" role="menuitem">profit</a>
                            </div>
                          </div>
                        </div>
                        <div class="card-block bg-white table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>Image</th>
                                <th>Product</th>
                                <th>Customer</th>
                                <th>Purchased On</th>
                                <th>Status</th>
                                <th>Tracking No#</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>
                                  <img src="../../assets/examples/images/products/imac.png" alt="iMac">
                                </td>
                                <td>iMac</td>
                                <td>Russell</td>
                                <td>22/08/2018</td>
                                <td>
                                  <span class="badge badge-success font-weight-100">Paid</span>
                                </td>
                                <td>#98BC85SD84</td>
                              </tr>
                              <tr>
                                <td>
                                  <img src="../../assets/examples/images/products/iphone.png" alt="iPhone">
                                </td>
                                <td>iPhone</td>
                                <td>Carol</td>
                                <td>15/07/2018</td>
                                <td>
                                  <span class="badge badge-warning font-weight-100">Pending</span>
                                </td>
                                <td>#98SA3C9SC</td>
                              </tr>
                              <tr>
                                <td>
                                  <img src="../../assets/examples/images/products/applewatch.png" alt="apple_watch">
                                </td>
                                <td>apple Watch</td>
                                <td>Austin Pena</td>
                                <td>10/07/2018</td>
                                <td>
                                  <span class="badge badge-success font-weight-100">Paid</span>
                                </td>
                                <td>#98BC85SD84</td>
                              </tr>
                              <tr>
                                <td>
                                  <img src="../../assets/examples/images/products/macmouse.png" alt="mac_mouse">
                                </td>
                                <td>mac Mouse</td>
                                <td>Randy</td>
                                <td>22/04/2018</td>
                                <td>
                                  <span class="badge badge-default font-weight-100">Failed</span>
                                </td>
                                <td>#98SA3C9SC</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                    <!-- End Third Left -->
          
                    <!-- Third Right -->
                    <div class="col-lg-4" id="ecommerceRevenue">
                      <div class="card card-shadow text-center pt-10">
                        <h3 class="card-header card-header-transparent blue-grey-700 font-size-14 mt-0">REVENUE</h3>
                        <div class="card-block bg-white">
                          <div class="ct-chart barChart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="220" class="ct-chart-bar" style="width: 100%; height: 220px;"><g class="ct-grids"></g><g><g class="ct-series ct-series-a"><line x1="61.8" x2="61.8" y1="185" y2="51.125" class="ct-bar" ct:value="630"></line><line x1="61.8" x2="61.8" y1="51.125" y2="0" class="ct-bar-fill"></line><line x1="109.39999999999999" x2="109.39999999999999" y1="185" y2="36.25" class="ct-bar" ct:value="700"></line><line x1="109.39999999999999" x2="109.39999999999999" y1="36.25" y2="0" class="ct-bar-fill"></line><line x1="157" x2="157" y1="185" y2="78.75" class="ct-bar" ct:value="500"></line><line x1="157" x2="157" y1="78.75" y2="0" class="ct-bar-fill"></line><line x1="204.60000000000002" x2="204.60000000000002" y1="185" y2="100" class="ct-bar" ct:value="400"></line><line x1="204.60000000000002" x2="204.60000000000002" y1="100" y2="0" class="ct-bar-fill"></line><line x1="252.2" x2="252.2" y1="185" y2="19.25" class="ct-bar" ct:value="780"></line><line x1="252.2" x2="252.2" y1="19.25" y2="0" class="ct-bar-fill"></line></g><g class="ct-series ct-series-b"><line x1="85.8" x2="85.8" y1="185" y2="100" class="ct-bar" ct:value="400"></line><line x1="85.8" x2="85.8" y1="100" y2="0" class="ct-bar-fill"></line><line x1="133.39999999999998" x2="133.39999999999998" y1="185" y2="15" class="ct-bar" ct:value="800"></line><line x1="133.39999999999998" x2="133.39999999999998" y1="15" y2="0" class="ct-bar-fill"></line><line x1="181" x2="181" y1="185" y2="36.25" class="ct-bar" ct:value="700"></line><line x1="181" x2="181" y1="36.25" y2="0" class="ct-bar-fill"></line><line x1="228.60000000000002" x2="228.60000000000002" y1="185" y2="78.75" class="ct-bar" ct:value="500"></line><line x1="228.60000000000002" x2="228.60000000000002" y1="78.75" y2="0" class="ct-bar-fill"></line><line x1="276.2" x2="276.2" y1="185" y2="36.25" class="ct-bar" ct:value="700"></line><line x1="276.2" x2="276.2" y1="36.25" y2="0" class="ct-bar-fill"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="50" y="190" width="47.6" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 48px; height: 20px;">JAN</span></foreignObject><foreignObject style="overflow: visible;" x="97.6" y="190" width="47.6" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 48px; height: 20px;">FEB</span></foreignObject><foreignObject style="overflow: visible;" x="145.2" y="190" width="47.60000000000001" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 48px; height: 20px;">MAR</span></foreignObject><foreignObject style="overflow: visible;" x="192.8" y="190" width="47.599999999999994" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 48px; height: 20px;">APR</span></foreignObject><foreignObject style="overflow: visible;" x="240.4" y="190" width="47.599999999999994" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 48px; height: 20px;">MAY</span></foreignObject><foreignObject style="overflow: visible;" y="142.5" x="10" height="42.5" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 43px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="100" x="10" height="42.5" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 43px; width: 30px;">200</span></foreignObject><foreignObject style="overflow: visible;" y="57.5" x="10" height="42.5" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 43px; width: 30px;">400</span></foreignObject><foreignObject style="overflow: visible;" y="15" x="10" height="42.5" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 43px; width: 30px;">600</span></foreignObject><foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">800</span></foreignObject></g></svg></div>
                          <div class="pie-view row">
                            <div class="col-6 pie-left text-center">
                              <h5 class="blue-grey-500 font-size-14 font-weight-100">GROS REVENUE</h5>
                              <p class="font-size-20 blue-grey-700">
                                9,362,74
                              </p>
                              <div class="pie-progress pie-progress-sm" data-plugin="pieProgress" data-valuemax="100" data-valuemin="0" data-barcolor="#a57afa" data-size="100" data-barsize="4" data-goal="60" aria-valuenow="60" role="progressbar">
                                <span class="pie-progress-number">60%</span>
                              <div class="pie-progress-svg"><svg version="1.1" preserveAspectRatio="xMinYMin meet" viewBox="0 0 100 100"><ellipse rx="48" ry="48" cx="50" cy="50" stroke="#f2f2f2" fill="none" stroke-width="4"></ellipse><path fill="none" stroke-width="4" stroke="#a57afa" d="M50,2 A48,48 0 1 1 21.78630788996131,88.83281572999749" style="stroke-dasharray: 180.963, 180.963; stroke-dashoffset: 0;"></path></svg></div></div>
                            </div>
                            <div class="col-6 pie-right text-center">
                              <h5 class="blue-grey-500 font-size-14 font-weight-100">NET REVENUE</h5>
                              <p class="font-size-20 blue-grey-700">
                                6,734,58
                              </p>
                              <div class="pie-progress pie-progress-sm" data-plugin="pieProgress" data-valuemax="100" data-valuemin="0" data-barcolor="#28c0de" data-size="100" data-barsize="4" data-goal="78" aria-valuenow="78" role="progressbar">
                                <span class="pie-progress-number">78%</span>
                              <div class="pie-progress-svg"><svg version="1.1" preserveAspectRatio="xMinYMin meet" viewBox="0 0 100 100"><ellipse rx="48" ry="48" cx="50" cy="50" stroke="#f2f2f2" fill="none" stroke-width="4"></ellipse><path fill="none" stroke-width="4" stroke="#28c0de" d="M50,2 A48,48 0 1 1 2.850211965022943,41.00569689988524" style="stroke-dasharray: 235.25, 235.25; stroke-dashoffset: 0;"></path></svg></div></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    
                    <!-- End Third Right -->
                    <!-- End Third Row -->
                  </div>
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
             <script src="{{asset('admin/vendor/chartist/chartist.min.js')}}"></script>
             <script src="{{asset('admin/vendor/aspieprogress/jquery-asPieProgress.js')}}"></script>
             <script src="{{asset('admin/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js')}}"></script>
             
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
             <script src="{{asset('admin/js/Plugin/aspieprogress.js')}}"></script>
             <script src="{{asset('admin/js/ecommerce.js"')}}"></script>
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
