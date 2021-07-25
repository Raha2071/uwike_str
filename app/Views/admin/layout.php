
<html>
<head>
	<title>uwike|<?=$content;?></title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?=appBaseURL?>/public/assets/images/icon/favicon.png">

    <!-- css files -->
    <link rel="stylesheet" href="<?=appBaseURL?>/public/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=appBaseURL?>/public/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=appBaseURL?>/public/assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?=appBaseURL?>/public/assets/css/metisMenu.css">
    <link rel="stylesheet" href="<?=appBaseURL?>/public/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=appBaseURL?>/public/assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" type="text/css" href="<?=appBaseURL?>/public/assets/datatable/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="<?=appBaseURL?>/public/assets/datatable/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?=appBaseURL?>/public/assets/datatable/css/responsive.bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="<?=appBaseURL?>/public/assets/datatable/css/responsive.jqueryui.min.css"> -->
    <link rel="stylesheet" href="<?=appBaseURL?>/public/assets/css/typography.css">
    <link rel="stylesheet" href="<?=appBaseURL?>/public/assets/css/default-css.css">
    <link rel="stylesheet" href="<?=appBaseURL?>/public/assets/css/styles.css">
    <link rel="stylesheet" href="<?=appBaseURL?>/public/assets/css/responsive.css">
    <link rel="stylesheet" href="<?=appBaseURL?>/public/assets/css/responsive.css">
    <link rel="stylesheet" href="<?=appBaseURL?>/public/assets/css/custom.css">
    <!-- modernizr css -->
    <script src="<?=appBaseURL?>/public/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- sidebar menu area start -->
    <link href="<?=appBaseURL?>/public/assets/plugins/sweetalert/sweetalert.css" rel="stylesheet" type="text/css"/>

</head>
<body class="light">
<!-- Overlay For Sidebars -->
    <div class="page-container">
    <!-- Left Sidebar -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href=""><img src="<?=appBaseURL?>/public/assets/images/icon/logo.png" alt="uwike logo"></a>
                </div>
            </div>
            <div class=" clearfix">
                <div class="user-profile">
                    <a href="#">
                        <img class="avatar user-thumb" src="<?=appBaseURL?>/public/assets/images/author/placeholder.jpg" alt="avatar">
                    </a>
                    <div class="admin-detail  mt-2">
                        <h4>willz cloh</h4>
                        <small>Uwike admin</small>                        
                    </div>
                    <div class="admin-details-icons">
                         <a href="#" title="Events" class=" waves-effect waves-block"><i class="fa fa-cog"></i></a>
                        <a href="#" title="Inbox" class=" waves-effect waves-block"><i class="fa fa-user"></i></a>
                        <a href="#" title="Contact List" class=" waves-effect waves-block"><i class="fa fa-envelope"></i></a>
                        <a href="#" title="Chat App" class=" waves-effect waves-block"><i class="fa fa-chrome"></i></a>
                        <a href="#" title="Sign out" class=" waves-effect waves-block"><i class="fa fa-spinner"></i></a>
                    </div>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li class="active">
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>Accounts</span></a>
                                <ul class="collapse">
                                    <li><a href="<?=appBaseURL;?>/dashboard"> <i class="fa fa-long-arrow-right"></i>Administrators</a></li>
                                    <li><a href=""><i class="fa fa-long-arrow-right"></i> Shop's</a></li>
                                    <li><a href=""><i class="fa fa-long-arrow-right"></i> Cathegorie</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Sidebar
                                        Types
                                    </span></a>
                                <ul class="collapse">
                                    <li><a href="index.html"> <i class="fa fa-long-arrow-right"></i> Left Sidebar</a></li>
                                    <li><a href="index3-horizontalmenu.html"><i class="fa fa-long-arrow-right"></i> Horizontal Sidebar</a></li>
                                </ul>
                            </li>
                           
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-slice"></i><span>icons</span></a>
                                <ul class="collapse">
                                    <li><a href="fontawesome.html"><i class="fa fa-long-arrow-right"></i> fontawesome icons</a></li>
                                    <li><a href="themify.html"><i class="fa fa-long-arrow-right"></i> themify icons</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>Tables</span></a>
                                <ul class="collapse">
                                    <li><a href="table-basic.html"><i class="fa fa-long-arrow-right"></i> basic table</a></li>
                                    <li><a href="table-layout.html"><i class="fa fa-long-arrow-right"></i> table layout</a></li>
                                    <li><a href="datatable.html"><i class="fa fa-long-arrow-right"></i> datatable</a></li>
                                </ul>
                            </li>
                            
                            
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- header area start -->
        <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <!-- <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div> -->
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li id="full-view"><i class="ti-fullscreen"></i></li>
                            <li id="full-view-exit"><i class="ti-zoom-out"></i></li>
                            <li class="dropdown">
                                <i class="ti-bell dropdown-toggle" data-toggle="dropdown">
                                    <span>2</span>
                                </i>
                                <div class="dropdown-menu bell-notify-box notify-box">
                                    <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                    <div class="nofity-list">
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                            <div class="notify-text">
                                                <p>New Commetns On Post</p>
                                                <span>30 Seconds ago</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                            <div class="notify-text">
                                                <p>Some special like you</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-comments-smiley btn-info"></i></div>
                                            <div class="notify-text">
                                                <p>New Commetns On Post</p>
                                                <span>30 Seconds ago</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-primary"></i></div>
                                            <div class="notify-text">
                                                <p>Some special like you</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb"><i class="ti-key btn-danger"></i></div>
                                            <div class="notify-text">
                                                <p>You have Changed Your Password</p>
                                                <span>Just Now</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown">
                                <i class="fa fa-envelope-o dropdown-toggle" data-toggle="dropdown"><span>3</span></i>
                                <div class="dropdown-menu notify-box nt-enveloper-box">
                                    <span class="notify-title">You have 3 new notifications <a href="#">view all</a></span>
                                    <div class="nofity-list">
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="<?=appBaseURL?>/public/assets/images/author/author-img1.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="<?=appBaseURL?>/public/assets/images/author/author-img2.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">When you can connect with me...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="<?=appBaseURL?>/public/assets/images/author/author-img3.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">I missed you so much...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="<?=appBaseURL?>/public/assets/images/author/author-img4.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Your product is completely Ready...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="<?=appBaseURL?>/public/assets/images/author/author-img2.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="<?=appBaseURL?>/public/assets/images/author/author-img1.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                        <a href="#" class="notify-item">
                                            <div class="notify-thumb">
                                                <img src="<?=appBaseURL?>/public/assets/images/author/author-img3.jpg" alt="image">
                                            </div>
                                            <div class="notify-text">
                                                <p>Aglae Mayer</p>
                                                <span class="msg">Hey I am waiting for you...</span>
                                                <span>3:15 PM</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li class="settings-btn">
                                <a class="fa fa-power-off" href=""></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                        <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left dash-h4">Dashboard<br>
                                <small class="text-muted" style="font-size: 14px;">Welcome to uwike</small>
                            </h4>
                            <ul class="breadcrumbs pull-right">
                                <li><a href="#"><i class="fa fa-home"></i> Uwike</a></li>
                                <li><span>kkkk</span></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content">
                <div class="main-content-inner">
                    <?php echo request($content);?>
                </div>
                </div>
             </div>
            <!-- offset area end -->
