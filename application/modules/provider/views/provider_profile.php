<div class="tp-page-head"><!-- page header -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1><?php echo isset($lstK100[0]['KV101']) ? $lstK100[0]['KV101'] : '' ?></h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="tp-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active"><?php echo isset($lstK100[0]['KV101']) ? $lstK100[0]['KV101'] : '' ?></li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-md-4 page-sidebar">
                <div class="row">
                    <div class="col-md-12 vendor-profile-block">
                        <div class="vendor-profile"> <img src="<?php echo base_url() ?>public_html/images/vendor-profile.jpg" alt="" class="img-responsive"> </div>
                    </div>
                    <div class="col-md-12" >
                        <div class="well-box" id="inquiry">
                            <h2>Send Enquiry to Vendor</h2>
                            <p>Fill in your details and a Venue Specialist will get back to you shortly.</p>
                            <form class="">

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="control-label" for="name-one">Name:<span class="required">*</span></label>
                                    <div class="">
                                        <input id="name-one" name="name" type="text" placeholder="Name" class="form-control input-md" required>
                                    </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="control-label" for="phone">Phone:<span class="required">*</span></label>
                                    <div class="">
                                        <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control input-md" required>
                                        <span class="help-block"> </span> </div>
                                </div>

                                <!-- Text input-->
                                <div class="form-group">
                                    <label class="control-label" for="email-one">E-Mail:<span class="required">*</span></label>
                                    <div class="">
                                        <input id="email-one" name="email" type="text" placeholder="E-Mail" class="form-control input-md" required>
                                    </div>
                                </div>

                                <!-- Select Basic -->
                                <div class="form-group col-md-4 no-padding">
                                    <label class="control-label" for="date">Date:</label>
                                    <div class="">
                                        <select id="date" name="date" class="form-control">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4 no-padding">
                                    <label class="control-label" for="month">Month:</label>
                                    <div class="">
                                        <select id="month" name="month" class="form-control">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-4 no-padding">
                                    <label class="control-label" for="year">Year:</label>
                                    <div class="">
                                        <select id="year" name="year" class="form-control">
                                            <option value="1">2016</option>
                                            <option value="2">2017</option>
                                            <option value="3">2018</option>
                                            <option value="4">2019</option>
                                            <option value="5">2020</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="guest">Number of Guests:<span class="required">*</span></label>
                                    <div class="">
                                        <select id="guest" name="guest" class="form-control">
                                            <option value="35 to 50">35 to 50</option>
                                            <option value="50  to 65">50  to 65</option>
                                            <option value="65 to 85">65 to 85</option>
                                            <option value="85 to 105">85 to 105</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Multiple Radios -->
                                <div class="form-group">
                                    <label class="control-label">Send me info via</label>
                                    <div class="checkbox checkbox-success">
                                        <input type="checkbox" name="checkbox" id="checkbox-0" value="1"   class="styled">
                                        <label for="checkbox-0" class="control-label"> E-Mail </label>
                                    </div>
                                    <div class="checkbox checkbox-success">
                                        <input type="checkbox" name="checkbox" id="checkbox-1" value="2" class="styled" >
                                        <label for="checkbox-1" class="control-label"> Need Call back </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button name="submit" class="btn tp-btn-default tp-btn-lg btn-block">Book MY Venue now</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-md-12 ">
                        <div class="social-sidebar side-box">
                            <ul class="listnone follow-icon">
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-offset-1 col-md-7 page-description">
                <div class="vendr-profile-info">
                    <h1><?php echo isset($lstK100[0]['KV101']) ? $lstK100[0]['KV101'] : '' ?></h1>
                    <p class="profile-address"><i class="fa fa-map-marker"></i> Western Gateway, Royal Victoria Dock London.</p>
                    <p><span class="profile-email"><i class="fa fa-envelope"></i><?php echo isset($lstK100[0]['KV102']) ? isset($lstK100[0]['KV102']) : '' ?></span><span class="profile-website"><i class="fa fa-link"></i><a href="#">http://www.circleplazz.com</a></span></p>
                </div>
                <div class="venue-details">
                    <h2>About The <?php echo isset($lstK100[0]['KV101']) ? $lstK100[0]['KV101'] : '' ?></h2>
                    <p class="lead">Latin words combined with a handful of model sentence sum which one generated Lorem Ipsum is therefore always free from repetition injected humour or non characteristic words etc.</p>
                    <p>Quisque laoreet mi libero, et tempus lacus venenatis eget. Nulla vitaeipsum inturpis blandit congue ofer ornare inleo. Nulla nibhmi sagittis necaliquet pharetra vitae turpis. Nam tristique mauris necultricies its tristiqu. orbilitelit molestie eget tincidunt luctus consequat sitameturna.</p>
                    <p>Aenean sapienest, rutrum malesuada quamuis tristique tincinibh hasellusut elementum not semlass and aptent taciti sociosqu ad litorarutrum malesuada quamuis tristique torquent per conubia nostra permite  inceptos our its it himenaeos aecsed laoreet diam. Crasut auctor ipsusque commodo suscipit onet tristiques viverrarcu idaugue blandit ultricies nibhrhoncus rutrum malesuada tristique.</p>
                    <p>Latin words combined with a handful of model sentence structures to generate Loremere Ipsum which looks reasonable. The generated lorem Ipsum is therefore always free  model repetition injected humour or non characteristic words etc.</p>
                </div>
                <div class="profile-feature">
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="profile-feature-title">Facilities:</h3>
                        </div>
                        <div class="col-md-9">Banquet halls, Gardens, Marquees, Kitchen for catering, 
                            Dance floor, parking</div>
                    </div>
                </div>
                <div class="profile-feature">
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="profile-feature-title">Services:</h3>
                        </div>
                        <div class="col-md-9">Banquet halls, Gardens, Marquees, Kitchen for catering, 
                            Dance floor, parking</div>
                    </div>
                </div>
                <div class="profile-feature">
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="profile-feature-title">Guest List:</h3>
                        </div>
                        <div class="col-md-9">From 20 to 100</div>
                    </div>
                </div>
                <div class="profile-feature">
                    <div class="row">
                        <div class="col-md-3">
                            <h3 class="profile-feature-title">AVG Price:</h3>
                        </div>
                        <div class="col-md-9">From $50 to $75</div>
                    </div>
                </div>
                <div class="profile-gallery" id="profile-gallery">
                    <div class="row">
                        <div class="col-md-12"><h1>Gallery</h1></div>
                        <div class="col-md-12">
                            <div id="sync1" class="owl-carousel">
                                <div class="item"> <img src="<?php echo base_url() ?>public_html/images/vendor-1.jpg" alt="" class="img-responsive"> </div>
                                <div class="item"> <img src="<?php echo base_url() ?>public_html/images/vendor-2.jpg" alt="" class="img-responsive"> </div>
                                <div class="item"> <img src="<?php echo base_url() ?>public_html/images/vendor-3.jpg" alt="" class="img-responsive"> </div>
                                <div class="item"> <img src="<?php echo base_url() ?>public_html/images/vendor-4.jpg" alt="" class="img-responsive"> </div>
                                <div class="item"> <img src="<?php echo base_url() ?>public_html/images/vendor-5.jpg" alt="" class="img-responsive"> </div>
                                <div class="item"> <img src="<?php echo base_url() ?>public_html/images/vendor-6.jpg" alt="" class="img-responsive"> </div>
                                <div class="item"> <img src="<?php echo base_url() ?>public_html/images/vendor-7.jpg" alt="" class="img-responsive"> </div>
                                <div class="item"> <img src="<?php echo base_url() ?>public_html/images/vendor-8.jpg" alt="" class="img-responsive"> </div>
                                <div class="item"> <img src="<?php echo base_url() ?>public_html/images/vendor-9.jpg" alt="" class="img-responsive"> </div>
                                <div class="item"> <img src="<?php echo base_url() ?>public_html/images/vendor-1.jpg" alt="" class="img-responsive"> </div>
                            </div>
                            <div id="sync2" class="owl-carousel">
                                <div class="item"> <img src="<?php echo base_url() ?>public_html/images/vendor-1.jpg" alt="" class="img-responsive"> </div>
                                <div class="item"> <img src="<?php echo base_url() ?>public_html/images/vendor-2.jpg" alt="" class="img-responsive"> </div>
                                <div class="item"> <img src="<?php echo base_url() ?>public_html/images/vendor-3.jpg" alt="" class="img-responsive"> </div>
                                <div class="item"> <img src="<?php echo base_url() ?>public_html/images/vendor-4.jpg" alt="" class="img-responsive"> </div>
                                <div class="item"> <img src="<?php echo base_url() ?>public_html/images/vendor-5.jpg" alt="" class="img-responsive"> </div>
                                <div class="item"> <img src="<?php echo base_url() ?>public_html/images/vendor-6.jpg" alt="" class="img-responsive"> </div>
                                <div class="item"> <img src="<?php echo base_url() ?>public_html/images/vendor-7.jpg" alt="" class="img-responsive"> </div>
                                <div class="item"> <img src="<?php echo base_url() ?>public_html/images/vendor-8.jpg" alt="" class="img-responsive"> </div>
                                <div class="item"> <img src="<?php echo base_url() ?>public_html/images/vendor-9.jpg" alt="" class="img-responsive"> </div>
                                <div class="item"> <img src="<?php echo base_url() ?>public_html/images/vendor-1.jpg" alt="" class="img-responsive"> </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="googleMap" class="map"></div>
