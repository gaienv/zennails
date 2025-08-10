<?php include('includes/header.php')?>

    <div class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3500" id="carousel-1">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div data-bss-scroll-zoom="true" data-bss-scroll-zoom-speed="1" style="width: 100%;height: 694px;background: url(&quot;assets/img/soft-gel.jpg&quot;) center / cover no-repeat;"></div>
            </div>
            <div class="carousel-item">
                <div data-bss-scroll-zoom="true" data-bss-scroll-zoom-speed="1" style="width: 100%;height: 694px;background: url(&quot;assets/img/2149130359.jpg&quot;) top  / cover no-repeat;"></div>
            </div>
            <div class="carousel-item">
                <div data-bss-scroll-zoom="true" data-bss-scroll-zoom-speed="1" style="width: 100%;height: 694px;background: url(&quot;assets/img/manicure-gel.jpg&quot;) center / cover no-repeat;"></div>
            </div>
        </div>
        <ol class="carousel-indicators">
            <li data-bs-target="#carousel-1" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carousel-1" data-bs-slide-to="1"></li>
            <li data-bs-target="#carousel-1" data-bs-slide-to="2"></li>
        </ol>
    </div>
    <section class="d-flex d-xxl-flex justify-content-center justify-content-xxl-center">
        <div class="container d-flex d-md-flex flex-column align-items-center justify-content-md-center py-4 py-xl-5" style="width: 100%;max-width: none;padding: 0px;">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2>SERVICES</h2>
                </div>
            </div>
            <div class="row gy-4 row-cols-4 row-cols-md-2 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-4 d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center justify-content-xxl-center" style="width: 100%;padding: 0px;padding-bottom: 50px;margin: 0px;max-width: 2089px;">
            <?php foreach ($services as $title => $details): ?>
    <div class="col d-flex d-sm-flex d-xxl-flex flex-column justify-content-center align-items-center align-items-sm-center justify-content-xxl-center align-items-xxl-center"
         style="border-style: none;width: 381px;margin-left: 21px;margin-right: 25px;padding: 14px;">
        <img style="object-fit: cover;width: 100%;margin-bottom: 21px;height: 381px;"
             src="assets/img/Services/<?= htmlspecialchars($details['images'][0]) ?>" width="381" height="381">
        <h4 style="text-align: center;"><?= htmlspecialchars($title) ?></h4>
        <!-- Optional: Include the short description -->
        <!-- <p style="text-align: center;"><span style="color: rgb(110, 118, 126);"><?= htmlspecialchars($details[1]) ?></span></p> -->
    </div>
