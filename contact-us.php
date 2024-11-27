<?php $page = 'contact'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us | Second Bloom</title>
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
    <div class="page-banner">
            <div class="banner-inner  ">
                <div class="containerFull w-100">
                    <h1 class="fontHeading heading text-white fontWeight600 ">
                        Contact Us
                    </h1>
                    <p class="mt-3 text-white-50 fontWeight600">
                        Home / Contact Us
                    </p>
                </div>
            </div>
        </div>
        <section class="">
            <div class="containerFull">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <small class="fontWeight600 text-white-50 ">
                            GET IN TOUCH
                        </small>
                        <h4 class="mt-3 fontHeading  heading text_primary ">
                            Contact with us for <span class="text_forth">Health Care Services</span>
                        </h4>

                        <p class="mt-3 pe-lg-5 ">
                            we are health service Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur
                            labore aperiam odit, alias assumenda ducimus.

                        </p>
                        <p class="mt-3 pe-lg-5 ">
                            we are health service Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur
                            labore aperiam odit, alias assumenda ducimus.

                        </p>

                        <div class="section-button section-button-left mt-5">

                            <a href="tel:0123456789">
                                <div class=" mt-4 mt-lg-0 me-lg-n4 py-3 px-4 bg_secondary d-flex align-items-center"
                                    style="width:fit-content">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white"
                                        style="width: 45px; height: 45px;">
                                        <i class="fa fa-phone-alt text_primary"></i>
                                    </div>
                                    <div class="ms-3">
                                        <!-- <p class="mb-1 text-white">Emergency 24/7</p> -->
                                        <h5 class="m-0 text-secondary text-light">+012 345 6789</h5>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                    <div class="col-lg-6 ps-5">
                        <form action="">
                            <div class="form_grid">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="name" placeholder="name">
                                    <label for="name">Name *</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <input type="tel" class="form-control" id="phoneno" placeholder="phone no">
                                    <label for="phoneno">Contact No. *</label>
                                </div>
                                <div class="form-floating ">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="name@example.com">
                                    <label for="floatingInput">Email Address *</label>
                                </div>

                            </div>
                            <div class="form-floating mt-3">
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                    style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Additional Information </label>
                            </div>
                            <button type="submit" class="btn_1 border-0 w-100 mt-4">
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