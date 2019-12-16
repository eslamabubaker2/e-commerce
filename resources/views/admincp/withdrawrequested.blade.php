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
<br><br><br><br><br><br>
<div class="container">
 @if($errors->any() && $errors->first() != 1)
 <div class="alert alert-success">
            <h4>{{$errors->first()}}</h4>

            </div>@endif
 <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
             <th>Date requested</th>
             <th>Store Name</th>
             <th>Store Email</th>
             <th>Process</th>

              <th>requested value</th>
              <th>Deatils</th>
              <th>Option</th>
                </tr>
        </thead>
      
        <tbody>
        @foreach($withdraws as $with)
         
     
       <tr>
       <td style="text-align: center;">{{$with->created_at}}</td>
        <td style="text-align: center;">{{$with->name}}</td>
         <td style="text-align: center;">{{$with->email}}</td>
        <td style="text-align: center;">Withdraw Balance</td>
       <td style="text-align: center;">{{$with->value}}</td>
       <td style="text-align: center;">{{$with->deatilsreceive}}</td>
       <td style="text-align: center;">
       <?php if($with->state =='appending'){ ?>
       <a  align="center"  class="btn btn-sm info marginTop2 "  data-toggle="modal" href="#ddd{{$with->id}}">Done</a>
        <a align="center" class="btn btn-sm info marginTop2 "  data-toggle="modal" href="#cancelprocess{{$with->id}}">Returned</a>
        <?php }  ?></td>
        
      <div class="modal fade" id="ddd{{ $with->id }}" role="dialog">
     <div class="modal-dialog">

<div class="modal-content" >
<div class="modal-header">
                                                   
                                                    <h4 class="modal-title">complete process</h4>
                                                </div>
                                                 <div class="modal-body" style="float: right;">
                                                   
                                                    <h3 class="modal-title" style="float: right;">are you sure to complete this process?</h3>
                                                   
                                                      <form method="post" action="{{ url('/') }}/{{$with->id}}/complprocess"  enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                   
                                                   
                                                    <input type="submit" class="btn btn-success" value="Done" style="float:right; " /></form>

                                                    <br><br>


                                                </div>

                                                
                                              
                                     
                                            </div>
                                        </div></div>
    
      <div class="modal fade" id="cancelprocess{{ $with->id }}" role="dialog">
     <div class="modal-dialog">

<div class="modal-content" >
<div class="modal-header">
                                                   
                                                    <h4 class="modal-title">Returned</h4>
                                                </div>
                                                 <div class="modal-body" style="float: right;">
                                                   
                                                    <h3 class="modal-title" style="float: right;">are you sure to cancel this process?</h3>
                                                   
                                                      <form method="post" action="{{ url('/') }}/{{$with->id}}/Referenceprocess"  enctype="multipart/form-data">
                                                    {{ csrf_field() }}
                                                   <textarea rows="10" cols="150" name="Notesadmin">Sorry your request has not been accepted Please re-order again, due to.... </textarea>
                                                   <br><br>
                                                    <input type="submit" class="btn btn-success" value="Done" style="float:right; " /><br><br>
</form>

                                                </div>

                                                
                                              
                                     
                                            </div>
                                        </div></div>
       </tr>

 @endforeach
 
            </tbody>
    </table>

    </div></div>
    </div>

 @include('admincp.footer')
<script>



</script>

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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
<script type="text/javascript">
   $(document).ready(function(){
    $('#example').DataTable();
});

 </script>
 <script>
$(document).ready(function(){
    $('[data-toggle="modal"]').tooltip();   
});

</script>
</body>
</html>