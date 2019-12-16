<!DOCTYPE html>
<html lang="en" data-textdirection="LTR" class="loading">
  <head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta name="description" content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities." />
    <meta name="keywords" content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app" />
    <meta name="author" content="PIXINVENT" />
    <title>Contacts - Robust Admin Template</title>
    <link rel="apple-touch-icon" sizes="60x60" href="{{URL::asset('storepanel/robust-assets/ico/apple-icon-60.png')}}" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('storepanel/robust-assets/ico/apple-icon-76.png')}}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{URL::asset('storepanel/robust-assets/ico/apple-icon-120.png')}}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{URL::asset('storepanel/robust-assets/ico/apple-icon-152.png')}}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('storepanel/robust-assets/ico/favicon.ico')}}" />
    <link rel="shortcut icon" type="image/png" href="{{URL::asset('storepanel/robust-assets/ico/favicon-32.png')}}" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-touch-fullscreen" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="default" />
    <!-- BEGIN VENDOR CSS-->

    <link rel="stylesheet" href="{{URL::asset('storepanel/robust-assets/css/vendors.min.css')}}" />
    <!-- BEGIN VENDOR CSS-->
    <!-- BEGIN Font icons-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('storepanel/robust-assets/fonts/icomoon.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('storepanel/robust-assets/fonts/flag-icon-css/css/flag-icon.min.css')}}" />
    <!-- END Font icons-->
    <!-- BEGIN Plugins CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('storepanel/robust-assets/css/plugins/sliders/slick/slick.css')}}" />
    <!-- END Plugins CSS-->
    
    <!-- BEGIN Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('storepanel/robust-assets/css/plugins/tables/datatable/dataTables.bootstrap4.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('storepanel/robust-assets/css/plugins/tables/extensions/rowReorder.dataTables.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('storepanel/robust-assets/css/plugins/tables/extensions/responsive.dataTables.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('storepanel/robust-assets/css/plugins/forms/icheck/icheck.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::asset('storepanel/robust-assets/css/plugins/forms/icheck/custom.css')}}" />
    <!-- END Vendor CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" href="{{URL::asset('storepanel/robust-assets/css/app.min.css')}}" />
    {{--<link rel="stylesheet" href="{{URL::asset('datatables/dataTables.bootstrap.css')}}" />--}}
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('storepanel/assets/css/style.css')}}" />
    <!-- END Custom CSS-->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
  <body data-open="click" data-menu="vertical-menu" data-col="content-detached-left-sidebar" class="vertical-layout vertical-menu content-detached-left-sidebar ">
    <!-- START PRELOADER-->

    <div id="preloader-wrapper">
      <div id="loader">
        <div class="line-scale-pulse-out-rapid loader-white">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
          <div></div>
        </div>
      </div>
      <div class="loader-section section-top bg-cyan"></div>
      <div class="loader-section section-bottom bg-cyan"></div>
    </div>

    <!-- END PRELOADER-->

    <!-- navbar-fixed-top-->
    @include('controlPaneladmin.navbar')


    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- main menu-->
    @include('controlPaneladmin.main_menu')
    <!-- / main menu-->

    <div class="robust-content content container-fluid">
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="breadcrumb-wrapper col-xs-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./index.html">Home</a>
              </li>
             
              <li class="breadcrumb-item active">Buyers
              </li>
            </ol>
          </div>
          <div class="content-header-left col-md-6 col-xs-12">
            <h3 class="content-header-title mb-0">Buyers</h3>
          </div>
          
          <div class="content-header-lead col-xs-12 mt-1">
            <p class="lead" />
          </div>
        </div>
        <div class="content-detached ">
          <div class="content-body"><section class="row">
	<div class="col-xs-12">
	    <div class="card">
	        <div class="card-head">
	            <div class="card-header">
	            	<h4 class="card-title">All Stores</h4>
		            <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
        			<div class="heading-elements">
            			<span class="dropdown">
	                        <button id="btnSearchDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" class="btn btn-warning dropdown-toggle dropdown-menu-right btn-sm"><i class="icon-cloud-download3 white"></i></button>
	                        <span aria-labelledby="btnSearchDrop1" class="dropdown-menu mt-1 dropdown-menu-right">
	                            <a href="#" class="dropdown-item"><i class="icon-upload5"></i> Import</a>
	                            <a href="#" class="dropdown-item"><i class="icon-download5"></i> Export</a>
	                            <a href="#" class="dropdown-item"><i class="icon-shuffle3"></i> Find Duplicate</a>
	                        </span>
	                    </span>
