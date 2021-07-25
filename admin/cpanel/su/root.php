 
 <?php include '../../core/init.php';?>
 <?php 

$destination="";
    if(isset($_SESSION['destination_tmp'])){
      $destination=trim($_SESSION['destination_tmp']);
    }

 ?>

 
<!DOCTYPE html>
<html>
<head>
	<title>uwike store</title>
	<?php include(root('admin/cpanel/su/includes/head.php'));?>
</head>
<body class="light">
<!-- Overlay For Sidebars -->
<div class="page-container">
    <!-- Left Sidebar -->
    <?php include(root('admin/cpanel/su/includes/left-aside.php'));?>
    
    <div class="main-content">
      <!-- Top Bar -->
      <?php include(root('admin/cpanel/su/includes/nav.php'));?>
      <div class="main-content-inner">
         <?php include(root('admin/cpanel/su/routes.php'));?>
      </div>
      <!-- end main content -->
    </div>
    <footer>
        <div class="footer-area">
            <p>© Copyright 2021. All right reserved. Profuct by  <a href="#">uwike team </a>.</p>
        </div>
      </footer>
</div>

<?php include(root('admin/cpanel/su/includes/footer.php'));?>
</body>
</html>