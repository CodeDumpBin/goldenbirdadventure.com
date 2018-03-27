<section class="tz-lastest-shop theme-white lastest-shop-style">
  <h3 class="tz-title-bold-3"><?php echo $HOME_TITLE_2; ?></h3>
  <?php echo $HOME_descrption_2; ?>
  <div class="container">
    <div class="row">      
      <?php foreach($packages as $package): ?>
      <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 laster-shop-item">
        <div class="laster-thumb"> <img src="<?php echo $package[0]; ?>" alt="travel" class="showOverlay showOverlay4"></div>
        <div class="box1"><h6><a href="#"><?php echo $package[1]; ?></a></h6>
        <small><?php echo $package[2]; ?></small></div>
      </div>
      <?php endforeach; ?>    
    </div>
</section>

<section class="tz-introduce4 theme-orange style-border">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                   <h3 class="tz-title-bold-3"><?php echo $HOME_TITLE_3; ?></h3>
      <div class="col-lg-4 colg-md-4 col-sm-6 col-xs-12">
        <ul class="tz-collection collection-left tz-collection2 no-padding">
          <li>
            <figure class="item-collection"> <img src="images/icons/m_icon_2.png" alt="responsive">
              <figcaption>
                <div class="box2"><h6>Equipments</h6>
                <p>Golden Bird Adventure equipped with worlds best brands gadgets</p></div>
              </figcaption>
            </figure>
          </li>
        </ul>
      </div>
      <div class="col-lg-4 colg-md-4 col-sm-6 col-xs-12">
        <ul class="tz-collection collection-left tz-collection2 no-padding">
          <li>
            <figure class="item-collection"> <img src="images/icons/m_icon_1.png" alt="responsive">
              <figcaption>
                <div class="box2"><h6>Pilot</h6>
                <p>Certifed and Experienced pilots and trainers</p></div>
              </figcaption>
            </figure>
          </li>
        </ul>
      </div>
      <div class="col-lg-4 colg-md-4 col-sm-6 col-xs-12">
        <ul class="tz-collection collection-left tz-collection2 no-padding">
          <li>
            <figure class="item-collection"> <img src="images/icons/m_icon_3.png" alt="responsive">
              <figcaption>
                <div class="box2"><h6>Support Cases</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></div>
              </figcaption>
            </figure>
          </li>
        </ul>
      </div>
    
                </div>
            </div><!--end class row-->
        </div><!--end class container-->
    </section>


</div>


<section class="tz-the-say theme-black">
  <button class="say_prev"><i class="fa fa-angle-left"></i></button>
  <button class="say_next"><i class="fa fa-angle-right "></i></button>
  <div class="container">
    <h3 class="tz-title-bold-3">GALLERY</h3>
    <div class="row">
      <ul class="tz-say-slider">
        <li><a href="images/home-gallery/gallery1.jpg" data-lightbox="example-set" ><img class="tz-avata example-image" src="images/home-gallery/gallery1.jpg" alt="Gallery"/></a></li>
        <li><a href="images/home-gallery/gallery2.jpg" data-lightbox="example-set" ><img class="tz-avata example-image" src="images/home-gallery/gallery2.jpg" alt="Gallery"/></a></li>
        <li><a href="images/home-gallery/gallery3.jpg" data-lightbox="example-set" ><img class="tz-avata example-image" src="images/home-gallery/gallery3.jpg" alt="Gallery"/></a></li>
        <li><a href="images/home-gallery/gallery4.jpg" data-lightbox="example-set" ><img class="tz-avata example-image" src="images/home-gallery/gallery4.jpg" alt="Gallery"/></a></li>
      </ul>
    </div>
    <!--end class row--> 
  </div>
  <!--end class container--> 
</section>
<!--end class tz-the-say-->


