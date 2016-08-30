<div class="tp-page-head"><!-- page header -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>Sing Up Vendor</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.page header -->
<div class="tp-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Sing Up Vendor</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12 tp-title-center">
                <h1>Become a wedding vendor member</h1>
                <p>Wedding Vendor works with thousands of wedding vendors worldwide. Vendors nearby are automatically includ in your wedding 
                    planning account.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 st-tabs"> 
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Personal Details</a></li>
                    <li class="hidden" role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Business Details</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                        <form action="<?php echo base_url() . 'login/registryvendor' ?>" method="POST">
                            <?php if (isset($dataerror)) : ?>
                                <span class="text-center col-md-12" style="color: red"><?php echo $dataerror ?></span>
                            <?php endif; ?>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="name">Last Name<span class="required">*</span></label>
                                <input id="name" name="KV101" type="text" placeholder="Last name" class="form-control input-md" required>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="name">First Name<span class="required">*</span></label>
                                <input id="name" name="KV102" type="text" placeholder="First name" class="form-control input-md" required>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="email">E-mail<span class="required">*</span></label>
                                <input id="email" name="KV103" type="text" placeholder="E-Mail" class="form-control input-md" required>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="password">Password<span class="required">*</span></label>
                                <input id="password" name="PASSWORD" type="text" placeholder="Password" class="form-control input-md" required>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="control-label" for="phone">Phone<span class="required">*</span></label>
                                <input id="phone" name="KV105" type="text" placeholder="Phone" class="form-control input-md" required>
                            </div>
                            <!-- Text input--> 

                            <!-- Button -->
                            <div class="form-group">
                                <input  name="KN114" type="hidden" value="1">
                                <button name="SUBMITRESGIS" class="btn tp-btn-primary tp-btn-lg">Continue Step</button>
                            </div>

                        </form>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="profile"><!-- Text input-->
                        <div class="form-group">
                            <label class="control-label" for="businessname">Business Name:<span class="required">*</span></label>
                            <input id="businessname" name="businessname" type="text" placeholder="Business name" class="form-control input-md" required>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class=" control-label" for="businesscategory">Business Category</label>
                            <select id="businesscategory" name="businesscategory" class="form-control">
                                <option value="Venue">Venue</option>
                                <option value="Photographer">Photographer</option>
                                <option value="Cake">Cake</option>
                                <option value="Dj">Dj</option>
                                <option value="Florist">Florist</option>
                                <option value="Videography">Videography</option>
                                <option value="jewellery">Jewellery</option>
                                <option value="Gifts">Gifts</option>
                                <option value="Dresses">Dresses</option>
                            </select>
                        </div>
                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class=" control-label" for="pricingplan">Select Pricing Plan</label>
                            <div class=" ">
                                <select id="pricingplan" name="pricingplan" class="form-control">
                                    <option value="Silver">Silver</option>
                                    <option value="Gold">Gold</option>
                                    <option value="Platinum">Platinum</option>
                                </select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="control-label" for="phone-one">Phone<span class="required">*</span></label>
                            <input id="phone-one" name="phone-one" type="text" placeholder="Phone" class="form-control input-md" required>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="control-label" for="address">Address<span class="required">*</span></label>
                            <textarea id="address" name="address" placeholder="Business Address" class="form-control input-md" required></textarea>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="control-label" for="postcode">Post Code<span class="required">*</span></label>
                            <input id="postcode" name="postcode" type="text" placeholder="Post Code" class="form-control input-md" required>
                        </div>
                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class=" control-label" for="country">Country</label>
                            <div class=" ">
                                <select id="country" name="country" class="form-control">
                                    <option value="India">India</option>
                                    <option value="Singapore">Singapore</option>
                                    <option value="Australia">Australia</option>
                                </select>
                            </div>
                        </div>
                        <!-- Button -->
                        <div class="form-group">
                            <button name="submit" class="btn tp-btn-primary tp-btn-lg">Create A Account</button>
                        </div>
                        <!-- Text input--> 
                    </div>
                </div>

            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-12 feature-block">
                        <div class="well-box">
                            <div class="feature-icon"><img src="/public_html/images/envelop.svg" alt=""></div>
                            <h3>Questions ? Contact us</h3>
                            <p>Nam poenatis condimentum. Fusce risus odiamrper at, lacinia vel leo.</p>
                            <a href="#" class="btn tp-btn-default">Help Center</a> </div>
                    </div>
                    <div class="col-md-12 feature-block">
                        <div class="well-box">
                            <div class="feature-icon"><img src="/public_html/images/pricing.svg" alt=""></div>
                            <h3>Wedding Budget</h3>
                            <p>Venenatis conntum. Fusce risus odio, egestas sit amet ullamcornia vel leo.</p>
                            <a href="#" class="btn tp-btn-default">View Pricing</a> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
