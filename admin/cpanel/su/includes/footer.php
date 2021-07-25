<!-- offset area end -->
<!-- jquery latest version -->
<script src="<?php linkto('admin/assets/js/vendor/jquery-2.2.4.min.js'); ?>"></script> 

<!-- bootstrap 4 js -->
<script src="<?php linkto('admin/assets/js/popper.min.js'); ?>"></script> 
<script src="<?php linkto('admin/assets/js/bootstrap.min.js'); ?>"></script>
<script src="<?php linkto('admin/assets/js/owl.carousel.min.js'); ?>"></script>
<script src="<?php linkto('admin/assets/js/metisMenu.min.js'); ?>"></script>
<script src="<?php linkto('admin/assets/js/jquery.slimscroll.min.js'); ?>"></script>
<script src="<?php linkto('admin/assets/js/jquery.slicknav.min.js'); ?>"></script>

 <!-- start chart js -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
 <!-- start highcharts js -->
 <script src="https://code.highcharts.com/highcharts.js"></script>
 <!-- start zingchart js -->
 <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
 <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
 </script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
 <!-- all line chart activation -->
 <script src="<?php linkto('admin/assets/js/line-chart.js'); ?>"></script> 
 <!-- all bar chart activation -->
 <script src="<?php linkto('admin/assets/js/bar-chart.js'); ?>"></script>  
 <!-- all pie chart -->  
 <script src="<?php linkto('admin/assets/js/pie-chart.js'); ?>"></script> 
 <!-- others plugins -->  
 <script src="<?php linkto('admin/assets/datatable/js/jquery.dataTables.js'); ?>"></script>
 <script src="<?php linkto('admin/assets/datatable/js/jquery.dataTables.min.js'); ?>"></script>
 <script src="<?php linkto('admin/assets/datatable/js/dataTables.bootstrap4.min.js'); ?>"></script>
<script src="<?php linkto('admin/assets/datatable/js/dataTables.responsive.min.js'); ?>"></script>
<script src="<?php linkto('admin/assets/datatable/js/responsive.bootstrap.min.js'); ?>"></script>
 <script src="<?php linkto('admin/assets/js/plugins.js'); ?>"></script>  
 <script src="<?php linkto('admin/assets/js/scripts.js'); ?>"></script>   
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
 