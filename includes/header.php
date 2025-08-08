<?php require('includes/business_info.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?=$business_info['name']?> - Your Ultimate Destination for Brows, Lashes and Beauty Needs!</title>
    <link rel="icon" href="assets/img/icon.png" type="image/png">
    <meta property="og:type" content="website">
    <meta name="description" content="Looking for expert permanent makeup services in WESTMINSTER, CALIFORNIA? Look no further than <?= $business_info['name']?> and Lashes! Our skilled team of professionals is dedicated to enhancing your natural beauty and giving you the perfect look that lasts. Our permanent makeup services include microblading, lash extensions, and more, all designed to give you a natural and effortless look. At <?= $business_info['name']?> and Lashes, we use only the highest quality products and the latest techniques to ensure that you receive the best results possible. So why wait? Elevate your beauty game with <?= $business_info['name']?> and Lashes' permanent makeup services in Westminster, California today!">
    <meta property="og:image" content="https://www.hannahbrowsandlashes.com/assets/img/WallpaperWebsite.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abril+Fatface&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akaya+Telivigala&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aladin&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aleo&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alfa+Slab+One&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alike+Angular&amp;display=swap">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="assets/css/Features-Cards-icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/popup-promo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
</head>
<body style="overflow: visible;overflow-x: hidden;">
   <?php require('petals.php')?>
    <div class="d-flex align-items-center" style="height: 50px;background: #000000;">
        <div class="container" style="margin: 0px;padding-left: 37px;">
            <div class="row d-flex align-items-center">
                <div class="col-md-12 d-flex align-items-center" style="width: 100%;padding: 0px;"><i class="fas fa-phone-square-alt d-flex flex-column" style="margin-right: 7px;color: rgb(255,255,255);font-size: 27px;"></i>
                    <p class="d-flex flex-column" style="margin: 0px;color: rgb(255,255,255);margin-right: 12px;font-size: 12px;"><?=$business_info['contact']?><br></p><svg xmlns="http://www.w3.org/2000/svg" viewBox="-64 0 512 512" width="1em" height="1em" fill="currentColor" class="d-flex flex-column" style="margin-right: 7px;color: rgb(255,255,255);font-size: 27px;">
                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                        <path d="M168.3 499.2C116.1 435 0 279.4 0 192C0 85.96 85.96 0 192 0C298 0 384 85.96 384 192C384 279.4 267 435 215.7 499.2C203.4 514.5 180.6 514.5 168.3 499.2H168.3zM192 256C227.3 256 256 227.3 256 192C256 156.7 227.3 128 192 128C156.7 128 128 156.7 128 192C128 227.3 156.7 256 192 256z"></path>
                    </svg>
                    <p class="d-flex flex-column" style="margin: 0px;color: rgb(255,255,255);font-size: 12px;"><?=$business_info['address']?><br></p>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center" style="height: 100%;width: 100%;padding: 8px;"><img src="assets/img/logo.png" style="object-fit: contain;width: 33%;height: 153%;" width="490" height="153"></div>
    <nav class="navbar navbar-light navbar-expand-md" style="width: 100%;">
        <div class="container-fluid"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse d-md-flex d-xxl-flex justify-content-md-center justify-content-xxl-center align-items-xxl-center" id="navcol-1">
                <ul class="navbar-nav d-md-flex d-xxl-flex justify-content-md-center" style="width: 100%;">
                    <li class="nav-item d-md-flex d-xxl-flex justify-content-md-center align-items-md-center justify-content-xxl-center" style="font-size: 25px;padding: 14px;width: 92%;"><a class="nav-link active" href=""></a></li>
                    <li class="nav-item d-md-flex d-xxl-flex justify-content-md-center align-items-md-center justify-content-xxl-center" style="font-size: 25px;padding: 15px;width: 100%;"><a class="nav-link active" href="index.php">Home</a></li>
                    <li class="nav-item d-md-flex d-xxl-flex justify-content-md-center align-items-md-center justify-content-xxl-center" style="font-size: 25px;padding: 15px;width: 100%;"><a class="nav-link" href="about.php">About Us</a></li>
                    <li class="nav-item d-md-flex d-xxl-flex justify-content-md-center align-items-md-center justify-content-xxl-center" style="font-size: 25px;padding: 15px;width: 100%;"><a class="nav-link" href="services.php">Services</a></li>
                    <li class="nav-item d-md-flex d-xxl-flex justify-content-md-center align-items-md-center justify-content-xxl-center" style="font-size: 25px;padding: 15px;width: 100%;"><a class="nav-link" href="gallery.php">Gallery</a></li>
                    <li class="nav-item d-md-flex d-xxl-flex justify-content-md-center align-items-md-center justify-content-xxl-center" style="font-size: 25px;padding: 15px;width: 100%;"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                    <li class="nav-item d-md-flex d-xxl-flex justify-content-md-center align-items-md-center justify-content-xxl-center" style="font-size: 25px;padding: 14px;width: 92%;"></li>
                </ul>
            </div>
        </div>
    </nav>
     <button onclick="topFunction()" id="myBtn" title="Go to top">Back to Top</button>
     
     
    <?php require_once 'popup-promo.php' ?>