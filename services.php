<?php include('includes/header.php')?>
<?php include('includes/modal.php')?>
<body style="overflow-x:hidden;">
    <div class="container" style="padding-top: 84px;">
    <h1 style="text-align: center;padding-top: 22px;padding-bottom: 22px;color: var(--bs-pink);font-family: Aleo, serif;font-weight: bold;">OUR SERVICES</h1>
        <div class="row">
        <div class="row gy-2 d-md-flex d-lg-flex d-xl-flex d-xxl-flex justify-content-md-center justify-content-lg-center justify-content-xl-center justify-content-xxl-center">     <?php foreach($services as $service => $info){ ?>
            <div class="col-12 col-md-3 d-flex justify-content-center" style="padding-bottom: 47px;">
          
                <div class="d-xxl-flex flex-column justify-content-xxl-center" style="width: 100%;min-width: 0px;max-width: 306px;"data-aos="fade-up" data-aos-delay="100">
                <?php 
                  if($info['images']){
                    foreach($info['images'] as $img){
                  ?>
                    <div> <a href="#" data-bs-target="#<?= $info[0]?>" data-bs-toggle="modal" style="text-decoration:none;width:100%;height:385px;display:block;"><img src="assets/img/Services/<?= $img?>" style="height: 384.938px;width: 100%;object-fit:cover;" width="306" height="385" /></a> </div><?php }
                    }?>
                   <a href="#" data-bs-target="#<?= $info[0]?>" data-bs-toggle="modal" style="text-decoration:none;">
    <h1 class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex d-xxl-flex flex-column align-items-center align-items-sm-center align-items-md-center align-items-lg-center align-items-xl-center justify-content-xxl-center align-items-xxl-center" style="font-size: 15px;padding-top: 20px;padding-bottom: 10px;background: #ff7999;color: rgb(255,255,255);height: 100%;max-height: 54px;width: 100%;"><?= $service ?> <br><p>(See More)</p></bt></h1>
</a></div> 
                   
                </div> 
                <?php }?>
        </div>
        </div>
    </div>
    <?php include('includes/footer.php')?>
