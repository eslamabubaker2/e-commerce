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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>
<body>
@include('sellercp.header')

<!--Header-part-->
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
                 <th>Option</th>
              
            </tr>
        </thead>
      
        <tbody>
        @foreach($products as $pro)
       <tr>
       <td style="text-align: center;">{{$pro->name}}</td>
       <td style="text-align: center;">{{$pro->product_no}}</td>
       <td>{{$pro->description }}</td>
       <td style="text-align: center;">{{$pro->price }}</td>
       <td style="text-align: center;">{{$pro->contity}}</td>
       <td style="text-align: center;"><a href="{{asset('uploads/'.$pro->img )}}" target="_blank">
    <img src="{{asset('uploads/'.$pro->img )}}" width="60" height="100" id=""></a></td>
       <td style="text-align: center;">{{$pro->store_name }}</td>
       <td style="text-align: center;">{{$pro->cat_name }}</td>

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