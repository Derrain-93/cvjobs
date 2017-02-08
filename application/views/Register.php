    <!-- Page Content -->
    <div class="container-fluid">
        <div class="content">
            <div class="row-fluid">
                <div class="login-wrapper">
                    <div class="col-lg-6 col-lg-offset-3">
                        <?php echo $error ?>
                        
                        <?php echo form_open('Login/authenticate', 'class="form-horizontal"'); ?>
                        
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="compName">Company Name:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="compName" name="compName" placeholder="Enter Company Name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="compLoc">Company Location:</label>
                                <div class="col-sm-8"> 
                                    <input type="text" class="form-control" id="compLoc" name="compLoc" placeholder="Enter Company Location" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="compEmail">Company Email:</label>
                                <div class="col-sm-8"> 
                                    <input type="email" class="form-control" id="compEmail" name="compEmail" placeholder="Enter Company Email Address" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="compTel">Company Telephone:</label>
                                <div class="col-sm-8"> 
                                    <input type="number" class="form-control" id="compTel" name="compTel" placeholder="Enter Company Telephone Number" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4" for="compWeb">Company Website:</label>
                                <div class="col-sm-8"> 
                                    <input type="text" class="form-control" id="compWeb" name="compWeb" placeholder="Enter Company Website">
                                </div>
                            </div>
                            <div class="form-group"> 
                                <div class="col-sm-offset-4 col-sm-8">
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