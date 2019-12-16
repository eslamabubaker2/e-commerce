 <!DOCTYPE html>
<html lang="en">
<head>
<title>Gaza Market</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="AdminPanel/css/bootstrap.min.css" />
<link rel="stylesheet" href="AdminPanel/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="AdminPanel/css/fullcalendar.css" />
<link rel="stylesheet" href="AdminPanel/css/maruti-style.css" />
<link rel="stylesheet" href="AdminPanel/css/maruti-media.css" class="skin-color" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">


</head>
<body>

<!--Header-part-->


 @include('admincp.header')
 <br><br>
<div id="content" style="min-height: 199px;">
  
  <div class="container-fluid">
    <div class="row-fluid">
     <div class="span3"></div>
      <div class="span6">
        <div class="widget-box" style="margin-top: 20px;">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>seller Information</h5>
          </div>
          <div class="widget-content nopadding">
 @if($errors->any() && $errors->first() != 1)
<div class="alert alert-success">
            <h4>{{$errors->first()}}</h4>

            </div>@endif 
            @foreach($user as $sto)
            <form action="{{url('/') }}/{{$sto->id}}/Editesellerinfo" method="post" class="form-horizontal" enctype="multipart/form-data">
             {{ csrf_field() }} 
              <div class="control-group">
                <label class="control-label">Name </label>
                <div class="controls">
                  <input type="text" class="span11"  name="name"  
                  value="{{$sto->name}}" required="" />
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">email </label>
                <div class="controls">
                  <input type="text" class="span11"  name="email"  
                  value="{{$sto->email}}" required="" />
                </div>
              </div>
                <div class="control-group">
                <label class="control-label">password </label>
                <div class="controls">
                  <input type="password" class="span11"  name="password"  
                  placeholder="new password"   />
                </div>
              </div><div class="form-actions">
                <button type="submit" class="btn btn-success" style="width: 103px; ">Edite</button>
              </div>
             <a class="btn btn-success"  href="/sellercp" style="width: 96px; margin-top: -50px;
             float:right; margin-right: 200px;">  Cancel</a>
            </form>
          </div>
        </div> <div class="span12"></div>
      </div>@endforeach
     
    </div>
   
  </div>
</div>
</div>
 @include('admincp.footer')


<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
<script src="//code.jquery.com/jquery-1.12.4.js"></script>
 <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
 <script type="text/javascript">
   $(document).ready(function(){
    $('#example').DataTable();
});
 </script>
</body>
</html>