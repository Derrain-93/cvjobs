    <!-- Page Content -->
    <div class="container-fluid">
        <div class="content">
            <div class="row-fluid">
                <div class="login-wrapper">
                    <div class="col-lg-6 col-lg-offset-3">
                        <?php echo $error ?>
                        
                        <?php echo form_open('Login/authenticate', 'class="form-horizontal"'); ?>
                        
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Password:</label>
                                <div class="col-sm-10"> 
                                    <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password">
                                </div>
                            </div>
                            <div class="form-group"> 
                                <div class="col-sm-offset-2 col-sm-10">
                                    <label class="control controlCheckbox">
                                        <input type="checkbox" />Remember me
                                        <div class="controlIndicator"></div>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group"> 
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default send-btn">Submit</button>
                                </div>
                            </div>
                        
                        <?php form_close() ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->