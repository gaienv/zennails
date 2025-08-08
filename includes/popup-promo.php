
    <!-- SIDE BANNER -->
<div class="floating_box">
    <div id="sideBannerArea" class="float_banner">
        <ul id="sideBanner">
        <?php foreach($popup as $pop){ ?>
          <li class="promo">
              <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModalCenter" class="banner_wrap"><img src="<?= $pop ?>"></a>
          </li> 
           <li class="promo" style="background:#e771a3;">
              <a href="https://zota.zbook.us/bellissima_booking/"class="banner_wrap"target="_blank" style="
              text-decoration:none;color:white;"><strong>BOOK NOW</strong></a>
          </li> 
        <?php } ?>
        <!-- hide toggle -->
        </ul>
    </div>
</div>

<!-- MODAL -->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">!!Promotion!!</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0" id="popup-promo">
        <?php foreach($popup as $pop){ ?>
              <a href="#"><img src="<?= $pop ?>" class="promo-img" promo-id="<?= $pop ?>" style="width: 100%;border-bottom: 1px solid #ababab;" alt=""></a>
        <?php } ?>
      </div>
      <div class="modal-footer">
        <input type="checkbox" name="donotshow" checked>&nbsp;Do not show again
      </div>
    </div>
  </div>
</div>