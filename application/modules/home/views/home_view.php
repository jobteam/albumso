<div class="slider-bg"><!-- slider start-->
    <div id="slider" class="owl-carousel owl-theme slider">
        <div class="item"><img src="<?php echo base_url(); ?>public_html/images/hero-image-3.jpg" alt="Wedding couple just married"></div>
        <div class="item"><img src="<?php echo base_url(); ?>public_html/images/hero-image-2.jpg" alt="Wedding couple just married"></div>
        <div class="item"><img src="<?php echo base_url(); ?>public_html/images/hero-image.jpg" alt="Wedding couple just married"></div>
    </div>
    <div class="find-section"><!-- Find search section-->
        <div class="container">
            <div class="row">
                <div class="col-md-offset-1 col-md-10 finder-block">
                    <div class="finder-caption">
                        <h1>Find your perfect Wedding Provider</h1>
                        <p>Over <strong>1200+ Wedding Provider </strong>for you special date &amp; Find the perfect venue &amp; save you date.</p>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.Find search section-->
</div>
<!-- slider end-->

<div class="tp-section spacer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 tp-title-center">
                <h1>Featured Wedding Provider</h1>
            </div>
        </div>
        <div class="row ">
            <?php foreach ($lstK100 as $k100) :  ?>
            <div class="col-md-4 vendor-box"><!-- venue box start-->
                <div class="vendor-image"><!-- venue pic --> 
                    <a href="<?php echo base_url() ?>provider/detail/<?php echo $k100['_id']; ?>"><img src="<?php echo base_url(); ?>public_html/images/vendor-1.jpg" alt="wedding venue" class="img-responsive"></a>
                    <div class="feature-label"></div>
                    <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
                </div>
                <!-- /.venue pic -->
                <div class="vendor-detail"><!-- venue details -->
                    <div class="caption"><!-- caption -->
                        <h2><a href="<?php echo base_url() ?>provider/detail/<?php echo $k100['_id']; ?>" class="title"><?php echo $k100['KV101']; ?></a></h2>
                        <p class="location"><i class="fa fa-map-marker"></i> Quận 12, TP. Hồ Chí Minh</p>
                        <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                    </div>
                    <!-- /.caption -->
                    <div class="vendor-price">
                        <div class="number-product">Gói sản phẩm: 5</div>
                    </div>
                </div>
                <!-- venue details --> 
            </div>
             <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="spacer top-location"><!-- top location -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 tp-title-center">
                <h1>Top Wedding Locations</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 location-block"><!-- location block -->
                <div class="vendor-image"><a href="#"><img src="<?php echo base_url(); ?>public_html/images/location-pic.jpg" alt="" class="img-responsive"></a> <a href="#" class="venue-lable"><span class="label label-default">New York City</span></a> </div>
            </div>
            <!-- /.location block -->
            <div class="col-md-4 location-block"> <!-- location block -->
                <div class="vendor-image"><a href="#"><img src="<?php echo base_url(); ?>public_html/images/location-pic-2.jpg" alt="" class="img-responsive"></a> <a href="#" class="venue-lable"><span class="label label-default">Sydney</span></a> </div>
            </div>
            <!-- /.location block -->
            <div class="col-md-4 location-block"> <!-- location block -->
                <div class="vendor-image"> <a href="#"><img src="<?php echo base_url(); ?>public_html/images/location-pic-3.jpg" alt="" class="img-responsive"></a> <a href="#" class="venue-lable"><span class="label label-default">Russia</span></a> </div>
            </div>
            <!-- /.location block -->
            <div class="col-md-8 location-block"><!-- location block -->
                <div class="vendor-image"> <a href="#"><img src="<?php echo base_url(); ?>public_html/images/location-pic-4.jpg" alt="" class="img-responsive"></a> <a href="#" class="venue-lable"><span class="label label-default">Germany</span></a> </div>
            </div>
            <!-- /.location block -->
            <div class="col-md-4 location-block"> <!-- location block -->
                <div class="vendor-image"> <a href="#"><img src="<?php echo base_url(); ?>public_html/images/location-pic-5.jpg" alt="" class="img-responsive"></a> <a href="#" class="venue-lable"><span class="label label-default">Paris</span></a> </div>
            </div>
            <!-- /.location block --> 
        </div>
    </div>
</div>
<!-- /.top location -->
<div class="spacer tp-section"><!-- Testimonial Section -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 tp-title-center">
                <h1>Just Get Married Happy Couple</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 tp-testimonial">
                <div id="testimonial" class="owl-carousel owl-theme">
                    <div class="item testimonial-block">
                        <div class="couple-pic"><img src="<?php echo base_url(); ?>public_html/images/couple.jpg" alt="" class="img-circle"></div>
                        <div class="feedback-caption">
                            <p>"Had our wedding on 15th may 2015 and have to say Jenny and the team made it a wonderful and enjoyable day were Notting was a problem from the build up to the day."</p>
                        </div>
                        <div class="couple-info">
                            <div class="name">Dave Macwan</div>
                            <div class="date">Thu, 21st June, 2015</div>
                        </div>
                    </div>
                    <div class="item testimonial-block">
                        <div class="couple-pic"><img src="<?php echo base_url(); ?>public_html/images/couple-2.jpg" alt="" class="img-circle"></div>
                        <div class="feedback-caption">
                            <p>"Vestibulum vitae neque urna. Duis ut mauris mi. Sed vehicula vestibulum finias their default model text and a search for lorem ipsum will uncover manym elit posuerenia eget sem."</p>
                        </div>
                        <div class="couple-info">
                            <div class="name">Marry &amp; Leary</div>
                            <div class="date">Thu, 13th July, 2015</div>
                        </div>
                    </div>
                    <div class="item testimonial-block">
                        <div class="couple-pic"><img src="<?php echo base_url(); ?>public_html/images/couple-3.jpg" alt="" class="img-circle"></div>
                        <div class="feedback-caption">
                            <p>"Had our wedding on 15th Oct 2015 and have to say Jenny and the team made it a wonderful and enjoyable day were Notting was a problem from the build up to the day."</p>
                        </div>
                        <div class="couple-info">
                            <div class="name">Jhon Doe &amp; Doe Jassica</div>
                            <div class="date">Thu, 21st Aug, 2015</div>
                        </div>
                    </div>
                    <div class="item testimonial-block">
                        <div class="couple-pic"><img src="<?php echo base_url(); ?>public_html/images/couple-4.jpg" alt="" class="img-circle"></div>
                        <div class="feedback-caption">
                            <p>"Etiam ut metus nisi. Sed non laoreet nisi tinciin interdum risus felis enjoyable day were Notting was a problem from the build up to the dayvel eleifend milaoreet consectetur."</p>
                        </div>
                        <div class="couple-info">
                            <div class="name">Dave Macwan</div>
                            <div class="date">Thu, 12th Sept, 2015</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /. Testimonial Section -->