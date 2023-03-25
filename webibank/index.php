
<?php include './inc/header.php';?>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <?php include './commons/navbar.php';?>

        <!-- About Start -->
        <?php include './commons/about.php';?>
        <!-- About End -->

        <!-- Process Start -->
        <?php include './commons/howitworks.php';?>
        <!-- Process Start -->

        <!-- Screenshot Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="text-primary-gradient fw-medium">More</h5>
                        <h1 class="mb-4">User Friendly interface And Very Easy To Use Finance App</h1>
                        <p class="mb-4">
                            Webi is Africa’s first Blockchain powered digital bank designed to meet the needs of today's digital economy.
                        </p>
                        <p><i class="fa fa-check text-primary-gradient me-3"></i>Cross border and real time capability.</p>
                        <p><i class="fa fa-check text-primary-gradient me-3"></i>Stress free operations.</p>
                        <p class="mb-4"><i class="fa fa-check text-primary-gradient me-3"></i>100% reliable.</p>
                        <a href="" class="btn btn-primary-gradient py-sm-3 px-4 px-sm-5 rounded-pill mt-3">Read More</a>
                    </div>
                    <div class="col-lg-4 d-flex justify-content-center justify-content-lg-end wow fadeInUp" data-wow-delay="0.3s">
                        <div class="owl-carousel screenshot-carousel">
                            <img class="img-fluid" src="assets/img/screenshot-1.png" alt="">
                            <img class="img-fluid" src="assets/img/screenshot-2.png" alt="">
                            <img class="img-fluid" src="assets/img/screenshot-3.png" alt="">
                            <img class="img-fluid" src="assets/img/screenshot-4.png" alt="">
                            <img class="img-fluid" src="assets/img/screenshot-5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Screenshot End -->


        <!-- Features Start -->
        <?php include './commons/features.php';?>
        <!-- Features End -->


        <!-- Download Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <img class="img-fluid wow fadeInUp" data-wow-delay="0.1s" src="assets/img/about.png">
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h5 class="text-primary-gradient fw-medium">Download</h5>
                        <h1 class="mb-4">Download The WEBIBANK App Now.</h1>
                        <p class="mb-4">
                            Whether you are an individual, a business, or an organization, our blockchain-powered 
                            banking services can help you manage your finances more efficiently and securely.
                        </p>
                        <div class="row g-4">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <a href="" class="d-flex bg-primary-gradient rounded py-3 px-4">
                                    <i class="fab fa-apple fa-3x text-white flex-shrink-0"></i>
                                    <div class="ms-3">
                                        <p class="text-white mb-0">Available On</p>
                                        <h5 class="text-white mb-0">App Store</h5>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                <a href="" class="d-flex bg-secondary-gradient rounded py-3 px-4">
                                    <i class="fab fa-android fa-3x text-white flex-shrink-0"></i>
                                    <div class="ms-3">
                                        <p class="text-white mb-0">Available On</p>
                                        <h5 class="text-white mb-0">Play Store</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Download End -->

        <!-- Testimonial Start -->
        <!-- Testimonial End -->


        <!-- Contact Start -->
        <?php include './commons/contact.php';?>
        <!-- Contact End -->
        

        <!-- Footer Start -->
        <?php include './commons/bottom_footer.php';?>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-lg-square back-to-top pt-2"><i class="bi bi-arrow-up text-white"></i></a>
    </div>

<?php include './inc/footer.php';?>