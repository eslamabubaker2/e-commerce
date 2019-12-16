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
                 <th>Invoice Number</th>
                 <th>Buyer Name</th>
                 <th>Value</th>
                 <th>Invoice Date</th>

              
            </tr>
        </thead>
      
        <tbody>
        @foreach($invoices as $invoice)
       <tr>
       <td style="text-align: center;">{{$invoice->id}}</td>
       <td style="text-align: center;">{{$invoice->user_name}}</td>
       <td>{{$invoice->amount }}</td>
       <td style="text-align: center;">{{$invoice->created_at }}</td>



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