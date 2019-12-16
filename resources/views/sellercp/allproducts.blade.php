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
      
        <tbody>@foreach($products as $pro)
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
       <td style="text-align: center;">
           <a pid="{{$pro->id}}" link="{{ URL::asset('/') }}{{$pro->id}}/Editeproduct"  title="Edite" data-toggle="modal" class="myModal"><i class="fa fa-credit-card"></i></a>

       <a  link="/{{$pro->id}}/cancelproduct" data-toggle="modal" title="cancel product from inventory" class="delete"><i class="fa fa-close"></i> </a>
          <a  link="/{{$pro->id}}/displayproductstore" data-toggle="modal" title="Display product on store" class="display"><i class="fa fa-calendar-check-o"></i></a>
           <a  link="/{{$pro->id}}/removeproductstore" data-toggle="modal" title="Remove product from store" class="remove"><i class="fa fa-calendar-times-o"></i> </a>
           <div class="modal fade" id="cancelproduct" role="dialog">
         <div class="modal-dialog">

             <div class="modal-content" >
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Cancel </h4></div>
                 <div class="modal-body" style="float: right;"><h3 class="modal-title" style="float: right;">are you sure to cancel this product?</h3>
                     <form method="post" id="deleteForm" action=""  enctype="multipart/form-data">{{ csrf_field() }}
                         <input type="submit" class="btn btn-success" value="Done" style="float:right; " /><br><br>
                     </form></div></div></div></div>
                     <div class="modal fade" id="display" role="dialog">
         <div class="modal-dialog">

             <div class="modal-content" >
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Display Product on store</h4></div>
                 <div class="modal-body" style="float: right;"><h3 class="modal-title" style="float: right;">are you sure to display Product on store?</h3>
                     <form method="post" id="displayForm" action=""  enctype="multipart/form-data">{{ csrf_field() }}
                         <input type="submit" class="btn btn-success" value="Done" style="float:right; " /><br><br>
                     </form></div></div></div></div>
                     <div class="modal fade" id="remove" role="dialog">
         <div class="modal-dialog">

             <div class="modal-content" >
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Remove product from store</h4></div>
                 <div class="modal-body" style="float: right;"><h3 class="modal-title" style="float: right;">are you sure to Remove product from store?</h3>
                     <form method="post" id="removeForm" action=""  enctype="multipart/form-data">{{ csrf_field() }}
                         <input type="submit" class="btn btn-success" value="Done" style="float:right; " /><br><br>
                     </form></div></div></div></div>
       
    </td>
    
     
                     
                     
    </tr>

<div class="modal fade" id="myModal" role="dialog">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h3> Edite Product</h3></div>
                 <div class="modal-body" >
                     <form id="myModalForm" method="post" action=""   enctype="multipart/form-data"> {{ csrf_field() }}
                         <div class="form-group col-md-12 col-sm-6">
                             <label class="control-label">Product Name </label>
                             <input type="text"  class="span5"  name="name"  value="{{$pro->name}}"></div>
                         <div class="form-group col-md-12 col-sm-6" >
                             <label class="control-label">Product_NO </label>
                             <div class="controls"><input type="text"  class="span5"   name="product_no"  value="{{$pro->product_no}}"></div></div>
                         <div class="form-group col-md-12 col-sm-6" >
                             <label class="control-label">Price </label>
                             <div class="controls"><div class="input-append">
                                     <input type="text"  class="span5"   name="price"  value="{{$pro->price}}"><span class="add-on">$</span></div>
                             </div>
                         </div>
                         <div class="form-group col-md-12 col-sm-6" >
                             <label class="control-label">Amount </label>
                             <div class="controls">
                                 <input type="text"  class="span5"   name="contity"  value="{{$pro->contity}}">
                             </div>
                         </div>
                         <div class="form-group col-md-12 col-sm-6" >
                             <label class="control-label">Description </label>
                             <div class="controls">
                                 <textarea class="span5"   name="description">{{$pro->description}}</textarea>
                             </div>
                         </div>
                         <div class="control-group">
                             <label class="control-label">Category</label>
                             <div class="controls">
                                 <select id="cat_id" type="text" class="md-input"
                                         name="category"  required >
                                     @foreach($categories as $cat)

                                         <option value="{{$cat->id}}">{{$cat->name}}</option>

                                     @endforeach
                                 </select></div></div>
                         <div class="form-group col-md-12 col-sm-6" >
                             <label class="control-label">Image Product </label>
                             <div class="controls">
                                 <input type="file"  class="span5"  name="img"  value="{{$pro->img}}">
                             </div>
                         </div>  <button type="submit"   class="btn btn-success">
                             Edite</button>
                     </form></div>
             </div>
         </div>
     </div>



 
         
 @endforeach
            </tbody>
    </table>

     
     
     <!--display product on store-->
     
     <!--end display-->
     <!--remove-->
     
     <!--end remove-->

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

$('.delete').on('click',function (e) {

    e.preventDefault();
    var del=$(this);
    $('#deleteForm').attr('action',del.attr('link'));
    $('#cancelproduct').modal();
});
$('.remove').on('click',function (e) {

    e.preventDefault();
    var remove=$(this);
    $('#removeForm').attr('action',remove.attr('link'));
    $('#remove').modal();
});
$('.display').on('click',function (e) {

    e.preventDefault();
    var display=$(this);
    $('#displayForm').attr('action',display.attr('link'));
    $('#display').modal();
});
$('.myModal').on('click',function (e) {
   e.preventDefault();
    var myModal=$(this);
    $('#myModalForm').attr('action',myModal.attr('link'));
    getData(myModal.attr('pid'));
    $('#myModal').modal();
});

function getData(id){
    $.ajax({
        type:'GET',
        url:'/'+id+'/getProductData',

        success:function(data){
         // console.log(data);

            $('#myModalForm input[name = name]').val(data.product.name);
            $('#myModalForm input[name = product_no]').val(data.product.product_no);
            $('#myModalForm input[name = price]').val(data.productdata.price);
            $('#myModalForm input[name = amount]').val(data.product.contity);
            $('#myModalForm textarea').text(data.product.description);
            $('#cat_id').val(data.product.category);

        }
    });
}
</script>
</body>
</html>