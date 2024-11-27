<?php $page = 'gallery'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gallery | Second Bloom</title>
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
                        Our Gallery
                    </h1>
                    <p class="mt-3 text-white-50 fontWeight600">
                        Home / Our Gallery
                    </p>
                </div>
            </div>
        </div>
        <section>
            <div class="containerFull">
                <div class="gallery_grid">
                    <div class="grid_item">
                        <a href="images/gallery/gallery (1).webp" data-fancybox="gallery" data-caption="Image 1">
                            <img src="images/gallery/gallery (1).webp" alt="Gallery Image 1">
                        </a>
                    </div>
                    <div class="grid_item">
                        <a href="images/gallery/gallery (2).webp" data-fancybox="gallery" data-caption="Image 2">
                            <img src="images/gallery/gallery (2).webp" alt="Gallery Image 2">
                        </a>
                    </div>
                    <div class="grid_item">
                        <a href="images/gallery/gallery (3).webp" data-fancybox="gallery" data-caption="Image 3">
                            <img src="images/gallery/gallery (3).webp" alt="Gallery Image 3">
                        </a>
                    </div>
                    <div class="grid_item">
                        <a href="images/gallery/gallery (4).webp" data-fancybox="gallery" data-caption="Image 4">
                            <img src="images/gallery/gallery (4).webp" alt="Gallery Image 4">
                        </a>
                    </div>
                    <div class="grid_item">
                        <a href="images/gallery/gallery (5).webp" data-fancybox="gallery" data-caption="Image 5">
                            <img src="images/gallery/gallery (5).webp" alt="Gallery Image 5">
                        </a>
                    </div>
                    <div class="grid_item">
                        <a href="images/gallery/gallery (6).webp" data-fancybox="gallery" data-caption="Image 6">
                            <img src="images/gallery/gallery (6).webp" alt="Gallery Image 6">
                        </a>
                    </div>
                    <div class="grid_item">
                        <a href="images/gallery/gallery (7).webp" data-fancybox="gallery" data-caption="Image 7">
                            <img src="images/gallery/gallery (7).webp" alt="Gallery Image 7">
                        </a>
                    </div>
                    <div class="grid_item">
                        <a href="images/gallery/gallery (8).webp" data-fancybox="gallery" data-caption="Image 8">
                            <img src="images/gallery/gallery (8).webp" alt="Gallery Image 8">
                        </a>
                    </div>
                    <div class="grid_item">
                        <a href="images/gallery/gallery (9).webp" data-fancybox="gallery" data-caption="Image 9">
                            <img src="images/gallery/gallery (9).webp" alt="Gallery Image 9">
                        </a>
                    </div>
                    <div class="grid_item">
                        <a href="images/gallery/gallery (9).webp" data-fancybox="gallery" data-caption="Image 9">
                            <img src="images/gallery/gallery (9).webp" alt="Gallery Image 9">
                        </a>
                    </div>
                    <div class="grid_item">
                        <a href="images/gallery/gallery (9).webp" data-fancybox="gallery" data-caption="Image 9">
                            <img src="images/gallery/gallery (9).webp" alt="Gallery Image 9">
                        </a>
                    </div>
                    <div class="grid_item">
                        <a href="images/gallery/gallery (9).webp" data-fancybox="gallery" data-caption="Image 9">
                            <img src="images/gallery/gallery (9).webp" alt="Gallery Image 9">
                        </a>
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