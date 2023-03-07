<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laundry Serli M</title>
    <link rel="stylesheet" href="<?= base_url('landing/') ?>assets/vendors/animate.css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url('landing/') ?>assets/vendors/slick-carousel/slick.css">
    <link rel="stylesheet" href="<?= base_url('landing/') ?>assets/vendors/slick-carousel/slick-theme.css">
    <link rel="stylesheet" href="<?= base_url('landing/') ?>assets/css/style.css">
    <script src="<?= base_url('landing/') ?>assets/vendors/jquery/jquery.min.js"></script>
    <script src="<?= base_url('landing/') ?>assets/js/loader.js"></script>
</head>

<body>
    <div class="oleez-loader"></div>
    <header class="oleez-header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- <a class="navbar-brand" href="index.html"><img src="<?= base_url('landing/') ?>assets/images/Logo_2.svg" alt="Oleez"></a> -->
            <ul class="nav nav-actions d-lg-none ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#!" data-toggle="searchModal">
                        <img src="<?= base_url('landing/') ?>assets/images/search.svg" alt="search">
                    </a>
                </li>
                <li class="nav-item nav-item-cart">
                    <a class="nav-link" href="#!">
                        <span class="cart-item-count">0</span>
                        <img src="<?= base_url('landing/') ?>assets/images/shopping-cart.svg" alt="cart">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#!" data-toggle="offCanvasMenu">
                        <img src="<?= base_url('landing/') ?>assets/images/social icon@2x.svg" alt="social-nav-toggle">
                    </a>
                </li>
            </ul>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#oleezMainNav"
                aria-controls="oleezMainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </header>

    <main>
        <section>
            <div class="container wow fadeIn">
                <div id="oleezLandingCarousel" class="oleez-landing-carousel carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <img src="<?= base_url('landing/') ?>assets/images/logo3.jpeg" alt="First slide" class="w-100">
                            <div class="carousel-caption">
                                <h2 data-animation="animated fadeInRight"><span>Laundry</span></h2>
                                <h2 data-animation="animated fadeInRight"><span>Serli M</span></h2>
                                <a href="<?= base_url('auth') ?>" class="carousel-item-link" data-animation="animated fadeInRight">LOGIN</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="<?= base_url('landing/') ?>assets/images/logo4.jpeg" alt="Second slide" class="w-100">
                            <div class="carousel-caption">
                                <h2 data-animation="animated fadeInRight"><span>Laundry</span></h2>
                                <h2 data-animation="animated fadeInRight"><span>Serli M</span></h2>
                                <a href="<?= base_url('auth') ?>" class="carousel-item-link" data-animation="animated fadeInRight">LOGIN</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="<?= base_url('landing/') ?>assets/images/logo3.jpeg" alt="Third slide" class="w-100">
                            <div class="carousel-caption">
                                <h2 data-animation="animated fadeInRight"><span>Laundry</span></h2>
                                <h2 data-animation="animated fadeInRight"><span>Serli M</span></h2>
                                <a href="<?= base_url('auth') ?>" class="carousel-item-link" data-animation="animated fadeInRight">LOGIN</a>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="<?= base_url('landing/') ?>assets/images/serli2.jpeg" alt="Fourth slide" class="w-100">
                            <div class="carousel-caption">
                                <h2 data-animation="animated fadeInRight"><span>Laundry</span></h2>
                                <h2 data-animation="animated fadeInRight"><span>Serli M</span></h2>
                                <a href="<?= base_url('auth') ?>" class="carousel-item-link" data-animation="animated fadeInRight">LOGIN</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="oleez-landing-section oleez-landing-section-about">
            <div class="container">
                <div class="oleez-landing-section-content">
                    <div class="oleez-landing-section-verticals wow fadeIn">
                        <span class="number">01</span> <img src="<?= base_url('landing/') ?>assets/images/Logo_2.svg" alt="ollez" height="12px">
                    </div>
                    <div class="row landing-about-content wow fadeInUp">
                        <div class="col-md-6">
                            <h2>Kami membantu memberi sebuah solusi dari masalah yang anda hadapi</h2>
                        </div>
                        <div class="col-md-6">
                            <p>Laundry memberi kemudahan anda dalam menjaga kebersihan dalam sehari hari anda, seperti kebersihan pakaian, bed cover, gorden, karpet, Dll.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 landing-about-feature wow fadeInUp">
                            <img src="<?= base_url('landing/') ?>assets/images/icon_1.svg" alt="document" class="about-feature-icon">
                            <h5 class="about-feature-title">Lebih cepat dan murah</h5>
                            <p class="about-feature-description">Laundry Serli M memberikan layanan yang cepat, karena sudah melibatkan alat canggih dalam laundry kami dan lebih murah tentunya.</p> 
                        </div>
                        <div class="col-md-4 landing-about-feature wow fadeInUp">
                            <img src="<?= base_url('landing/') ?>assets/images/icon_2.svg" alt="document" class="about-feature-icon">
                            <h5 class="about-feature-title">Menjaga kenyamanan anda</h5>
                            <p class="about-feature-description">Kami menerima kritik dan saran apabila ada pelayanan yang belum sesuai di hati anda</p>
                        </div>
                        <div class="col-md-4 landing-about-feature wow fadeInUp">
                            <img src="<?= base_url('landing/') ?>assets/images/icon_3.svg" alt="document" class="about-feature-icon">
                            <h5 class="about-feature-title">Barang dijamin aman</h5>
                            <p class="about-feature-description">Kami akan memberikan pelayanan yang baik dan menjaga keutuhan barang anda</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="oleez-footer wow fadeInUp">
        <div class="container">
            <div class="footer-content">
                <div class="row">
                    <div class="col-md-6">
                        <p class="footer-intro-text">Silahkan Hubungi Kami</p>
                        <nav class="footer-social-links">
                            <a href="#!">Fb</a>
                            <a href="#!">Tw</a>
                            <a href="#!">In</a>
                            <a href="#!">Be</a>
                        </nav>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6 footer-widget-text">
                                <h6 class="widget-title">Whatsapp</h6>
                                <p class="widget-content">+62 895 3262 91138</p>
                            </div>
                            <div class="col-md-6 footer-widget-text">
                                <h6 class="widget-title">Pertanyaan</h6>
                                <p class="widget-content">serlimargareta922@gmail.com</p>
                            </div>
                            <div class="col-md-6 footer-widget-text">
                                <h6 class="widget-title">Tempat</h6>
                                <p class="widget-content">Jember, Jawa Timur<br> Semboro</p>
                            </div>
                            <div class="col-md-6 footer-widget-text">
                                <h6 class="widget-title">Jam Kerja</h6>
                                <p class="widget-content">Senin-Jumat: 08:00 - 15:00 <br> Sabtu-Minggu: 10:00 - 16:00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-text">
                <p class="mb-md-0">©  2023, oleez Theme. Made with passion by <a href="https://www.bootstrapdash.com" target="_blank" rel="noopener noreferrer" class="text-reset">BootstrapDash</a>.</p>
                <p class="mb-0">All right reserved.</p>
            </div>
        </div>
    </footer>

    <!-- Modals -->
    <!-- Full screen search box -->
    <script src="<?= base_url('landing/') ?>assets/vendors/popper.js/popper.min.js"></script>
    <script src="<?= base_url('landing/') ?>assets/vendors/wowjs/wow.min.js"></script>
    <script src="<?= base_url('landing/') ?>assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url('landing/') ?>assets/vendors/slick-carousel/slick.min.js"></script>
    <script src="<?= base_url('landing/') ?>assets/js/main.js"></script>
    <script src="<?= base_url('landing/') ?>assets/js/landing.js"></script>
    <script>
        new WOW({mobile: false}).init();
    </script>
</body>


</html>