<!--             			<button class="btn btn-default btn-sm"><i class="icon-cog3 white"></i></button>
 -->		            </div>
	            </div>
	        </div>
	        <div class="card-body collapse in">
	            <div class="card-block">
	                <!-- Task List table -->
	                <table id="data" class="table table-white-space table-bordered row-grouping display table-responsive no-wrap icheck table-middle">
				        <thead>
                        <tr>
                       <th>#</th>
				       <th>Category Name</th>
                       <th>Icon</th>
                       <th>Image</th>
                       <th>Created</th>
                       <th>Control</th>
                        </tr>
				        </thead>
				        <tbody>
                        </tbody>
				       
				    </table>
				</div>
			</div>
		</div>
	</div>
</section>
          </div>
        </div>
         </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    @include('controlPaneladmin.footer')
    <!-- BEGIN VENDOR JS-->
    <script src="{{URL::asset('storepanel/robust-assets/js/vendors.min.js')}}"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="{{URL::asset('storepanel/robust-assets/js/plugins/tables/jquery.dataTables.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('storepanel/robust-assets/js/plugins/tables/datatable/dataTables.bootstrap4.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('storepanel/robust-assets/js/plugins/tables/datatable/dataTables.responsive.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('storepanel/robust-assets/js/plugins/tables/datatable/dataTables.rowReorder.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('storepanel/robust-assets/js/plugins/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN ROBUST JS-->
    <script src="{{URL::asset('storepanel/robust-assets/js/app.min.js')}}"></script>
    <!-- END ROBUST JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="{{URL::asset('storepanel/robust-assets/js/components/pages/users-contacts.js')}}" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
    <script src="{{URL::asset('datatables/jquery.dataTables.min.js')}}" type="text/javascript"></script>
    <script src="{{URL::asset('datatables/dataTables.bootstrap.min.js') }}" type="text/javascript"></script>


    <script type="text/javascript">


        var lastIdx = null;

        $('#data thead th').each( function () {

            if($(this).index()  <4 ){
                var classname = $(this).index() == 4  ?  'date' : 'dateslash';
                var title = $(this).html();
                $(this).html( '<input type="text" class="' + classname + '" data-value="'+ $(this).index() +'" placeholder=" البحث '+title+'" style="width: 70px"/>'  );
            }


            64
        } );

        var table = $('#data').DataTable({
            processing: true,
            //serverSide: true,
            ajax: '{{ url('/admin/category/data/')}}',
            columns: [
                {data: 'id', name: 'id'},

                {data: 'name', name: 'name'},
                {data: 'icon', name: ''},
                {data: 'image', name: ''},


                {data: 'created_at', name: 'created_at'}

                , {data: 'control', name: ''}


            ],
            "language": {
                "url": "{{ Request::root()  }}/admin/cus/Arabic.json"
            },
            "stateSave": false,
            "responsive": true,
            "order": [[0, 'desc']],
            "pagingType": "full_numbers",
            aLengthMenu: [
                [25, 50, 100, 200, -1],
                [25, 50, 100, 200, "All"]
            ],
            iDisplayLength: 25,
            fixedHeader: true,

            "oTableTools": {
                "aButtons": [


                    {
                        "sExtends": "csv",
                        "sButtonText": "ملف اكسل",
                        "sCharSet": "utf16le"
                    },
                    {
                        "sExtends": "copy",
                        "sButtonText": "نسخ المعلومات",
                    },
                    {
                        "sExtends": "print",
                        "sButtonText": "طباعة",
                        "mColumns": "visible",


                    }
                ],

                "sSwfPath": "{{ Request::root()  }}/admin/cus/copy_csv_xls_pdf.swf"
            },

            "dom": '<"pull-left text-left" T><"pullright" i><"clearfix"><"pull-right text-right col-lg-6" f > <"pull-left text-left" l><"clearfix">rt<"pull-right text-right col-lg-6" pi > <"pull-left text-left" l><"clearfix"> '
            ,initComplete: function ()
            {
                var r = $('#data tfoot tr');
                r.find('th').each(function(){
                    $(this).css('padding', 8);
                });
                $('#data thead').append(r);
                $('#search_0').css('text-align', 'center');
            }

        });

        table.columns().eq(0).each(function(colIdx) {
            $('input', table.column(colIdx).header()).on('keyup change', function() {
                table
                    .column(colIdx)
                    .search(this.value)
                    .draw();
            });




        });



        table.columns().eq(0).each(function(colIdx) {
            $('select', table.column(colIdx).header()).on('change', function() {
                table
                    .column(colIdx)
                    .search(this.value)
                    .draw();
            });

            $('select', table.column(colIdx).header()).on('click', function(e) {
                e.stopPropagation();
            });
        });


        $('#data tbody')
            .on( 'mouseover', 'td', function () {
                var colIdx = table.cell(this).index().column;

                if ( colIdx !== lastIdx ) {
                    $( table.cells().nodes() ).removeClass( 'highlight' );
                    $( table.column( colIdx ).nodes() ).addClass( 'highlight' );
                }
            } )
            .on( 'mouseleave', function () {
                $( table.cells().nodes() ).removeClass( 'highlight' );
            } );




    </script>

  </body>
</html>