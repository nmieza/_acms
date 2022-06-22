<html lang="en" style="height: auto;"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>Mobile Comparison Website</title>
    <link rel="icon" href="http://localhost/_acms/uploads/logo-1645494239.jpg?v=1645494239">
    <!-- Google Font: Source Sans Pro -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://localhost/_acms/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="http://localhost/_acms/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
      <!-- DataTables -->
  <link rel="stylesheet" href="http://localhost/_acms/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="http://localhost/_acms/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="http://localhost/_acms/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
   <!-- Select2 -->
  <link rel="stylesheet" href="http://localhost/_acms/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="http://localhost/_acms/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="http://localhost/_acms/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="http://localhost/_acms/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="http://localhost/_acms/dist/css/adminlte.css">
    <link rel="stylesheet" href="http://localhost/_acms/dist/css/custom.css">
    <link rel="stylesheet" href="http://localhost/_acms/assets/css/styles.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="http://localhost/_acms/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="http://localhost/_acms/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="http://localhost/_acms/plugins/summernote/summernote-bs4.min.css">
     <!-- SweetAlert2 -->
  <link rel="stylesheet" href="http://localhost/_acms/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <style type="text/css">/* Chart.js */
      @keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}
    </style>

     <!-- jQuery -->
    <script src="http://localhost/_acms/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="http://localhost/_acms/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="http://localhost/_acms/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <script src="http://localhost/_acms/plugins/toastr/toastr.min.js"></script>
    <script>
        var _base_url_ = 'http://localhost/_acms/';
    </script>
    <script src="http://localhost/_acms/dist/js/script.js"></script>
    <script src="http://localhost/_acms/assets/js/scripts.js"></script>
    <style>
    #main-header{
        position:relative;
        background: rgb(0,0,0)!important;
        background: radial-gradient(circle, rgba(0,0,0,0.48503151260504207) 22%, rgba(0,0,0,0.39539565826330536) 49%, rgba(0,212,255,0) 100%)!important;
    }
    #main-header:before{
        content:"";
        position:absolute;
        top:0;
        left:0;
        width:100%;
        height:100%;
        background-image:url(http://localhost/_acms/uploads/cover-1645494240.jpg?v=1645494240);
        background-repeat: no-repeat;
        background-size: cover;
        filter: drop-shadow(0px 7px 6px black);
        z-index:-1;
    }

 </style>
  </head><body style="height: auto;">
<nav class="navbar navbar-expand-lg navbar-dark bg-gradient-primary">
            <div class="container px-4 px-lg-5 ">
                <button class="navbar-toggler btn btn-sm" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <a class="navbar-brand" href="./">
                <img src="http://localhost/_acms/uploads/logo-1645494239.jpg?v=1645494239" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                AIR CARGO MANAGEMENT SYSTEM                </a>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link text-white" aria-current="page" href="./">Home</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="./?p=trace_form">Trace Shipment</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="./?p=about">About</a></li>
                    </ul>
                </div>
                <div>
                  <a href="index.php" class="text-decoration-none text-reset"><b>Admin Panel</b></a>
                </div>
            </div>
        </nav>
<script>
  $(function(){
    $('#login-btn').click(function(){
      uni_modal("","login.php")
    })
    $('#navbarResponsive').on('show.bs.collapse', function () {
        $('#mainNav').addClass('navbar-shrink')
    })
    $('#navbarResponsive').on('hidden.bs.collapse', function () {
        if($('body').offset.top == 0)
          $('#mainNav').removeClass('navbar-shrink')
    })
  })

  $('#search-form').submit(function(e){
    e.preventDefault()
     var sTxt = $('[name="search"]').val()
     if(sTxt != '')
      location.href = './?p=products&search='+sTxt;
  })
</script>
<style>
    .carousel-item>img{
        object-fit:fill !important;
    }
    #carouselExampleControls .carousel-inner{
        height:280px !important;
    }
    .mob-img{
        width:50px;
        height:100px;
        object-fit:scale-down;
        object-position:center center;
    }
    .mob-img-selected{
        width:50px;
        height:65px;
        object-fit:scale-down;
        object-position:center center;
    }
    span.select2-selection.select2-selection--single {
        height: auto !important;
    }
    span.select2-selection__arrow {
        top: 20% !important;
    }
