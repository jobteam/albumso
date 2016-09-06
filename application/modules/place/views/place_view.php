    <div class="tp-page-head">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>Venues Listing</h1>
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
                    <li class="active">Venue Listing 4 Column</li>
                </ol>
            </div>
            <div class="col-md-4 text-right"> </div>
        </div>
    </div>
</div>
<div class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-md-8 tp-title">
                <h2>(<?php echo isset($lstD100) ? count($lstD100) : 0  ?>) Place List View </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="filter-sidebar">
                    <div class="col-md-12 form-title">
                        <h2>Refine Your Search</h2>
                    </div>
                    <form>
                        <div class="col-md-12 form-group">
                            <label class="control-label" for="venuetype">Name</label>
                            <input id="name-one" name="name" type="text" placeholder="Name" class="form-control input-md" required="">
                        </div>
                        <div class="col-md-12 form-group">
                            <label class="control-label" for="venuetype">Venue Type</label>
                            <select id="venuetype" name="venuetype" class="form-control">
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
                        <div class="col-md-12 form-group">
                            <label class="control-label" for="capacity">Capacity</label>
                            <select id="capacity" name="capacity" class="form-control">
                                <option value="">Select Capacity</option>
                                <option value="0 - 99">0 - 99</option>
                                <option value="100 - 199">100 - 199</option>
                                <option value="200 - 299">200 - 299</option>
                                <option value="300 - 399">300 - 399</option>
                                <option value="400+">60 - 500</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <label class="control-label" for="price">Price</label>
                            <select id="price" name="price" class="form-control">
                                <option value=""> Select Price</option>
                                <option value="$35 - $50">$35 - $50</option>
                                <option value="$50 - $60">$50 - $60</option>
                                <option value="$60 - $70">$60 - $70</option>
                                <option value="$70 - $80">$70 - $80</option>
                                <option value="$80 - $90">$80 - $90</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group rating">
                            <label class="control-label">Select Rating </label>
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" name="checkbox" id="checkbox-0" value="1" class="styled">
                                <label for="checkbox-0" class="control-label"> <i class="fa fa-star"></i> </label>
                            </div>
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" name="checkbox" id="checkbox-1" value="2" class="styled">
                                <label for="checkbox-1" class="control-label"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </label>
                            </div>
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" name="checkbox" id="checkbox-2" value="3" class="styled">
                                <label for="checkbox-2" class="control-label"> <i class="fa fa-star"></i> <i class="fa fa-star"></i><i class="fa fa-star"></i> </label>
                            </div>
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" name="checkbox" id="checkbox-3" value="4" class="styled">
                                <label for="checkbox-3" class="control-label"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> </label>
                            </div>
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" name="checkbox" id="checkbox-4" value="5" class="styled">
                                <label for="checkbox-4" class="control-label"> <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> </label>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <label class="control-label">Amenities</label>
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" name="checkbox" id="weddinghall" value="Wedding Hall" class="styled">
                                <label for="weddinghall" class="control-label"> Wedding Hall </label>
                            </div>
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" name="checkbox" id="dining" value="Dining" class="styled">
                                <label for="dining" class="control-label"> Dining </label>
                            </div>
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" name="checkbox" id="insurance" value="Liability Insurance" class="styled">
                                <label for="insurance" class="control-label"> Liability Insurance </label>
                            </div>
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" name="checkbox" id="catering" value="In House Catering" class="styled">
                                <label for="catering" class="control-label"> In House Catering </label>
                            </div>
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" name="checkbox" id="djfacilities" value="5" class="styled">
                                <label for="djfacilities" class="control-label"> DJ Facilities </label>
                            </div>
                            <div class="checkbox checkbox-success">
                                <input type="checkbox" name="checkbox" id="dancefloor" value="Dance Foor" class="styled">
                                <label for="dancefloor" class="control-label"> Dance Foor </label>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" class="btn tp-btn-primary tp-btn-lg btn-block">Refine Your Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-9">
                <div class="row">
                    <?php foreach ($lstD100 as $d100) :  ?>
                        <div class="col-md-12 vendor-box vendor-box-grid"><!-- venue box start-->
                            <div class="row">
                                <div class="col-md-6 no-right-pd">
                                    <div class="vendor-image"><!-- venue pic --> 
                                        <a href="#"><img src="<?php echo base_url() ?>public_html/images/vendor-1.jpg" alt="wedding venue" class="img-responsive"></a> 
                                        <div class="favourite-bg"><a href="#" class=""><i class="fa fa-heart"></i></a></div>
                                    </div>
                                </div>
                                <!-- /.venue pic -->
                                <div class=" col-md-6 vendor-detail"><!-- venue details -->
                                    <div class="caption"><!-- caption -->
                                        <h2><a href="<?php echo base_url() ?>provider/detail/<?php echo $d100['_id']; ?>" class="title"><?php echo $d100['DV101']; ?></a></h2>
                                        <p class="location"><i class="fa fa-map-marker"></i> <?php  ?></p>
                                        <div class="rating pull-left"> 
                                            <i class="fa fa-star"></i> 
                                            <i class="fa fa-star"></i> 
                                            <i class="fa fa-star"></i> 
                                            <i class="fa fa-star"></i> 
                                            <i class="fa fa-star-o"></i> 
                                            <span class="rating-count">(22)</span> 
                                        </div>
                                    </div>
                                    <!-- /.caption -->
                                    <div class="vendor-price">
                                        <div class="number-product"><a href="<?php echo base_url() ?>provider/detail/<?php echo $d100['_id']; ?>">Xem Chi tiết</a></div>
                                    </div>
                                </div>
                            </div>

                            <!-- venue details --> 

                        </div>
                        <!-- /.venue box start-->
                    <?php endforeach; ?>

                    <div class="col-md-12 tp-pagination">
                        <ul class="pagination">
                            <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">Previous</span> </a> </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li> <a href="#" aria-label="Next"> <span aria-hidden="true">NEXT</span> </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>