<?php endforeach; ?>

            </div>
            <div class="d-xxl-flex justify-content-xxl-center" style="padding: 20px;"><a class="btn btn-primary" href="services.php" style="width: 284.5px;height: 74px;font-size: 36px;color: rgb(255,245,4);border-radius: 0px;background: rgb(0,0,0);">See All Services</a></div>
        </div>
    </section>
    <section class="d-flex d-sm-flex d-xxl-flex justify-content-center align-items-center justify-content-sm-center justify-content-xxl-center" style="width: 100%;">
        <div class="row row-cols-sm-1 d-sm-flex" style="width: 100%;margin: 0px;height: 100%;">
        <div class="col-md-6 d-flex d-xl-flex flex-column justify-content-center align-items-center justify-content-xl-center align-items-xl-center" style="padding: 0px;background: linear-gradient(-6deg, #f791a7 0%, #fda8bd 84%, rgb(252,164,186) 100%), #fca9bd;height: 787px;">
                <div class="d-flex d-xxl-flex justify-content-center align-items-center justify-content-xxl-center align-items-xxl-center" data-aos="fade-left" data-aos-duration="400" data-aos-delay="200" style="height: 787px;padding: 0px;width: 100%;background: url(&quot;assets/img/imag1.jpeg&quot;) top / cover no-repeat;"></div>
            </div>
            <div class="col-md-6 d-flex d-xl-flex flex-column justify-content-center align-items-center justify-content-xl-center align-items-xl-center" style="padding: 0px;background: #3b3b3b;height: 787px;">
                <div class="d-flex d-xxl-flex flex-column justify-content-center align-items-center justify-content-xxl-center align-items-xxl-center" style="height: 787px;padding: 0px;width: 100%;">
                    <p class="d-flex justify-content-center align-items-center"><strong><span style="color: rgb(249, 249, 249);">BUSINESS HOURS:</span></strong><br><br></p>
                    <p class="text-white d-flex flex-column justify-content-center align-items-center" style="font-size: 18px;"><?=$business_info['hours']?></p>
                    <p class="d-flex justify-content-center align-items-center" style="height: 36px;margin: 0px;width: 310.2px;text-align: center;"><strong><span style="color: rgb(255, 255, 255); background-color: rgba(59, 59, 59, 0);"><?=$business_info['address']?></span></strong><br><br><br></p>
                    <p class="d-flex justify-content-center align-items-center" style="height: 36px;"><br><strong><span style="color: rgb(255, 255, 255); background-color: rgba(59, 59, 59, 0);"><?=$business_info['contact']?></span></strong><br><br><br><br></p>
                </div>
            </div>
            <div class="col-md-6 d-flex d-xl-flex flex-column justify-content-center align-items-center justify-content-xl-center align-items-xl-center" style="padding: 0px;background: #3b3b3b;height: 787px;">
                <div class="d-flex d-xxl-flex flex-column justify-content-center align-items-center justify-content-xxl-center align-items-xxl-center" style="height: 787px;padding: 0px;width: 100%;background: #ffffff;">
                    <p class="d-flex flex-column justify-content-center align-items-center" style="color: rgb(10,10,10);width: 100%;font-size: 21px;padding: 36px;"><span style="color: rgb(0, 0, 0); background-color: rgba(243, 243, 243, 0);">Founded by <?=$business_info['name'];?>, who has been in the nail salon industry for over 5 years, <?=$business_info['name'];?> strives to make each client's experience a memorable one.</span><br><span style="color: rgb(0, 0, 0); background-color: rgba(243, 243, 243, 0);">We are committed to providing high-quality services and top of the line products.</span></p>
                    <a class="d-flex flex-column text-decoration-none" style="color: rgb(10,10,10);width: 100%;font-size: 21px;text-align: center;" href="<?=$business_info['booking'];?>" ><strong><span style="color: rgb(252, 160, 181); background-color: rgba(243, 243, 243, 0);">Call on <?=$business_info['name'];?> Pedicure &amp; Manicure</span></strong></a>
                </div>
            </div>
            <div class="col-md-6 d-flex d-xl-flex flex-column justify-content-center align-items-center justify-content-xl-center align-items-xl-center" style="padding: 0px;background: linear-gradient(-6deg, #f791a7 0%, #fda8bd 84%, rgb(252,164,186) 100%), #fca9bd;height: 787px;">
                <div class="d-flex d-xxl-flex justify-content-center align-items-center justify-content-xxl-center align-items-xxl-center" data-aos="fade-left" data-aos-duration="400" data-aos-delay="200" style="height: 787px;padding: 0px;width: 100%;background: url(&quot;assets/img/shutterstock_1522879595.jpg&quot;) center / cover no-repeat;"></div>
            </div>
        </div>
    </section>
    <section class="d-xxl-flex justify-content-xxl-center photo-gallery" style="position: static;padding-bottom: 129px;width: 100%;">
        <div class="container-fluid d-sm-flex d-xxl-flex flex-column justify-content-sm-center align-items-sm-center justify-content-xxl-center align-items-xxl-center" style="width: 100%;padding-top: 83px;">
            <div class="row g-0 mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto" style="width: 100%;">
                    <h1 style="width: 100%;color: #ff419f;font-family: Aleo, serif;"><strong>Gallery</strong></h1>
                </div>
            </div>
            <div class="row g-0 row-cols-4 row-cols-sm-1 row-cols-md-4 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-4 d-flex d-xxl-flex justify-content-center align-items-center justify-content-xxl-center align-items-xxl-center photos" data-bss-baguettebox="" style="width: 100%;overflow: visible;max-width: 1390px;">
            <?php
$gallery = glob('assets/img/gallery/*.*');
$gallery = array_slice($gallery, 0, 8); // keep only first 8 files
?>

<?php foreach ($gallery as $index => $photo) { ?>
    <div class="col item" style="width: 332.663px;max-width: none;height: 332.663px;">
        <a href="<?php echo $photo; ?>">
            <img 
                class="img-fluid" 
                data-aos="<?php echo $index % 2 === 0 ? 'flip-up' : 'flip-down'; ?>" 
                data-aos-duration="<?php echo $index % 2 === 0 ? '400' : '500'; ?>" 
                data-aos-delay="<?php echo $index % 2 === 0 ? '400' : '200'; ?>" 
                src="<?php echo $photo; ?>" 
                style="width: 100%;height: 100%;max-width: none;object-fit:cover;object-position:center;"
            >
        </a>
    </div>
<?php } ?>


            </div>
        </div>
    </section>
    <?php include('includes/footer.php')?>