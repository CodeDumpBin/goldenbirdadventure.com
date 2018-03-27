<?php require_once("header2.php"); ?>
<section class="tzsingle-wrap">
  <h1 class="tz-title-bold-3 margin-bottom55"><?php echo $GALLERY_TITLE;?></h1>
  <div class="p-single-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 gallery">
          <h2 class="tz-title-1"><?php echo $GALLERY_TITLE2;?></h2>
          <?php echo $GALLERY_DESCRIPTION_1 ?>
            <?php foreach($GALLERY_IMAGES as $k=>$image): ?>
            <div class="col-lg-4 col-md-6 col-sm-4 col-xs-12">
                <div>
                  <a href="images/home-gallery/<?php echo $image ?>_big.jpg" data-lightbox="example-set" >
                   <img class="example-image" src="images/home-gallery/<?php echo $image; ?>.jpg" alt="<?php echo $GALLERY_IMAGES_ALT[$k]; ?>"/>
                  </a>
                </div>
            </div>            
            <?php endforeach; ?>
        </div>
      </div>
    </div>
    <!--end class container--> 
  </div>
</section>
<?php require_once("footer.php"); ?>
