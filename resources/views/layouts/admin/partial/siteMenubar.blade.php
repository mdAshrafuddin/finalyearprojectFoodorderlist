<div class="site-menubar-body">

        <div>
          <div>
          
            <ul class="site-menu" data-plugin="menu">
              <li class="site-menu-category">General</li>

              @if (Request::is('admin*'))
              <li class="site-menu-item has-sub open">
                  <a href="javascript:void(0)">
                          <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                          <span class="site-menu-title">Dashboard</span>
                          <span class="site-menu-arrow"></span>
                              <div class="site-menu-badge">
                                  <span class="badge badge-pill badge-success"></span>
                              </div>
                      </a>
                  <ul class="site-menu-sub">
                    <li class="site-menu-item is-shown 
                    {{Request::is('admin/home*') ? 'active' : ''}}
                    ">
                      <a class="animsition-link" href="{{ route('admin.dashboard.index')}}">
                        <span class="site-menu-title">dashboard</span>
                      </a>
                    </li>
  
                   
  
                  </ul>
              </li>

            <li class="site-menu-item has-sub open">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                        <span class="site-menu-title">All Category</span>
                        <span class="site-menu-arrow"></span>
                            <div class="site-menu-badge">
                                <span class="badge badge-pill badge-success"></span>
                            </div>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item is-shown 
                  {{Request::is('admin/category*') ? 'active' : ''}}
                  ">
                    <a class="animsition-link" href="{{route('admin.category.index')}}">
                      <span class="site-menu-title">Category</span>
                    </a>
                  </li>

                  <li class="site-menu-item is-shown
                  {{Request::is('admin/subcategory*') ? 'active' : ''}}
                  ">
                    <a class="animsition-link" href="{{route('admin.subcategory.index')}}">
                      <span class="site-menu-title">Sub category</span>
                    </a>
                  </li>


                </ul>
            </li>

            <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                        <span class="site-menu-title">Home</span>
                        <span class="site-menu-arrow"></span>
                            <div class="site-menu-badge">
                                <span class="badge badge-pill badge-success"></span>
                            </div>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item 
                  {{Request::is('admin/about*') ? 'active' : ''}}
                  ">
                    <a class="animsition-link" href="{{route('admin.about.index')}}">
                      <span class="site-menu-title">Home</span>
                    </a>
                  </li>
            </ul>
            </li>

            <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                        <span class="site-menu-title">Contact</span>
                        <span class="site-menu-arrow"></span>
                            <div class="site-menu-badge">
                                <span class="badge badge-pill badge-success"></span>
                            </div>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item 
                  {{Request::is('admin/contact*') ? 'active' : ''}}
                  ">
                    <a class="animsition-link" href="{{route('admin.contact.index')}}">
                      <span class="site-menu-title">contact</span>
                    </a>
                  </li>




                </ul>
            </li>

            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                      <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                      <span class="site-menu-title">Food Items</span>
                      <span class="site-menu-arrow"></span>
                          <div class="site-menu-badge">
                              <span class="badge badge-pill badge-success"></span>
                          </div>
                  </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item is-shown
                {{Request::is('admin/fooditem*') ? 'active' : ''}}
                ">
                  <a class="animsition-link" href="{{route('admin.fooditem.index')}}">
                    <span class="site-menu-title">Fooditem</span>
                  </a>
                </li>
            </ul>
            </li>

            <li class="site-menu-item has-sub">
              <a href="javascript:void(0)">
                      <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                      <span class="site-menu-title">Resturant</span>
                      <span class="site-menu-arrow"></span>
                          <div class="site-menu-badge">
                              <span class="badge badge-pill badge-success"></span>
                          </div>
                  </a>
              <ul class="site-menu-sub">
                <li class="site-menu-item 
                {{Request::is('admin/resturant*') ? 'active' : ''}}
                ">
                  <a class="animsition-link" href="{{route('admin.resturant.index')}}">
                    <span class="site-menu-title">Fooditem</span>
                  </a>
                </li>
            </ul>
            </li>

            <li class="site-menu-item has-sub">
                <a href="javascript:void(0)">
                        <i class="site-menu-icon wb-file" aria-hidden="true"></i>
                        <span class="site-menu-title">Orders</span>
                        <span class="site-menu-arrow"></span>
                            <div class="site-menu-badge">
                                <span class="badge badge-pill badge-success"></span>
                            </div>
                    </a>
                <ul class="site-menu-sub">
                  <li class="site-menu-item 
                  {{Request::is('admin/order*') ? 'active' : ''}}
                  ">
                    <a class="animsition-link" href="{{route('admin.order.index')}}">
                      <span class="site-menu-title">Order</span>
                    </a>
                  </li>
              </ul>
              </li>

              @endif
             

            
            </ul>


          </div>
        </div>
          
      </div>


      <div class="site-menubar-footer">
        <a href="javascript: void(0);" class="fold-show" data-placement="top" data-toggle="tooltip"
          data-original-title="Settings">
          <span class="icon wb-settings" aria-hidden="true"></span>
        </a>
        <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Lock">
          <span class="icon wb-eye-close" aria-hidden="true"></span>
        </a>
        <a href="javascript: void(0);" data-placement="top" data-toggle="tooltip" data-original-title="Logout">
          <span class="icon wb-power" aria-hidden="true"></span>
        </a>
      </div></div>    
      
      <div class="site-gridmenu">
      <div>
        <div>
          <ul>
            <li>
              <a href="../apps/mailbox/mailbox.html">
                <i class="icon wb-envelope"></i>
                <span>Mailbox</span>
              </a>
            </li>
            <li>
              <a href="../apps/calendar/calendar.html">
                <i class="icon wb-calendar"></i>
                <span>Calendar</span>
              </a>
            </li>
            <li>
              <a href="../apps/contacts/contacts.html">
                <i class="icon wb-user"></i>
                <span>Contacts</span>
              </a>
            </li>
            <li>
              <a href="../apps/media/overview.html">
                <i class="icon wb-camera"></i>
                <span>Media</span>
              </a>
            </li>
            <li>
              <a href="../apps/documents/categories.html">
                <i class="icon wb-order"></i>
                <span>Documents</span>
              </a>
            </li>
            <li>
              <a href="../apps/projects/projects.html">
                <i class="icon wb-image"></i>
                <span>Project</span>
              </a>
            </li>
            <li>
              <a href="../apps/forum/forum.html">
                <i class="icon wb-chat-group"></i>
                <span>Forum</span>
              </a>
            </li>
            <li>
              <a href="../index.html">
                <i class="icon wb-dashboard"></i>
                <span>Dashboard</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
</div>