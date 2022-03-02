<?


function menu($title){

   ?>
   <!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->

        <!--// Meta Tags //-->
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Anaula - Construction Template" />
        <meta name="keywords" content="construction,business,finance,corporate" />
        <!--// Frameworks //-->
        <link rel="stylesheet" href="vendor/css/bootstrap.min.css" />
        <link rel="stylesheet" href="vendor/css/magnific.popup.min.css" />
        <link rel="stylesheet" href="vendor/css/fancybox.min.css" />
        <link rel="stylesheet" href="vendor/css/animate.min.css" />
        <link rel="stylesheet" href="vendor/css/owl.carousel.min.css" />
        <link rel="stylesheet" href="vendor/css/owl.carousel.default.min.css" />
        <link rel="stylesheet" href="fonts/font_awesome/css/all.css" />
        <link rel="stylesheet" href="fonts/flat_icons/flaticon.css" />
        <!--// Style Css //-->
        <link rel="stylesheet" href="css/style.css" />
        <!--// Theme Color Css //-->
        <link rel="stylesheet" href="css/skins/default-color.css" id="theme-color-toggle" />
        <title>
            <?
            if($title == ''){
                $title = 'ProMed.MD - Centrul Medical multispecializat';
            }else{
                $title = 'ProMed.MD - ' . $title;
            }
            echo $title;
            ?>
        </title>
    </head>
    <body>
        <!--// Page Wrapper Start //-->
        <div class="page-wrapper">
            <!--// Header Start //-->
            <header class="header fixed-top" id="header">
                <div id="navbar-top">
                    <div class="container">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-lg-8 nav-info-wrap">
                                <div class="nav-info-box">
                                    <i class="fa fa-envelope"></i>
                                    <a href="">
                                        <span>info@pro-med.md</span>
                                    </a>
                                </div>
                                <div class="nav-info-box">
                                <i class="fa fa-phone"></i>
                                    <a href="tel:+37379990382">
                                        <span>+373 799 90 382</span>
                                    </a>
                                </div>
                                <div class="nav-info-box">
                                    <i class="fa fa-phone"></i>
                                        <a href="tel:+37322719252">
                                            <span>022 71 92 52</span>
                                        </a>
                                    </div>
                            </div>
                            <div class="col-md-4 nav-social-links">
                                <a href="index-particles.html#"><i class="fab fa-facebook-f"></i></a>
                                <a href="index-particles.html#"><i class="fab fa-twitter"></i></a>
                                <a href="index-particles.html#"><i class="fab fa-instagram"></i></a>
                                <a href="index-particles.html#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="nav-menu-wrap">
                    <div class="container">
                        <nav class="navbar bg-white navbar-expand-lg p-0">
                            <a class="navbar-brand" href="index.html">
                                <img src="/img/general/header_logo.png" alt="Logo White" class="img-fluid" />
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fixedNavbar" aria-controls="fixedNavbar" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="togler-icon-inner">
                                    <span class="line-1"></span>
                                    <span class="line-2"></span>
                                    <span class="line-3"></span>
                                </span>
                            </button>
                            <button class="search-btn-mobile" data-toggle="modal" data-target="#headerSearchBar"><i class="fa fa-search"></i></button>
                            <div class="collapse navbar-collapse main-menu justify-content-end" id="fixedNavbar">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/">Principlă</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact-us.html">Operatii oftalmologice</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="contact-us.html">Optica Medicala</a>
                                    </li>
                                    <li class="nav-item navbar-btn-resp d-flex align-items-center">
                                        <a href="index-particles.html#" class="outline-button">Consultare Online</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>
            <!--// Header End  //-->
   <?


}





?>