</style>
<section class="py-0">
    <div class="container">
        <div class="col-lg-12 py-2">
            <div class="row">
                <div class="col-md-12">
                    <div id="carouselExampleControls" class="carousel slide bg-dark" data-ride="carousel" data-interval="2500">
                        <div class="carousel-inner">
                                                        <div class="carousel-item h-100">
                                <img src="http://localhost/_acms/uploads/banner/wallpaper1.jpg" class="d-block w-100  h-100" alt="wallpaper1.jpg">
                            </div>
                                                        <div class="carousel-item h-100">
                                <img src="http://localhost/_acms/uploads/banner/wallpaper2.jpg" class="d-block w-100  h-100" alt="wallpaper2.jpg">
                            </div>
                                                        <div class="carousel-item h-100">
                                <img src="http://localhost/_acms/uploads/banner/wallpaper3.jpg" class="d-block w-100  h-100" alt="wallpaper3.jpg">
                            </div>
                                                        <div class="carousel-item h-100 active">
                                <img src="http://localhost/_acms/uploads/banner/wallpaper4.jpg" class="d-block w-100  h-100" alt="wallpaper4.jpg">
                            </div>
                                                                                </div>
                        <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                        </div>
                </div>
            </div>
            <div class="container px-4 px-lg-5 mt-5">
                <form action="" id="trace-frm">
                    <div class="card card-outline card-primary rounded-0 shadow">
                        <div class="card-body">
                            <fieldset>
                                <legend>Trace your Cargo</legend>
                                <div class="row align-items-end">
                                    <div class="form-group col-md-6">
                                        <label for="mobile1" class="control-label">Shipment Reference Code</label>
                                        <input type="text" class="form-control form-control-lg rounded-0" name="ref_code" required="">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <button class="btn btn-default bg-gradient-primary btn-flat btn-lg text-light w-50">Trace Now</button>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </form>
                <div class="clear-fix mb-3"></div>

            </div>
    </div>
    </div>
</section>
<script>
    $(function(){
        
        $('#trace-frm').submit(function(e){
            e.preventDefault();
            location.href="./?p=trace&"+$(this).serialize();
        })
    })

</script><script>
  $(document).ready(function(){
    $('#p_use').click(function(){
      uni_modal("Privacy Policy","policy.php","mid-large")
    })
     window.viewer_modal = function($src = ''){
      start_loader()
      var t = $src.split('.')
      t = t[1]
      if(t =='mp4'){
        var view = $("<video src='"+$src+"' controls autoplay></video>")
      }else{
        var view = $("<img src='"+$src+"' />")
      }
      $('#viewer_modal .modal-content video,#viewer_modal .modal-content img').remove()
      $('#viewer_modal .modal-content').append(view)
      $('#viewer_modal').modal({
              show:true,
              backdrop:'static',
              keyboard:false,
              focus:true
            })
            end_loader()  

  }
    window.uni_modal = function($title = '' , $url='',$size=""){
        start_loader()
        $.ajax({
            url:$url,
            error:err=>{
                console.log()
                alert("An error occured")
            },
            success:function(resp){
                if(resp){
                    $('#uni_modal .modal-title').html($title)
                    $('#uni_modal .modal-body').html(resp)
                    if($size != ''){
                        $('#uni_modal .modal-dialog').addClass($size+'  modal-dialog-centered')
                    }else{
                        $('#uni_modal .modal-dialog').removeAttr("class").addClass("modal-dialog modal-md modal-dialog-centered")
                    }
                    $('#uni_modal').modal({
                      show:true,
                      backdrop:'static',
                      keyboard:false,
                      focus:true
                    })
                    end_loader()
                }
            }
        })
    }
    window._conf = function($msg='',$func='',$params = []){
       $('#confirm_modal #confirm').attr('onclick',$func+"("+$params.join(',')+")")
       $('#confirm_modal .modal-body').html($msg)
       $('#confirm_modal').modal('show')
    }
  })
