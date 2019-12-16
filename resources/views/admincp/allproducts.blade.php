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

 @if($errors->any() && $errors->first() != 1)
<div class="alert alert-danger" class="span6">
            <h4>{{$errors->first()}}</h4>

            </div>@endif

<!--Header-part-->
<div class="container" style="margin-top: 40px;">

<table id="example" class="table table-striped table-bordered"

 cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name product</th>
                <th>Product-NO</th>
                 <th>Description</th>
                 <th>Price</th>
                 <th>Amount</th>
                 <th>Image</th>
                 <th>Name Store</th>
                 <th>Name Category</th>
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
    <img src="{{asset('uploads/'.$pro->img )}}" width="60" height="100" id=""></a>
    </td>
       <td style="text-align: center;">{{$pro->store_name }}</td>
       <td style="text-align: center;">{{$pro->cat_name }}</td>
       <td style="text-align: center;">
           <a align="center" class="btn btn-sm info marginTop2 "   data-toggle="modal" href="#cancelproduct">Cancel</a>

       </td>

         
 </tr>
        @endforeach
            </tbody>
    </table>
    <div class="modal fade" id="cancelproduct" role="dialog">
        <div class="modal-dialog">

            <div class="modal-content" >
                <div class="modal-header">

                    <h4 class="modal-title">Cancel </h4>
                </div>
                <div class="modal-body" >

                    <h3 class="modal-title" >are you sure to cancel this product?</h3>

                    <form method="post" action="/{{$pro->id}}/cancelproduct"  enctype="multipart/form-data">
                        {{ csrf_field() }}


                        <input type="submit" class="btn btn-success" value="Done"  /><br><br>
                    </form>

                </div>




            </div>
        </div></div>


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