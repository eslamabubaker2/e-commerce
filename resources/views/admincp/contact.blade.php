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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
             <th >Date </th>
              <th>name</th>
              <th> email</th>
               <th >message</th>
             
               <th>Option</th>

              
            </tr>
        </thead>
      
        <tbody>
        @foreach($contactuses as $contact)
         
     
       <tr>
       <td style="text-align: center;">{{$contact->created_at}}</td>
       <td style="text-align: center;">{{$contact->name}}</td>
       <td style="text-align: center; width: 300px;">{{$contact->email}}</td>
     
       

       <td style="text-align: center; width: 300px;" >{{$contact->mes}}</td>
     
   <td> <a  align="center"  class="btn btn-sm info marginTop2 "  data-toggle="modal" href="#ddd{{$contact->id}}">Send response</a></td>
<div class="modal fade" id="ddd{{$contact->id}}" role="dialog">
                                        <div class="modal-dialog" >

                                            <!-- Modal content-->
                                            <div class="modal-content" >
                                                <div class="modal-header" >
                                                   
                                                    <h4 class="modal-title" >Send Message</h4>
                                                </div>
                                                 <div class="modal-body" style="float: right;margin-right: 100px; align-content: center;">
                                                  
                                                      <form method="post" action="{{ url('/') }}/{{$contact->id}}/editewith"  enctype="multipart/form-data">
                                                    {{ csrf_field() }}
               <div style="float: left;margin-left: 20px;">                                    
                <label >Email</label>
               <div class="input-append">
                  <input type="text" class="span3"  name="email"  value="{{$contact->email}}"  /><span class="add-on"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                </div><br>
<label >Subject</label>
                                                      <textarea  class="span4" rows="10" cols="200" name="message"> </textarea><br><br></div>
                                                    <input type="submit" class="btn btn-success" value="Done" 
                                                    style="float:left;margin-left: 20px;" /><br><br>
</form>
<!-- <A  style="float:right; margin-top: -30px;"  CLASS="btn btn-success">Cancel</A>
 -->                                                </div>

                                                
                                              
                                     
                                            </div>
                                        </div>

                                    </div>


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