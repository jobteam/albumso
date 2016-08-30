<div class="tp-page-head"><!-- page header -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>Sign Up Couple</h1>
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
                    <li class="active">Sign Up Couple</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="main-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12 tp-title-center">
                <h1>Create a account &amp; save you date.<br>
                    <small>Start Planning  It's Free</small> </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 singup-couple">
                <div class="well-box">
                    <h2>Sign Up for a Free Account </h2>
                    <form method="POST" >
                        <?php if (isset($dataerror)) : ?>
                            <span class="text-center col-md-12" style="color: red"><?php echo $dataerror ?></span>
                        <?php endif; ?>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="control-label" for="name">First Name<span class="required">*</span></label>
                            <input id="name" name="NV101" type="text" placeholder="First name" class="form-control input-md" required>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="control-label" for="name">Last Name<span class="required">*</span></label>
                            <input id="name" name="NV102" type="text" placeholder="Last name" class="form-control input-md" required>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="control-label" for="email">E-mail<span class="required">*</span></label>
                            <input id="email" name="NV106" type="text" placeholder="E-Mail" class="form-control input-md" required>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group ">
                            <label class="control-label" for="date">Sex:</label>
                            <div class="">
                                <select id="date" name="NV107" class="form-control">
                                    <option value="M">Nam</option>
                                    <option value="F">Nữ</option>
                                </select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="control-label" for="phone">Phone<span class="required">*</span></label>
                            <input id="phone" name="NV108" type="text" placeholder="Phone" class="form-control input-md" required>
                        </div>


                        <!-- Text input-->
                        <div class="form-group">
                            <label class="control-label" for="password">Password<span class="required">*</span></label>
                            <input id="password" name="PASSWORD" type="text" placeholder="Password" class="form-control input-md" required>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="control-label" for="phone">Wedding Date<span class="required">*</span></label>
                        </div>
                        <!-- Select Basic -->
                        <div class="form-group col-md-4 no-padding">
                            <label class="control-label" for="date">Date:</label>
                            <div class="">
                                <select id="date" name="NN109" class="form-control">
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
                                <select id="month" name="NN110" class="form-control">
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
                                <select id="year" name="NN111" class="form-control">
                                    <option value="1">2016</option>
                                    <option value="2">2017</option>
                                    <option value="3">2018</option>
                                    <option value="4">2019</option>
                                    <option value="5">2020</option>
                                </select>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <button id="submit" name="SUBMITRESGIS" class="btn tp-btn-primary tp-btn-lg">Create A Account</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6 feature-block">
                        <div class="well-box">
                            <div class="feature-icon"> <img src="/public_html/images/table.svg" alt=""> </div>
                            <h3>Wedding Checklist</h3>
                            <p>Nullam porttitor lorem atdiam quis semper diam orci at neque.</p>
                        </div>
                    </div>
                    <div class="col-md-6 feature-block">
                        <div class="well-box">
                            <div class="feature-icon"><img src="/public_html/images/graph.svg" alt=""></div>
                            <h3>Wedding Budget</h3>
                            <p>Nullam porttitor lorem atdiam quis semper diam orci at neque.</p>
                        </div>
                    </div>
                    <div class="col-md-6 feature-block">
                        <div class="well-box">
                            <div class="feature-icon"><img src="/public_html/images/all-vendor.svg" alt=""></div>
                            <h3>Wedding Vendors</h3>
                            <p>Nullam porttitor lorem atdiam quis semper diam orci at neque.</p>
                        </div>
                    </div>
                    <div class="col-md-6 feature-block">
                        <div class="well-box">
                            <div class="feature-icon"><img src="/public_html/images/heart.svg" alt=""></div>
                            <h3>Everything you need</h3>
                            <p>Nullam porttitor lorem atdiam quis semper diam orci at neque.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>