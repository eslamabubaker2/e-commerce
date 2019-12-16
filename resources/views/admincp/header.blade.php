
<div id="header"><img src="img/logo.png" width="190px" height="25px" style="margin-top: 7px;"><h3></h3>
</div>
<!--close-Header-part--> 

<!--top-Header-messaages-->
<div class="btn-group rightzero"> <a class="top_message tip-left" title="Manage Files"><i class="icon-file"></i></a> <a class="top_message tip-bottom" title="Manage Users"><i class="icon-user"></i></a> <a class="top_message tip-bottom" title="Manage Comments"><i class="icon-comment"></i><span class="label label-important">5</span></a> <a class="top_message tip-bottom" title="Manage Orders"><i class="icon-shopping-cart"></i></a> </div>
<!--close-top-Header-messaages--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li class="" ><a title="" href="#"><i class="icon icon-user"></i> <span class="text">HELLO:{{Auth::user()->name}}</span></a></li>
   <!-- <li class=" dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#">new message</a></li>
        <li><a class="sInbox" title="" href="#">inbox</a></li>
        <li><a class="sOutbox" title="" href="#">outbox</a></li>
        <li><a class="sTrash" title="" href="#">trash</a></li>
      </ul>
    </li>-->
     <!-- <li class=""><a title="" href="/"><i class="icon icon-shopping-cart"></i> <span class="text">Preview Site</span></a></li>
 -->
    <li class=""><a title="" href="/settingaccountadmin"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class="">
    <a title="" href="{{url('/logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a>
                                               <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form></li>
                                                    
  </ul>
</div>

<!--close-top-Header-menu-->

<div id="sidebar"><ul>
    <li class="active"><a href="/admin"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
     <li> <a href="/AllUSERS"><i class="icon icon-user"></i> <span> Users</span></a> </li>
    <li> <a href="/admincategory"><i class="icon icon-tint"></i> <span>Add Category</span></a> 
    </li>
    <li> <a href="/allcategory"><i class="icon icon-th-list"></i> <span>  All Category</span></a> </li>
     <li><a href="/AllProduct"><i class="icon icon-fullscreen"></i> <span>All Product</span></a></li>

<li> <a href="/commission"><i class="icon icon-inbox"></i> <span>Edite commission</span></a> </li>
<li > <a href="/allwithdrawstoreadmin"><i class="icon icon-th-list"></i> <span>Requested withdraws</span></li>
    <li><a href="/allcontacts"><i class="icon icon-file"></i> <span>Contacts</span></a></li>
   
    <!--<li class="submenu"> <a href="/allwithdrawstoreadmin"><i class="icon icon-th-list"></i> <span>Forms</span> <span class="label label-important">3</span></a>
      <ul>
        <li><a href="form-common.html">Basic Form</a></li>
        <li><a href="form-validation.html">Form with Validation</a></li>
        <li><a href="form-wizard.html">Form with Wizard</a></li>
      </ul>
    </li>
    <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
    <li><a href="interface.html"><i class="icon icon-pencil"></i> <span>Eelements</span></a></li>
    <li class="submenu"> <a href="#"><i class="icon icon-file"></i> <span>Addons</span> <span class="label label-important">4</span></a>
      <ul>
        <li><a href="index2.html">Dashboard2</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="calendar.html">Calendar</a></li>
        <li><a href="chat.html">Chat option</a></li>
      </ul>
    </li>-->
  </ul>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> </div>
  </div>
  <div class="container-fluid">
    <div class="quick-actions_homepage">
    <ul class="quick-actions">
         <!-- <li> <a href="#"> <i class="icon-dashboard"></i> My Dashboard </a> </li>-->
          <li> <a href="#"> <i class="icon-shopping-bag"></i> Balance: {{getTotalBalanceWebsite()}}</a> </li>
          <li> <a href="/accountstatmentadmin"> <i class="icon-calendar"></i> Account statement </a> </li>
         
           
          <li> <a href="#"> <i class="icon-web"></i> Web Markting </a> </li>
        </ul>
   </div>