</script>
<!-- Footer-->
<footer class="py-4 bg-gradient-primary">
            <div class="container">
              <p class="m-0 text-center text-white">Copyright © MCW - PHP 2021</p>
              <p class="m-0 text-center text-white">Developed By: <a href="mailto:oretnom23@gmail.com">oretnom23</a></p>
          </div>
        </footer>

   
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="http://localhost/_acms/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="http://localhost/_acms/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="http://localhost/acms/plugins/sparklines/sparkline.js"></script>
    <!-- Select2 -->
    <script src="http://localhost/_acms/plugins/select2/js/select2.full.min.js"></script>
    <!-- JQVMap -->
    <script src="http://localhost/_acms/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="http://localhost/_acms/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="http://localhost/_acms/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="http://localhost/_acms/plugins/moment/moment.min.js"></script>
    <script src="http://localhost/_acms/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="http://localhost/_acms/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="http://localhost/_acms/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="http://localhost/_acms/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="http://localhost/_acms/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="http://localhost/_acms/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="http://localhost/_acms/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- overlayScrollbars -->
    <!-- <script src="http://localhost/_acms/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script> -->
    <!-- AdminLTE App -->
    <script src="http://localhost/_acms/dist/js/adminlte.js"></script>
    <div class="daterangepicker ltr show-ranges opensright">
      <div class="ranges">
        <ul>
          <li data-range-key="Today">Today</li>
          <li data-range-key="Yesterday">Yesterday</li>
          <li data-range-key="Last 7 Days">Last 7 Days</li>
          <li data-range-key="Last 30 Days">Last 30 Days</li>
          <li data-range-key="This Month">This Month</li>
          <li data-range-key="Last Month">Last Month</li>
          <li data-range-key="Custom Range">Custom Range</li>
        </ul>
      </div>
      <div class="drp-calendar left">
        <div class="calendar-table"></div>
        <div class="calendar-time" style="display: none;"></div>
      </div>
      <div class="drp-calendar right">
        <div class="calendar-table"></div>
        <div class="calendar-time" style="display: none;"></div>
      </div>
      <div class="drp-buttons"><span class="drp-selected"></span><button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button><button class="applyBtn btn btn-sm btn-primary" disabled="disabled" type="button">Apply</button> </div>
    </div>
    <div class="jqvmap-label" style="display: none; left: 1093.83px; top: 394.361px;">Idaho</div>
  <div class="modal fade" id="uni_modal" role="dialog">
    <div class="modal-dialog   rounded-0 modal-md modal-dialog-centered" role="document">
      <div class="modal-content  rounded-0">
        <div class="modal-header  rounded-0">
        <h5 class="modal-title"></h5>
      </div>
      <div class="modal-body  rounded-0">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-flat btn-primary" id="submit" onclick="$('#uni_modal form').submit()">Save</button>
        <button type="button" class="btn btn-sm btn-flat btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="uni_modal_right" role="dialog">
    <div class="modal-dialog  rounded-0 modal-full-height  modal-md" role="document">
      <div class="modal-content rounded-0">
        <div class="modal-header rounded-0">
        <h5 class="modal-title"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span class="fa fa-arrow-right"></span>
        </button>
      </div>
      <div class="modal-body rounded-0">
      </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="viewer_modal" role="dialog">
    <div class="modal-dialog modal-md" role="document">
      <div class="modal-content rounded-0">
              <button type="button" class="btn-close" data-dismiss="modal"><span class="fa fa-times"></span></button>
              <img src="" alt="">
      </div>
    </div>
  </div>
  <div class="modal fade" id="confirm_modal" role="dialog">
    <div class="modal-dialog modal-md modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Confirmation</h5>
      </div>
      <div class="modal-body">
        <div id="delete_content"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-sm btn-flat btn-primary" id="confirm" onclick="">Continue</button>
        <button type="button" class="btn btn-sm btn-flat btn-secondary" data-dismiss="modal">Close</button>
      </div>
      </div>
    </div>
  </div>


</body></html>