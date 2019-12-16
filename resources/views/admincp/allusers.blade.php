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

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.15/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/jq-2.2.4/dt-1.10.15/datatables.min.js"></script>



</head>
<body>
@include('admincp.header')
<br><br><br><br><br><br>
 @if($errors->any() && $errors->first() != 1)
<div class="alert alert-danger">
            <h4>{{$errors->first()}}</h4>

            </div>@endif
<!--Header-part-->
<div class="container">
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                 <th>Role</th>
                <th>Option</th>
              
            </tr>
        </thead>
      
        <tbody>
        @foreach($users as $us)
<TR>
<TD style="text-align: center;">{{$us->name}}</TD>
<TD style="text-align: center;">{{$us->email}}</TD>
<?php  if($us->role==1)
$r='Seller';
elseif($us->role==2)
$r='Buyer';?>
<TD style="text-align: center;">{{$r}}</TD>
<TD style="text-align: center;"><a align="center" class="btn btn-sm info marginTop2 "   data-toggle="modal" href="#canceluser{{$us->id}}">Cancel</a>
<div class="modal fade" id="canceluser{{ $us->id }}" role="dialog">
     <div class="modal-dialog">

<div class="modal-content" >
<div class="modal-header">
                                                   
                                                    <h4 class="modal-title">Cancel User</h4>
                                                </div>
                                                 <div class="modal-body" style="float: right;">
                                                   
                                                    <h3 class="modal-title" style="float: right;">are you sure to cancel this user?</h3>
                                                   
                                           <form method="post" action="/{{$us->id}}/canceluser"  enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                   
                                                   
                                                    <input type="submit" class="btn btn-success" value="Done" style="float:right; " /><br><br>
</form>

                                                </div>

                                                
                                              
                                     
                                            </div>
                                        </div></div>
                                        </TD>
</TR>
@endforeach

            </tbody>
    </table>
    </div></div></div>
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