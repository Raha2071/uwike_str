<!doctype html>
<html class="no-js " lang="en">

<!-- Mirrored from www.wrraptheme.com/templates/compass/html/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Apr 2021 14:33:11 GMT -->
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <title>Uwike</title>
    <!-- Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="<?=appBaseURL?>/public/assets/images/icon/favicon.png">
    <!-- Custom Css -->
    <link rel="stylesheet" href="<?=appBaseURL?>/public/assets/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=appBaseURL?>/public/assets/assets/css/main.css">
    <link rel="stylesheet" href="<?=appBaseURL?>/public/assets/assets/css/authentication.css">
    <link rel="stylesheet" href="<?=appBaseURL?>/public/assets/assets/css/color_skins.css">
</head>

<body class="theme-cyan authentication sidebar-collapse">
<!-- Navbar -->
<!-- <nav class="navbar navbar-expand-lg fixed-top navbar-transparent">
    <div class="container">        
        <div class="navbar-translate n_logo">
            <a class="navbar-brand" href="#" title="" target="_blank">COMPASS</a>
            <button class="navbar-toggler" type="button">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
            </button>
        </div>
        <div class="navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Search Result</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Follow us on Twitter" href="#" target="_blank">
                        <i class="zmdi zmdi-twitter"></i>
                        <p class="d-lg-none d-xl-none">Twitter</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Like us on Facebook" href="#" target="_blank">
                        <i class="zmdi zmdi-facebook"></i>
                        <p class="d-lg-none d-xl-none">Facebook</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" title="Follow us on Instagram" href="#" target="_blank">                        
                        <i class="zmdi zmdi-instagram"></i>
                        <p class="d-lg-none d-xl-none">Instagram</p>
                    </a>
                </li>                
                <li class="nav-item">
                    <a class="nav-link btn btn-primary btn-round" href="sign-up.html">SIGN UP</a>
                </li>
            </ul>
        </div>
    </div>
</nav> -->
<!-- End Navbar -->
<div class="page-header">  -->
    <div class="container">
        <div class="col-md-12 content-center">
            <div class="card-plain">
                <form class="form" action="" method="post">
                    <div class="header">
                        <div class="logo-container">
                            <img src="<?=appBaseURL?>/public/assets/images/icon/logo.png" alt="">
                        </div>
                        
                        <h5>Log in</h5>
                    </div>
                    <div class="content">                                                
                        <div class="input-group input-lg">
                            <input type="email" class="form-control" name="email" placeholder="Email">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-account-circle"></i>
                            </span>
                        </div>
                        <div class="input-group input-lg">
                            <input type="password" placeholder="Mot de passe" name="password" class="form-control" />
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-lock"></i>
                            </span>
                        </div>
                    </div>
                    <div class="footer text-center">
                        <button type="submit" class="btn l-cyan btn-round btn-lg btn-block waves-effect waves-light">SIGN IN</button>
                        <h6 class="m-t-20"><a href="<?=appBaseURL?>/public/forgot-password" class="link">Forgot Password?</a></h6>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container">
            <!-- <nav>
                <ul>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </nav> -->
            <div class="copyright">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>,
                <span>Designed by <a href="#" target="_blank">Uwike ltd</a></span>
            </div>
        </div>
    </footer>
</div>

<!-- Jquery Core Js -->
<script src="<?=appBaseURL?>/public/assets/assets/bundles/libscripts.bundle.js"></script>
<script src="<?=appBaseURL?>/public/assets/assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script>
//    $(".navbar-toggler").on('click',function() {
//     // $("html").toggleClass("nav-open");
// });
//=============================================================================
$('.form-control').on("focus", function() {
    $(this).parent('.input-group').addClass("input-group-focus");
}).on("blur", function() {
    $(this).parent(".input-group").removeClass("input-group-focus");
});
</script>
</body>

<!-- Mirrored from www.wrraptheme.com/templates/compass/html/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Apr 2021 14:33:11 GMT -->
</html>