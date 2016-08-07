    <!-- Page Content -->
    <div class="container-fluid">
        <div class="content">
            <div class="row-fluid">
                <div class="login-wrapper">
                    <div class="col-lg-6 col-lg-offset-3">
                        <?php 
//Access them like so
echo $error ?>
                        
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

    <div class="container footer-bg">
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-3">
                    <h4>CVJobs</h4>
                    <div class="row">
                        <a href="#"><p>About Us</p></a>
                    </div>
                    <div class="row">
                        <a href="#"><p>Contact Us</p></a>
                    </div>
                    <div class="row">
                        <a href="#"><p>Terms and Conditions</p></a>
                    </div>
                    <div class="row">
                        <a href="#"><p>Careers at CVJobs.lk</p></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Job Hunter</h4>
                    <div class="row">
                        <a href="#"><p>Job Seeker Login</p></a>
                    </div>
                    <div class="row">
                        <a href="#"><p>CV/Career Advise</p></a>
                    </div>
                    <div class="row">
                        <a href="#"><p>Find Foreign Jobs</p></a>
                    </div>
                    <div class="row">
                        <a href="#"><p>Find Course</p></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Recruiter</h4>
                    <div class="row">
                        <a href="#"><p>Advertise with Us</p></a>
                    </div>
                    <div class="row">
                        <a href="#"><p>Contact Us for Advertise</p></a>
                    </div>
                    <div class="row">
                        <a href="#"><p>Recruiter Advise</p></a>
                    </div>
                    <div class="row">
                        <a href="#"><p>Registered Recruiters</p></a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>CVJobs Mobile App</h4>
                    <div class="row">
                        <a href="#"><img src="Assets/img/Mobile App/PlayStore.png" alt="Play Store" /></a>
                    </div>
                    <div class="row">
                        <br />
                    </div>
                    <div class="row">
                        <a href="#"><img src="Assets/img/Mobile App/AppStore.png" alt="App Store" /></a>
                    </div>
                    <div class="row">

                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- /.container -->
</div>
