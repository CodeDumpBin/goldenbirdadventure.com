<?php require_once("header2.php"); ?>
<section class="tzsingle-wrap">
  <h1 class="tz-title-bold-3 margin-bottom55">Contact</h1>
  <div class="p-single-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-bottom55">
          <h2 class="tz-title-1"><?php echo $CONTACT_TITLE2; ?></h2>
          <?php echo $CONTACT_DESCRIPTION_1; ?>
        </div>
        
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div>
          <iframe style="border:none; background:transparent; overflow:hidden; width:100%; height:550px;" src="<?php echo $CONTACT_MAP_LINK; ?>"></iframe>
        </div>
      </div>
      
      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
       <div class="tz-infomation-website">
                        <h3 class="tz-title-contact">ADDRESS</h3>
			<?php echo $CONTACTPAGE_ADDRESS_1; ?>
                        
			<?php if($CONTACTPAGE_ADDRESS_2): ?>
                        
                        <h3 class="tz-title-contact">Alternate Address</h3>
			<?php echo $CONTACTPAGE_ADDRESS_2; ?>
                       <?php endif; ?>
                        <h3 class="tz-title-contact">CONTACT</h3>
                        <ul>
                            <li>Phone: +91 123456789</li>
                            <li>Fax: +91 123456789</li>
                            <li>Email: info@gmail.com</li>
                            <li>Web: http://www.a2ztourntravel.com</li>
                        </ul>
                    </div>
      </div>
      
      
      
      
      </div>
    </div>
    <!--end class container--> 
  </div>
</section>
<?php require_once("footer.php"); ?>
