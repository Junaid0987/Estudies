
     <!-- Footer Start -->
     <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">Quick Link</h4>
                    <a class="btn btn-link" href="index.php">Home</a>
                    <a class="btn btn-link" href="about.php">About Us</a>
                    <a class="btn btn-link" href="contact.php">Contact Us</a>
                    <a class="btn btn-link" href="feedback.php">Feedback</a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">Contact</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>METRO STAR GATE, APTECH, KARACHI.</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@CodeDCode.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-primary btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-primary btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-white mb-3">Gallery</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="<?php echo $url;?>img/course-1.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="<?php echo $url;?>img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="<?php echo $url;?>img/course-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="<?php echo $url;?>img/course-2.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="<?php echo $url;?>img/course-3.jpg" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="<?php echo $url;?>img/course-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    
    
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo $url;?>lib/wow/wow.min.js"></script>
    <script src="<?php echo $url;?>lib/easing/easing.min.js"></script>
    <script src="<?php echo $url;?>lib/waypoints/waypoints.min.js"></script>
    <script src="<?php echo $url;?>lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?php echo $url;?>js/main.js"></script>
    <script>
        $(document).ready(function() {
            $("[href]").each(function() {
                if (this.href == window.location.href) {
                    $(this).addClass("active");
                }
            });
        });
    </script>
</body>
</html>