<!-- jquery latest version -->
        <footer>
            <div class="footer-area">
                <p>© Copyright 2021. All right reserved. Profuct by  <a href="#">uwike team </a>.</p>
            </div>
      </footer>
    </div>
</body>
<script src="<?=appBaseURL?>/public/assets/js/vendor/jquery-2.2.4.min.js"></script> 

<!-- bootstrap 4 js -->
<script src="<?=appBaseURL?>/public/assets/js/popper.min.js"></script> 
<script src="<?=appBaseURL?>/public/assets/js/bootstrap.min.js"></script>
<script src="<?=appBaseURL?>/public/assets/js/owl.carousel.min.js"></script>
<script src="<?=appBaseURL?>/public/assets/js/metisMenu.min.js"></script>
<script src="<?=appBaseURL?>/public/assets/js/jquery.slimscroll.min.js"></script>
<script src="<?=appBaseURL?>/public/assets/js/jquery.slicknav.min.js"></script>

 <!-- start chart js -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
 <!-- start highcharts js -->
 <script src="https://code.highcharts.com/highcharts.js"></script>
 <!-- start zingchart js -->
 <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
 <script>
    zingchart.MODULESDIR ="https://cdn.zingchart.com/modules/";
    ZC.LICENSE =["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
 </script>

 <!-- all line chart activation -->
 <script src="<?=appBaseURL?>/public/assets/js/line-chart.js"></script> 
 <!-- all bar chart activation -->
 <script src="<?=appBaseURL?>/public/assets/js/bar-chart.js"></script>  
 <!-- all pie chart -->  
 <script src="<?=appBaseURL?>/public/assets/js/pie-chart.js"></script> 
 <!-- others plugins -->  
 <script src="<?=appBaseURL?>/public/assets/datatable/js/jquery.dataTables.js"></script>
 <script src="<?=appBaseURL?>/public/assets/datatable/js/jquery.dataTables.min.js"></script>
 <script src="<?=appBaseURL?>/public/assets/datatable/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=appBaseURL?>/public/assets/datatable/js/dataTables.responsive.min.js"></script>
<script src="<?=appBaseURL?>/public/assets/datatable/js/responsive.bootstrap.min.js"></script>
<script src="<?=appBaseURL?>/public/assets/js/pages/tables/jquery-datatable.js"></script>
 <script src="<?=appBaseURL?>/public/assets/js/plugins.js"></script>  
 <script src="<?=appBaseURL?>/public/assets/js/scripts.js"></script> 
 <script src="<?=appBaseURL?>/public/assets/plugins/sweetalert/sweetalert.min.js"></script>
 <script>
    function done(value)
        {
        swal({
        title: "Oops!!",
        text:value ,
        type: "success",
        timer: 3000,
        closeOnConfirm:false,
        confirmButtonClass: "btn-info",
        confirmButtonText: "OK",
        closeOnConfirm: true

        },function(){ 
            location.reload();
        });
        }

    function wrong(value)
        {
        swal({
        title: "Oops!!",
        text:value ,
        type: "error",
        timer: 3000,
        closeOnConfirm:false,
        confirmButtonClass: "btn-info",
        confirmButtonText: "Try again",
        closeOnConfirm: true

        });
        }
 </script> 
</html>
 