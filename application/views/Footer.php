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
                        <a href="#"><img src="<?php echo base_url('Assets/img/Mobile App/PlayStore.png') ?>", alt="Play Store" /></a>
                    </div>
                    <div class="row">
                        <br />
                    </div>
                    <div class="row">
                        <a href="#"><img src="<?php echo base_url('Assets/img/Mobile App/AppStore.png') ?>" alt="App Store" /></a>
                    </div>
                    <div class="row">

                    </div>
                </div>
            </div>
            <!--<div class="row">
                    <div class="col-lg-3">
                            <a href="#"><p>About Us</p></a>
                    </div>
                    <div class="col-lg-3">
                            <a href="#"><p>Job Seeker Login</p></a>
                    </div>
                    <div class="col-lg-3">
                            <a href="#"><p>Advertise with Us</p></a>
                    </div>
                    <div class="col-lg-3">
                            <a href="#"><img src="img/Mobile App/PlayStore.png" alt="Play Store" /></a>
                    </div>
            </div>
            <div class="row">
                    <div class="col-lg-3">
                            <a href="#"><p>Contact Us</p></a>
                    </div>
                    <div class="col-lg-3">
                            <a href="#"><p>CV/Career Advise</p></a>
                    </div>
                    <div class="col-lg-3">
                            <a href="#"><p>Contact Us for Advertise</p></a>
                    </div>
                    <div class="col-lg-3">
                            
                    </div>
            </div>
            <div class="row">
                    <div class="col-lg-3">
                            <a href="#"><p>Terms and Conditions</p></a>
                    </div>
                    <div class="col-lg-3">
                            <a href="#"><p>Find Foreign Jobs</p></a>
                    </div>
                    <div class="col-lg-3">
                            <a href="#"><p>Recruiter Advise</p></a>
                    </div>
                    <div class="col-lg-3">
                            <a href="#"><img src="img/Mobile App/AppStore.png" alt="App Store" /></a>
                    </div>
            </div>
            <div class="row">
                    <div class="col-lg-3">
                            <a href="#"><p>Careers at CVJobs.lk</p></a>
                    </div>
                    <div class="col-lg-3">
                            <a href="#"><p>Find Course</p></a>
                    </div>
                    <div class="col-lg-3">
                            <a href="#"><p>Registered Recruiters</p></a>
                    </div>
                    <div class="col-lg-3">
                            
                    </div>
            </div>-->
        </footer>
    </div>
    <!-- /.container -->

<!-- jQuery -->
<script src="<?php echo base_url('Assets/js/jquery.js') ?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url('Assets/js/bootstrap.min.js') ?>"></script>

<!-- Moment JavaScript -->
<script src="<?php echo base_url('Assets/js/moment.min.js') ?>"></script>

<!-- jQuery UI Datepicker JavaScript -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!-- OwlCarousel2 js -->
<script src="<?php echo base_url('Assets/js/owl.carousel.js') ?>"></script>

<!-- Script to Activate the Carousel -->
<script>
    $(document).ready(function () {
        var owl = $('.owl-carousel');

        owl.owlCarousel({
            items: 4,
            loop: true,
            margin: 1,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                200: {
                    items: 1,
                    nav: false
                },
                400: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 2,
                    nav: false
                },
                800: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: false,
                    loop: false
                },
                1200: {
                    items: 3,
                    nav: false,
                    loop: false
                }
            }
        });
    });

    

    $(function () {
        $( "#openDate" ).datepicker({
            dateFormat: 'dd-mm-yy'
        });

        $( "#closeDate" ).datepicker({
            dateFormat: 'dd-mm-yy'
        });
    });
</script>

</body>

</html>