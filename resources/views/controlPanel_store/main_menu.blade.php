<div id="main-menu" data-scroll-to-active="true" class="main-menu menu-dark menu-fixed menu-bordered menu-native-scroll menu-shadow">
      <!-- main menu header-->
      <div class="main-menu-header">
        <input type="text" placeholder="Search" class="menu-search form-control round" />
      </div>
      <!-- / main menu header-->
      <!-- main menu content-->
      <div class="main-menu-content">
        <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
          <li class=" nav-item"><a href="{{url('/store')}}"><i class="icon-home3"></i><span data-i18n="nav.dash.main" class="menu-item">Dashboard</span>
                  {{--<span class="tag tag tag-primary tag-pill float-xs-right mr-2">5</span>--}}
              </a>
              </li>
    
         
          <li class=" nav-item"><a href="./invoice-list.php"><i class="icon-file-subtract"></i><span data-i18n="nav.invoice.main" class="menu-title">Invoice</span></a>
            
          </li>
         
           <li class=" nav-item"><a href="#"><i class="icon-wpforms"></i><span data-i18n="nav.form_layouts.main" class="menu-title"> Products  </span></a>
            <ul class="menu-content">
             
              <li><a href="{{url('/sellerpanel/products_table')}}" data-i18n="nav.form_layouts.form_layout_horizontal" class="menu-item">Products</a>
              </li>
               <li><a href="{{url('/sellerpanel/addproduct')}}" data-i18n="nav.form_layouts.form_layout_horizontal" class="menu-item">Add product</a>
              </li>
             
            </ul>
          </li>
         
      
       
          <li class=" nav-item"><a href="#"><i class="icon-wpforms"></i><span data-i18n="nav.form_layouts.main" class="menu-title"> Requests </span></a>
            <ul class="menu-content">
              <li><a href="./Req.php" data-i18n="nav.form_layouts.form_layout_horizontal" class="menu-item"> Requests</a>
              </li>
              <li><a href="./CompletedReq.php" data-i18n="nav.form_layouts.form_layout_horizontal" class="menu-item">Completed Requests</a>
              </li>
               <li><a href="./RefusedReq.php" data-i18n="nav.form_layouts.form_layout_horizontal" class="menu-item">Refused Requests</a>
              </li>
             
            </ul>
          </li>
  
        <li class=" nav-item"><a href="#"><i class="icon-th"></i><span data-i18n="nav.form_layouts.main" class="menu-title"> Store </span></a>
            <ul class="menu-content">
              <li><a href="{{url('/sellerpanel/storeData')}}" data-i18n="nav.form_layouts.form_layout_horizontal" class="menu-item"> Edit store Info </a>
              </li>
            
             
            </ul>
          </li>
        </ul>
      </div>
      <!-- /main menu content-->
    
    </div>