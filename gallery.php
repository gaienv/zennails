<?php include('includes/header.php')?>

<body>
   <section class="photo-gallery py-4 py-xl-5">
    <!-- <div class="ambient-player">
  <video id="decoyVideo" class="decoy" preload oncontextmenu="return false;" controlsList="nodownload" controls>
    <source src="assets/img/video/video.mp4" type="video/mp4" controls >
  </video>
  <video id="mainVideo" class="main" controls preload oncontextmenu="return false;"controlsList="nodownload" controls>
    <source src="assets/img/video/video.mp4" type="video/mp4" >
  </video>
</div> -->
        <div class="container">
            <div class="row mb-5" style="padding-top: 74px;">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h1 style="text-align: center;padding-top: 22px;padding-bottom: 22px;color: var(--bs-pink);font-family: Aleo, serif;font-weight: bold;">VIEW OUR GALLERY</h1>
                </div>
                
            </div>
            <div class="row gx-2 gy-2 row-cols-1 row-cols-md-2 row-cols-xl-3 d-sm-flex justify-content-sm-center photos" data-bss-baguettebox="">
                            <?php foreach($gallery as $pic => $photos) { ?>
                         
                          
            <div class="col item" style="width: 430px;height: 240px;padding-top: 30px;margin-bottom:20px;"><a href="<?= $photos?>" style="z-index: 1;height:240px;display:block;"><img class="img-fluid" src="<?= $photos?>" style="z-index: 0;height:240px;width:100%;object-fit:cover;"><iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.zennailslaveen.com%2F&amp;layout=standard&amp;action=recommend&amp;size=small&amp;show_faces=true&amp;share=true" scrolling="no" frameborder="0" allowtransparency="true" allow="encrypted-media" width="100%" height="80" style="z-index: 99999999;"></iframe></a></div>
                <?php } ?>
            </div>
            </div>
                
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <?php include('includes/footer.php')?>
