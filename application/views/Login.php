<div class="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">CVjobs.lk</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <a href="#">Jobs</a>
                    </li>
                    <li>
                        <a href="#">CV/Career Advise</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                    <li>
                        <a href="#">Recruiter Area</a>
                    </li>
                    <li>
                        <a href="#"><button type="button" class="btn btn-default btn-sm btn-red">Find Course</button></a>
                    </li>
                    <li>
                        <a href="#"><button type="button" class="btn btn-default btn-sm">All Foreign Jobs</button></a>
                    </li>
                    <li>
                        <span>Job Seekers :</span>
                    </li>
                    <li>
                        <a href="#">Saved Jobs</a>
                    </li>
                    <li>
                        <a href="#">Sign In</a>
                    </li>
                    <li>
                        <a href="#">Register</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container-fluid">
        <div class="content">
            <div class="row-fluid">
                <div class="login-wrapper">
                    <div class="col-lg-6 col-lg-offset-3">
                        
                        <?php echo form_open('LoginController/authenticate', 'class="form-horizontal"'); ?>
                        
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Password:</label>
                                <div class="col-sm-10"> 
                                  <input type="password" class="form-control" id="pwd" placeholder="Enter password">
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
