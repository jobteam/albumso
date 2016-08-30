<div class="tp-page-head"><!-- page header -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>Login Page</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.page header -->

<div class="main-container">
    <div class="container">
        <div class="col-md-offset-3 col-md-6 st-tabs"> 
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Vendor Login </a></li>
                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Couple login</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content ">
                <div role="tabpanel" class="tab-pane active vendor-login" id="home">
                    <form method="POST">
                        <?php if(isset($dataerror)) : ?>
                        <span class="text-center col-md-12" style="color: red"><?php echo $dataerror ?></span>
                        <?php endif; ?>
                        <!-- Text input-->
                        <div class="form-group">
                            <label class="control-label" for="email">E-mail<span class="required">*</span></label>
                            <input id="email" name="EMAIL" type="text" placeholder="E-Mail" class="form-control input-md" required>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="control-label" for="password">Password<span class="required">*</span></label>
                            <input id="password" name="PASSWORD" type="text" placeholder="Password" class="form-control input-md" required>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <input type="hidden" name="TYPELOGIN" value="P" />
                            <button id="submit" name="SUBMITLOGIN" class="btn tp-btn-primary tp-btn-lg">Login</button>
                            <a href="<?php echo base_url().'login/forgetpassword' ?>" class="pull-right"> <small>Forgot Password ?</small></a> </div>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane couple-login" id="profile"><!-- Text input-->
                    <form method="POST">

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="control-label" for="email-one">E-mail<span class="required">*</span></label>
                            <input id="email-one" name="EMAIL" type="text" placeholder="E-Mail" class="form-control input-md" required>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="control-label" for="password-one">Password<span class="required">*</span></label>
                            <input id="password-one" name="PASSWORD" type="text" placeholder="Password" class="form-control input-md" required>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <input type="hidden" name="TYPELOGIN" value="C" />
                            <button name="SUBMITLOGIN" class="btn tp-btn-primary tp-btn-lg">Login</button>
                            <a href="<?php echo base_url().'login/forgetpassword' ?>" class="pull-right"> <small>Forgot Password ?</small></a> </div>
                    </form>
                </div>
            </div>
            <div class="well-box social-login"> <a href="#" class="btn facebook-btn"><i class="fa fa-facebook-square"></i>Facebook</a> <a href="#" class="btn twitter-btn"><i class="fa fa-twitter-square"></i>Twitter</a> <a href="#" class="btn google-btn"><i class="fa fa-google-plus-square"></i>Google+</a> </div>
        </div>
    </div>
</div>