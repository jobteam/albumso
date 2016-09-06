<div id="slider" class="owl-carousel owl-theme slider">
    <div class="item">
        <div class="slider-pic"><img src="<?php echo base_url() ?>public_html/images/hero-image-2.jpg" alt="Mirror Edge"></div>

    </div>
    <div class="item">
        <div class="slider-pic"><img src="<?php echo base_url() ?>public_html/images/venue-pic-3.jpg" alt="Wedding couple pic"></div>
    </div>
    <div class="item">
        <div class="slider-pic"><img src="<?php echo base_url() ?>public_html/images/venue-pic.jpg" alt="The Last of us"></div>  </div>
</div>


<div class="container venue-header">
    <div class="row venue-head">
        <div class="col-md-12 title">
            <h1>Wedding Venue Title Goes Here</h1>
            <p class="location"><i class="fa fa-map-marker"></i>110 Pennington Street, London E1W 2BB</p>
        </div>
        <div class="col-md-8 rating-box">
            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
        </div>
        <div class="col-md-4 venue-action"> 
            <a href="#googleMap" class="btn tp-btn-primary">VIEW MAP</a> 
            <a href="<?php echo base_url(); ?>provider/profile/<?php echo $FK100 ?>" class="btn tp-btn-default">Profile</a> </div>
    </div>
</div>
<div class="tp-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Venue Listing 4 Column</li>
                </ol>
            </div>
            <div class="col-md-4 text-right"> <a aria-controls="searchform" aria-expanded="true" href="#searchform" data-toggle="collapse" role="button" class="btn tp-btn-link"> Filter Hide/Show </a> </div>
        </div>
    </div>