<div class="spacer">
    <div class="container">
        <div class="row">
            <div class="col-md-12 tp-title">
                <h1>Recommend Venues for your Date</h1>
            </div>
            <div class="col-md-4 vendor-box"><!-- venue box start-->
                <div class="vendor-image"><!-- venue pic --> 
                    <a href="#"><img src="<?php echo base_url() ?>public_html/images/vendor-1.jpg" alt="wedding venue" class="img-responsive"></a> </div>
                <!-- /.venue pic -->
                <div class="vendor-detail"><!-- venue details -->
                    <div class="caption"><!-- caption -->
                        <h2><a href="#" class="title">Venue Vendor Title</a></h2>
                        <p class="location"><i class="fa fa-map-marker"></i> Street Address, Name of Town, 12345, Country.</p>
                        <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                    </div>
                    <!-- /.caption -->
                    <div class="vendor-price">
                        <div class="price">$390 - $600</div>
                    </div>
                </div>
                <!-- venue details --> 
            </div>
            <div class="col-md-4 vendor-box"><!-- venue box start-->
                <div class="vendor-image"><!-- venue pic --> 
                    <a href="#"><img src="<?php echo base_url() ?>public_html/images/vendor-2.jpg" alt="wedding venue" class="img-responsive"></a> </div>
                <!-- /.venue pic -->
                <div class="vendor-detail"><!-- venue details -->
                    <div class="caption"><!-- caption -->
                        <h2><a href="#" class="title">Venue Vendor Title</a></h2>
                        <p class="location"><i class="fa fa-map-marker"></i> Street Address, Name of Town, 12345, Country.</p>
                        <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                    </div>
                    <!-- /.caption -->
                    <div class="vendor-price">
                        <div class="price">$390 - $600</div>
                    </div>
                </div>
                <!-- venue details --> 
            </div>
            <div class="col-md-4 vendor-box"><!-- venue box start-->
                <div class="vendor-image"><!-- venue pic --> 
                    <a href="#"><img src="<?php echo base_url() ?>public_html/images/vendor-3.jpg" alt="wedding venue" class="img-responsive"></a> </div>
                <!-- /.venue pic -->
                <div class="vendor-detail"><!-- venue details -->
                    <div class="caption"><!-- caption -->
                        <h2><a href="#" class="title">Venue Vendor Title</a></h2>
                        <p class="location"><i class="fa fa-map-marker"></i> Street Address, Name of Town, 12345, Country.</p>
                        <div class="rating pull-left"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <span class="rating-count">(22)</span> </div>
                    </div>
                    <!-- /.caption -->
                    <div class="vendor-price">
                        <div class="price">$390 - $600</div>
                    </div>
                </div>
                <!-- venue details --> 
            </div>
        </div>
    </div>
</div>
<script src="http://maps.googleapis.com/maps/api/js"></script> 
<script>
    var myCenter = new google.maps.LatLng(23.0203458, 72.5797426);

    function initialize()
    {
        var mapProp = {
            center: myCenter,
            zoom: 9,
            scrollwheel: false,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };

        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);

        var marker = new google.maps.Marker({
            position: myCenter,
            icon: 'images/pinkball.png'
        });

        marker.setMap(map);
        var infowindow = new google.maps.InfoWindow({
            content: "Hello Address"
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);
</script>