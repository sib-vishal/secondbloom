<?php $page = 'contact'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us |</title>
    <meta name="description" content="" />
    <?php include 'include/head-links.php'; ?>
    <meta property="og:url" content="<?php echo $page_url ?>">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="images/logo.png">
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="<?php echo $page_url ?>">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="images/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
</head>

<body>
    <?php include 'include/header.php'; ?>
    <div class="wrapper">
        <div class="contact-banner">
            <div class="containerFull w-100">
                <div class="banner-inner  ">
                    <h1 class="fontHeading heading text-white fontWeight800 ">
                        Contact Us

                    </h1>
                    <!-- <p class="mt-3 text-white col-lg-5">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, repudiandae unde beatae accusamus
                        laudantium fuga magni vel inventore perferendis ullam explicabo, nesciunt debitis. Itaque dicta
                        repudiandae eos deleniti cum nisi.z
                    </p> -->

                </div>
            </div>



        </div>
        <section>
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-6">
                        <small class="fontWeight600">
                            GET IN TOUCH
                        </small>
                        <h4 class="mt-3 fontHeading  heading ">
                            Contact with us for <span class="text_primary">Visa Inquiry</span>
                        </h4>

                        <div>


                            <img class="w-75 mx-auto d-block"
                                src="images/travel-landmark-concept-poster-print_1284-13615.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <form action="">
                            <div class="form_grid">
                                <div class="form-floating mb-1">
                                    <input type="text" class="form-control" id="name" placeholder="name">
                                    <label for="name">Name *</label>
                                </div>

                                <div class="form-floating mb-1">
                                    <input type="tel" class="form-control" id="phoneno" placeholder="phone no">
                                    <label for="phoneno">Contact No. *</label>
                                </div>
                                <div class="form-floating mb-1">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Email Address *</label>
                                </div>
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="Country" placeholder="Country">
                                    <label for="Country">Country * </label>
                                </div>
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="visa_type" placeholder="Visa Type">
                                    <label for="visa_type">Visa Type</label>
                                </div>

                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingPassword"
                                        placeholder="Expected Travel (if known)">
                                    <label for="floatingPassword">Expected Travel (if known)</label>
                                </div>
                            </div>
                            <div class="form-floating mt-3">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                    style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Additional Information </label>
                            </div>
                            <button class="btn_1 border-0 w-100 mt-4">
                                Submit
                            </button>


                        </form>
                    </div>

                </div>

            </div>

        </section>
        <section class="" style="background:#f6f6f6">
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="leftContact">
                            <div data-aos="zoom-in-up" class="aos-init mt-4 aos-animate">
                                <iframe class="w-100 shadow "
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7737332.333742825!2d71.46959102657826!3d18.753791478416602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcfc41e9c9cd6f9%3A0x1b2f22924be04fb6!2sMaharashtra!5e0!3m2!1sen!2sin!4v1724676484004!5m2!1sen!2sin"
                                    width="600" height="460" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>




        <?php include 'include/footer.php'; ?>
    </div>
    <?php include 'include/footer-links.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script type="text/javascript">
        Fancybox.bind("[data-fancybox]", {});
    </script>
</body>

</html>