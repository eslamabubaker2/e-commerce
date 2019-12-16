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
<div class="alert alert-danger">
            <h4>{{$errors->first()}}</h4>

            </div>@endif
<!--Header-part-->
<div class="container">
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>NO</th>
                <th>Name Category</th>
                 <th>Image Category</th>
                <th>Option</th>
              
            </tr>
        </thead>
      
        <tbody>
        @foreach($categories as  $categ)
          <tr><td style="text-align: center;">{{$categ->id}}</td>
          <td style="text-align: center;">{{$categ->name}}</td>
          <td style="text-align: center;"><a href="{{asset('uploads/'.$categ->imagecategory)}}" target="_blank">
    <img src="{{asset('uploads/'.$categ->imagecategory)}}" width="60" height="100" id=""></a></td>
          <td style="text-align: center;"> <a align="center" class="btn btn-sm info marginTop2 "    data-toggle="modal" href="#edit{{ $categ->id }}">Edite</a></td>

          <div class="modal fade" id="edit{{ $categ->id }}" role="dialog">
           <div class="modal-dialog">
          <div class="modal-content" >
        <div class="modal-header"  >
           
            <h4 class="modal-title" >Edite</h4>
        </div>
<div class="modal-body" >
          <form method="post" action="{{ URL::asset('/') }}{{$categ->id}}/saveeditecategory"  enctype="multipart/form-data">
            {{ csrf_field() }}
             
       <div class="form-group col-md-3 col-sm-3">
      <label for="name">Name Category</label>
      <input type="text" class="form-control input-sm" id="name" name="name" required  value="{{ $categ->name }}">
       </div>
       <div class="form-group col-md-3 col-sm-3">
      <label for="name"></label>
      <input type="file" class="form-control input-sm" id="name" name="imagecategory"  value="">
       </div></div>  
       <div class="modal-footer" >
         <input type="submit" class="btn btn-success" value="Done" />
</div>

        </form>

</div>
</div></div>
</tr>
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