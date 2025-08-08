<!-- PEDICURE -->
<?php foreach($services as $modal => $info){ ?>
<div id="<?= $info[0]?>" class="modal fade" role="dialog" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="font-size: 27px;font-family: Amaranth, sans-serif;"><span style="color: rgb(138, 180, 248); background-color: rgba(32, 33, 36, 0);">💋</span><?= $modal?></h4><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="background: #f7d7d7;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th style="font-size: 26px;font-family: 'Abhaya Libre', serif;">Service</th>
                                            <th class="text-end" style="font-size: 23px;font-family: 'Abhaya Libre', serif;">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach($info['Menu'] as $item => $details){ ?>
                                        <tr>
<td style="font-family: 'Advent Pro', sans-serif;"><strong><?= $item?></strong><br> <?= $details[1]?></td>
 <td class="text-end" style="font-family: Arimo, sans-serif;font-weight: bold;font-size: 18px;color: rgb(126,78,101);"><?= $details[0]?></td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer"><a class="btn btn-primary" role="button" style="background:#00ce5f;font-size: 20px;font-family: Abel, sans-serif;border:none;" href="tel://<?= $business_info['contact']?>"><span style="color: rgb(138, 180, 248);">📲 </span>Call Us Now<br /></a></div>
        </div>
    </div>
</div>
<?php }?>


 <div class="modal fade" role="dialog" tabindex="-1" id="modal-1" style="z-index: 999999999999999999999999999999999999999999;">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" style="width: 100%;text-align: center;">GALLERY VIEWING</h4><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div>
                        <ul class="nav nav-pills nav-fill" role="tablist">
                            <li class="nav-item" role="presentation"><a class="nav-link active text-bg-light" role="tab" data-bs-toggle="pill" href="#tab-2">Images</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link link-dark text-bg-light" role="tab" data-bs-toggle="pill" href="#tab-4">Videos</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" role="tabpanel" id="tab-2">
                                <section class="photo-gallery py-4 py-xl-5">
                                    <div class="container">
                                        <div class="row mb-5">
                                            <div class="col-md-8 col-xl-6 text-center mx-auto">
                                                <h2>OUR GALLERY</h2>
                                            </div>
                                        </div>
                                        <div class="row gx-2 gy-2 row-cols-1 row-cols-md-2 row-cols-xl-3 photos" data-bss-baguettebox="">
                                            <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"></a></div>
                                            <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"></a></div>
                                            <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"></a></div>
                                            <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"></a></div>
                                            <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"></a></div>
                                            <div class="col item"><a href="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"><img class="img-fluid" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"></a></div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="tab-pane fade d-flex d-xxl-flex flex-column justify-content-center align-items-center justify-content-xxl-center align-items-xxl-center" role="tabpanel" id="tab-4" style="padding: 0px;padding-top: 65px;">
                                <div class="row">
                                    <div class="col d-flex d-xxl-flex justify-content-center justify-content-xxl-center align-items-xxl-center" style="padding-bottom: 15px;"><video width="560" height="315" controls="" style="width: 280px;height: 310px;">
                                            <source type="video/mp4">
                                        </video></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex d-xxl-flex justify-content-center justify-content-xxl-center"><button class="btn btn-light" type="button" data-bs-dismiss="modal">DONE VIEWING</button></div>
            </div>
        </div>
    </div>