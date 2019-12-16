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
                <th>Name product</th>
                <th>percent</th>
                 <th> NO-Day</th>
                 
                 <th>Option</th>
              
            </tr>
        </thead>
      
        <tbody>@foreach($products as $pro)
       <tr>
       <td style="text-align: center;">{{$pro->name}}</td>
       <td style="text-align: center;">{{$pro->percent}}</td>
       <td>{{$pro->no_dates }}</td>
       
      
       <td style="text-align: center;"> <A  title="Edite" data-toggle="modal" href="#myModal{{$pro->id}}"><i class="fa fa-credit-card"></i></a>

       <a   data-toggle="modal" title="cancel" href="#cancelproduct{{$pro->id}}"><i class="fa fa-close"></i> </a>
         
       
    </td><div class="modal fade" id="myModal{{$pro->id}}" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
 <div class="modal-header">
<H3> Edite Product</H3></div>
<div class="modal-body" >
<form method="post" action="{{ URL::asset('/') }}{{$pro->id}}/Editeeffort"   enctype="multipart/form-data"> {{ csrf_field() }}

  

  
<div class="control-group">
                <label class="control-label">Name product</label>
                <div class="controls">
                 <select id="name" type="text" class="md-input" 
                 name="product_id"  required >
                 
 <option value="{{$pro->id}}">{{$pro->name}}</option>
 @foreach($prod as $produ)
  <option value="{{$produ->id}}">{{$produ->name}}</option>

@endforeach
   </select></div></div>
   <div class="form-group col-md-12 col-sm-6" >
<label class="control-label">percent  </label>
 <div class="controls"><div class="input-append">
 <input type="text"  class="span5"   name="percent"  value="{{$pro->percent}}"><span class="add-on">%</span></div>
</div>
</div>  
 <div class="form-group col-md-12 col-sm-6" >
<label class="control-label">NO_Day  </label>
 <div class="controls"><div class="input-append">
 <input type="text"  class="span5"   name="no_dates"  value="{{$pro->no_dates}}"><span class="add-on">$</span></div>
</div>
</div>  
 <button type="submit"   class="btn btn-success">
       Edite</button>
</form></div>
        </div>
</div>
</div>
<!--cancel-->
<div class="modal fade" id="cancelproduct{{ $pro->id }}" role="dialog">
     <div class="modal-dialog">

<div class="modal-content" >
<div class="modal-header"><h4 class="modal-title">Cancel Effort</h4></div>
<div class="modal-body" style="float: right;"><h3 class="modal-title" style="float: right;">are you sure to cancel this effort?</h3>
<form method="post" action="/{{$pro->id}}/canceleffort"  enctype="multipart/form-data">{{ csrf_field() }}
<input type="submit" class="btn btn-success" value="Done" style="float:right; " /><br><br>
</form></div></div></div></div>
<!--end-->

</tr>


 
         
 @endforeach
            </tbody>
    </table>
    </div></div>
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
 <script>
$(document).ready(function(){
    $('[data-toggle="modal"]').tooltip();   
});
</script>
</body>
</html>