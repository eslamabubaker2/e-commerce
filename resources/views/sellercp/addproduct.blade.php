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


 @include('sellercp.header')
<br><br>

<div id="content" style="min-height: 190px;">
  
  <div class="container-fluid">
    <div class="row-fluid">
    
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
            <h5>ADD Product</h5>
          </div>
          <div class="widget-content nopadding">
 @if($errors->any() && $errors->first() != 1)
<div class="alert alert-success">
            <h4>{{$errors->first()}}</h4>

            </div>@endif
            <form action="{{url('/addproduct')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
             {{ csrf_field() }} 
              <div class="control-group">
                <label class="control-label">Product Name </label>
                <div class="controls">
                  <input type="text" class="span6"  name="name"  required="" />
                </div>
              </div>
               <div class="control-group">
                <label class="control-label">Product_NO</label>
                <div class="controls">
                  <input type="text" class="span6"  name="product_no" required=""  placeholder="###" />
                </div>
              </div>


               
              <div class="control-group">
                <label class="control-label">Price</label>
                <div class="controls">
                <div class="input-append">
                  <input type="text" class="span6"  name="price" required="" placeholder="0.00"  /><span class="add-on">$</span>
                </div>
              </div>
               <div class="control-group">
                <label class="control-label">Amount</label>
                <div class="controls">
                  <input type="text" class="span6"  name="contity" required="" placeholder="0.00"  />
                </div>
              </div>
       <div class="control-group">
                <label class="control-label">Description</label>
                <div class="controls">
<textarea   class="span6"  name="description" ></textarea>                </div>
              </div> 
               <div class="md-form-group col-lg-6">
                <label class="control-label" >Image Product</label>
                <div class="controls">
                  <input type="file"  class="span6" class="span11"  
                  name="img" required=""  />
                </div>
              </div> 
              
 <div class="control-group">
                <label class="control-label">Category</label>
                <div class="controls">
                 <select id="name" type="text" class="span6" class="md-input" name="category"   required >@foreach($categories as $cat)
 <option value="{{$cat->id}}" >{{$cat->name}}</option>
  @endforeach
   </select></div></div>
              <div class="form-actions">
                <button type="submit"  class="btn btn-success" style="width: 103px;">ADD</button>
              </div>
              <a class="btn btn-success"  href="/sellercp" style="width: 96px; margin-top: -50px;
             float:right; margin-right: 850px;">  Cancel</a>
            </form>
          </div>
        </div>
      </div>
      <div class="span6">
       
      </div>
    </div><hr>
    
  </div>
</div>
</div></div>
 @include('sellercp.footer')


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