</div>
<div id="searchform" class="filter-box collapse in" aria-expanded="true" style="">
    <div class="container">
        <div class="row filter-form">
            <div class="col-md-12">
                <h2>Refine Your Search</h2>
            </div>
            <form>
                <div class="col-md-3">
                    <label for="venuetype" class="control-label">Venue Type</label>
                    <select class="form-control" name="venuetype" id="venuetype">
                        <option value="">Select Venue</option>
                        <option value="Barn">Barn</option>
                        <option value="Boutique">Boutique</option>
                        <option value="Castle">Castle</option>
                        <option value="Country House">Country House</option>
                        <option value="Exclusive use">Exclusive use</option>
                        <option value="Garden weddings">Garden weddings</option>
                        <option value="Gay friendly">Gay friendly</option>
                        <option value="Gothic">Gothic</option>
                        <option value="Hotel">Hotel</option>
                        <option value="Intimate">Intimate</option>
                        <option value="Manor House">Manor House</option>
                        <option value="Marquee">Marquee</option>
                        <option value="Minimalist">Minimalist</option>
                        <option value="Modern">Modern</option>
                        <option value="Outside Weddings">Outside Weddings</option>
                        <option value="Palace">Palace</option>
                        <option value="Private School">Private School</option>
                        <option value="Romantic">Romantic</option>
                        <option value="Small">Small</option>
                        <option value="Waterside">Waterside</option>
                        <option value="Weekend">Weekend</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="capacity" class="control-label">Capacity</label>
                    <select class="form-control" name="capacity" id="capacity">
                        <option value="">Select Capacity</option>
                        <option value="0 - 99">0 - 99</option>
                        <option value="100 - 199">100 - 199</option>
                        <option value="200 - 299">200 - 299</option>
                        <option value="300 - 399">300 - 399</option>
                        <option value="400+">60 - 500</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="price" class="control-label">Price</label>
                    <select class="form-control" name="price" id="price">
                        <option value=""> Select Price</option>
                        <option value="$35 - $50">$35 - $50</option>
                        <option value="$50 - $60">$50 - $60</option>
                        <option value="$60 - $70">$60 - $70</option>
                        <option value="$70 - $80">$70 - $80</option>
                        <option value="$80 - $90">$80 - $90</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <button class="btn tp-btn-default tp-btn-lg btn-block" type="submit">Refine Your Search</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Displaying 12 venues in your search.</h2>
            </div>
            <div class="col-md-3 vendor-box"><!-- venue box start-->
                <div class="vendor-image"><!-- venue pic --> 
                    <a href="/products/detail"><img class="img-responsive" alt="wedding venue" src="http://albumso.com/public_html/images/vendor-1.jpg"></a>
                    <div class="favourite-bg"><a class="" href="#"><i class="fa fa-heart"></i></a></div>
                </div>
                <!-- /.venue pic -->
                <div class="vendor-detail"><!-- venue details -->
                    <div class="caption"><!-- caption -->
                        <h2><a class="title" href="/products/detail">Venue Vendor Title</a></h2>
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

            <!-- /.venue box start-->
            <div class="col-md-3 vendor-box"><!-- venue box start-->
                <div class="vendor-image"><!-- venue pic --> 
                    <a href="/products/detail"><img class="img-responsive" alt="wedding venue" src="http://albumso.com/public_html/images/vendor-2.jpg"></a>
                    <div class="favourite-bg"><a class="" href="#"><i class="fa fa-heart"></i></a></div>
                </div>
                <!-- /.venue pic -->
                <div class="vendor-detail"><!-- venue details -->
                    <div class="caption"><!-- caption -->
                        <h2><a class="title" href="/products/detail">Venue Vendor Title</a></h2>
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

            <!-- /.venue box start-->
            <div class="col-md-3 vendor-box"><!-- venue box start-->
                <div class="vendor-image"><!-- venue pic --> 
                    <a href="/products/detail"><img class="img-responsive" alt="wedding venue" src="http://albumso.com/public_html/images/vendor-3.jpg"></a>
                    <div class="favourite-bg"><a class="" href="#"><i class="fa fa-heart"></i></a></div>
                </div>
                <!-- /.venue pic -->
                <div class="vendor-detail"><!-- venue details -->
                    <div class="caption"><!-- caption -->
                        <h2><a class="title" href="/products/detail">Venue Vendor Title</a></h2>
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

            <!-- /.venue box start-->
            <div class="col-md-3 vendor-box"><!-- venue box start-->
                <div class="vendor-image"><!-- venue pic --> 
                    <a href="/products/detail"><img class="img-responsive" alt="wedding venue" src="http://albumso.com/public_html/images/vendor-4.jpg"></a>
                    <div class="favourite-bg"><a class="" href="#"><i class="fa fa-heart"></i></a></div>
                </div>
                <!-- /.venue pic -->
                <div class="vendor-detail"><!-- venue details -->
                    <div class="caption"><!-- caption -->
                        <h2><a class="title" href="/products/detail">Venue Vendor Title</a></h2>
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
            <!-- /.venue box start-->

            <div class="col-md-3 vendor-box"><!-- venue box start-->
                <div class="vendor-image"><!-- venue pic --> 
                    <a href="/products/detail"><img class="img-responsive" alt="wedding venue" src="http://albumso.com/public_html/images/vendor-5.jpg"></a>
                    <div class="favourite-bg"><a class="" href="#"><i class="fa fa-heart"></i></a></div>
                </div>
                <!-- /.venue pic -->
                <div class="vendor-detail"><!-- venue details -->
                    <div class="caption"><!-- caption -->
                        <h2><a class="title" href="/products/detail">Venue Vendor Title</a></h2>
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

            <!-- /.venue box start-->
            <div class="col-md-3 vendor-box"><!-- venue box start-->
                <div class="vendor-image"><!-- venue pic --> 
                    <a href="/products/detail"><img class="img-responsive" alt="wedding venue" src="http://albumso.com/public_html/images/vendor-6.jpg"></a>
                    <div class="favourite-bg"><a class="" href="#"><i class="fa fa-heart"></i></a></div>
                </div>
                <!-- /.venue pic -->
                <div class="vendor-detail"><!-- venue details -->
                    <div class="caption"><!-- caption -->
                        <h2><a class="title" href="/products/detail">Venue Vendor Title</a></h2>
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

            <!-- /.venue box start-->
            <div class="col-md-3 vendor-box"><!-- venue box start-->
                <div class="vendor-image"><!-- venue pic --> 
                    <a href="/products/detail"><img class="img-responsive" alt="wedding venue" src="http://albumso.com/public_html/images/vendor-7.jpg"></a>
                    <div class="favourite-bg"><a class="" href="#"><i class="fa fa-heart"></i></a></div>
                </div>
                <!-- /.venue pic -->
                <div class="vendor-detail"><!-- venue details -->
                    <div class="caption"><!-- caption -->
                        <h2><a class="title" href="/products/detail">Venue Vendor Title</a></h2>
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

            <!-- /.venue box start-->
            <div class="col-md-3 vendor-box"><!-- venue box start-->
                <div class="vendor-image"><!-- venue pic --> 
                    <a href="/products/detail"><img class="img-responsive" alt="wedding venue" src="http://albumso.com/public_html/images/vendor-8.jpg"></a>
                    <div class="favourite-bg"><a class="" href="#"><i class="fa fa-heart"></i></a></div>
                </div>
                <!-- /.venue pic -->
                <div class="vendor-detail"><!-- venue details -->
                    <div class="caption"><!-- caption -->
                        <h2><a class="title" href="/products/detail">Venue Vendor Title</a></h2>
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
            <!-- /.venue box start-->

            <div class="col-md-3 vendor-box"><!-- venue box start-->
                <div class="vendor-image"><!-- venue pic --> 
                    <a href="/products/detail"><img class="img-responsive" alt="wedding venue" src="http://albumso.com/public_html/images/vendor-1.jpg"></a>
                    <div class="favourite-bg"><a class="" href="#"><i class="fa fa-heart"></i></a></div>
                </div>
                <!-- /.venue pic -->
                <div class="vendor-detail"><!-- venue details -->
                    <div class="caption"><!-- caption -->
                        <h2><a class="title" href="/products/detail">Venue Vendor Title</a></h2>
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

            <!-- /.venue box start-->
            <div class="col-md-3 vendor-box"><!-- venue box start-->
                <div class="vendor-image"><!-- venue pic --> 
                    <a href="/products/detail"><img class="img-responsive" alt="wedding venue" src="http://albumso.com/public_html/images/vendor-4.jpg"></a>
                    <div class="favourite-bg"><a class="" href="#"><i class="fa fa-heart"></i></a></div>
                </div>
                <!-- /.venue pic -->
                <div class="vendor-detail"><!-- venue details -->
                    <div class="caption"><!-- caption -->
                        <h2><a class="title" href="/products/detail">Venue Vendor Title</a></h2>
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

            <!-- /.venue box start-->
            <div class="col-md-3 vendor-box"><!-- venue box start-->
                <div class="vendor-image"><!-- venue pic --> 
                    <a href="/products/detail"><img class="img-responsive" alt="wedding venue" src="http://albumso.com/public_html/images/vendor-2.jpg"></a>
                    <div class="favourite-bg"><a class="" href="#"><i class="fa fa-heart"></i></a></div>
                </div>
                <!-- /.venue pic -->
                <div class="vendor-detail"><!-- venue details -->
                    <div class="caption"><!-- caption -->
                        <h2><a class="title" href="/products/detail">Venue Vendor Title</a></h2>
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

            <!-- /.venue box start-->
            <div class="col-md-3 vendor-box"><!-- venue box start-->
                <div class="vendor-image"><!-- venue pic --> 
                    <a href="/products/detail"><img class="img-responsive" alt="wedding venue" src="http://albumso.com/public_html/images/vendor-5.jpg"></a>
                    <div class="favourite-bg"><a class="" href="#"><i class="fa fa-heart"></i></a></div>
                </div>
                <!-- /.venue pic -->
                <div class="vendor-detail"><!-- venue details -->
                    <div class="caption"><!-- caption -->
                        <h2><a class="title" href="/products/detail">Venue Vendor Title</a></h2>
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
            <!-- /.venue box start-->

        </div>
        <div class="row">
            <div class="col-md-12 tp-pagination">
                <ul class="pagination">
                    <li> <a aria-label="Previous" href="#"> <span aria-hidden="true">Previous</span> </a> </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li> <a aria-label="Next" href="#"> <span aria-hidden="true">NEXT</span> </a> </li>
                </ul>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-12 page-description">
                <!-- comments -->
                <div class="customer-review">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Couples Review</h1>
                            <div class="review-list"> 
                                <!-- First Comment -->
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 hidden-xs">
                                        <div class="user-pic"> <img class="img-responsive img-circle" src="<?php echo base_url() ?>public_html/images/userpic.jpg" alt=""> </div>
                                    </div>
                                    <div class="col-md-10 col-sm-10">
                                        <div class="panel panel-default arrow left">
                                            <div class="panel-body">
                                                <div class="text-left">
                                                    <h3>The whole experience was Excellent</h3>
                                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                </div>
                                                <div class="review-post">
                                                    <p> From initially being shown round through booking to breakfast the next morning. Nam eu enim mollis urna egestas interdum eget quis nisl. Ut sem velit, scelerisque nec commodo consequat, imperdiet non diam. </p>
                                                </div>
                                                <div class="review-user">By <a href="#">Jaisy and Kartin</a>, on <span class="review-date"></span>04 Apr 2015</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Second Comment -->
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 hidden-xs">
                                        <div class="user-pic"> <img class="img-responsive img-circle" src="<?php echo base_url() ?>public_html/images/userpic.jpg" alt=""> </div>
                                    </div>
                                    <div class="col-md-10 col-sm-10">
                                        <div class="panel panel-default arrow left">
                                            <div class="panel-body">
                                                <div class="text-left">
                                                    <h3>The Facilities were Fantastic!</h3>
                                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                </div>
                                                <div class="review-post">
                                                    <p> Curabitur mattis congue consectetur. Nulla facilisis dictum velit, ultrices imperdiet diam luctus quis. Vestibulum in volutpat purus, quis accumsan diam. The pastry heart on the pie was such a lovely touch that you could easily not have done. </p>
                                                </div>
                                                <div class="review-user">By <a href="#">Jaisy and Kartin</a>, on <span class="review-date"></span>04 Apr 2015</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Third Comment -->
                                <div class="row">
                                    <div class="col-md-2 col-sm-2 hidden-xs">
                                        <div class="user-pic"> <img class="img-responsive img-circle" src="<?php echo base_url() ?>public_html/images/userpic.jpg" alt=""> </div>
                                    </div>
                                    <div class="col-md-10 col-sm-10">
                                        <div class="panel panel-default arrow left">
                                            <div class="panel-body">
                                                <div class="text-left">
                                                    <h3> Aenean elementum dictum estsit amet ullamcorper</h3>
                                                    <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                </div>
                                                <div class="review-post">
                                                    <p> Vivamus condimentum orci non tellus tincidunt volutpat. Suspendisse gravida gravida arcu a pellentesque. Duis aliquet ut justo et accumsan. </p>
                                                </div>
                                                <div class="review-user">By <a href="#">Jaisy and Kartin</a>, on <span class="review-date"></span>04 Apr 2015</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="review">
                                <a class="btn tp-btn-primary btn-block tp-btn-lg" role="button" data-toggle="collapse" href="#review" aria-expanded="false" aria-controls="review"> Write A Review </a> </div>
                            <div class="collapse review-list review-form" id="review">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h1>Write Your Review</h1>
                                        <form class="">
                                            <div class="rating-group">
                                                <div class="radio radio-success radio-inline">
                                                    <input type="radio" name="radio1" id="radio1" value="option2">
                                                    <label for="radio1" class="radio-inline"> <span class="rating"><i class="fa fa-star"></i></span> </label>
                                                </div>
                                                <div class="radio radio-success radio-inline">
                                                    <input type="radio" name="radio1" id="radio2" value="option3">
                                                    <label for="radio2" class="radio-inline"> <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i></span> </label>
                                                </div>
                                                <div class="radio radio-success radio-inline">
                                                    <input type="radio" name="radio1" id="radio3" value="option3">
                                                    <label for="radio3" class="radio-inline"> <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> </label>
                                                </div>
                                                <div class="radio radio-success radio-inline">
                                                    <input type="radio" name="radio1" id="radio4" value="option4">
                                                    <label for="radio4" class="radio-inline"> <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> </label>
                                                </div>
                                                <div class="radio radio-success radio-inline">
                                                    <input type="radio" name="radio1" id="radio5" value="option5">
                                                    <label for="radio5" class="radio-inline"> <span class="rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span> </label>
                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class=" control-label" for="name">Name</label>
                                                <div class="">
                                                    <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" required>
                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class=" control-label" for="email">E-Mail</label>
                                                <div class=" ">
                                                    <input id="email" name="email" type="text" placeholder="E-Mail" class="form-control input-md" required>
                                                </div>
                                            </div>

                                            <!-- Text input-->
                                            <div class="form-group">
                                                <label class=" control-label" for="reviewtitle">Review Title</label>
                                                <div class=" ">
                                                    <input id="reviewtitle" name="reviewtitle" type="text" placeholder="Review Title" class="form-control input-md" required>
                                                </div>
                                            </div>

                                            <!-- Textarea -->
                                            <div class="form-group">
                                                <label class=" control-label">Write Review</label>
                                                <div class="">
                                                    <textarea class="form-control" rows="8">Write Review</textarea>
                                                </div>
                                            </div>
                                            <!-- Button -->
                                            <div class="form-group">
                                                <button name="submit" class="btn tp-btn-default tp-btn-lg">Submit Review</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /.comments --> 

            </div>
        </div>
    </div>
</div>
<div id="googleMap" class="map"></div>
