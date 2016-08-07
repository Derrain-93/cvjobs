<!-- jQuery -->
<script src="<?php echo base_url('Assets/js/jquery.js') ?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url('Assets/js/bootstrap.min.js') ?>"></script>

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
</script>

</body>

</html>