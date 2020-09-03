<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Вагонный сервис</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <link href="assets/css/style.css" rel="stylesheet">

</head>
<style>
    #container {
        height: 500px;
        min-width: 310px;
        max-width: 800px;
        margin: 0 auto;
    }
    .loading {
        margin-top: 10em;
        text-align: center;
        color: gray;
    }
    .contact-send {
        width: 100%;
        border-top: 3px solid #F49D44;
        border-bottom: 3px solid #F49D44;
        padding: 30px;
        background-color: #f9f9fa;
    }

</style>
<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto">
            <a href="{{route('home')}}" style="font-size: 14px">
                <img src="/assets/img/logo.png" width="80" height="37" alt="logo">

                Вагонный Сервис
            </a>
        </h1>
        <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="{{route('home')}}">О компании</a></li>
                <li><a href="{{route('home')}}#about">Ремонт по заявкам</a></li>
                <li><a href="{{route("managers")}}">Руководство</a></li>
                <li><a href="{{route("docs")}}">Документы</a></li>
                <li><a href="{{route('home')}}/#contact">Контакты</a></li>

            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
@yield("content")

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">

        <div class="container">

            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <img src="/assets/img/logo.png" width="152" height="102" alt="logo">

                    <br>
                    <span style="font-family: Montserrat,serif;font-style: normal;font-size: 24px; color: white">Вагонный Сервис</span>

                </div>
                <div class="col-md-7 col-sm-12">
                    <div class="text-left text-white" style="font-size: 16px; padding-left: 80px">
                        <p>Телефон: +7 778 995 9862</p>
                        <p>e-mail: random@email.com</p>
                        <p>Адрес: г. Нур-Султан, улица Кунаева 10, 15 этаж</p>
                    </div>

                </div>
                <div class="col-md-2 col-sm-12">
                    <div class="social-links">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <strong><span>Вагонный сервис</span></strong>. All Rights Reserved
        </div>
{{--        <div class="credits">--}}
{{--            Разработано веб-студией <a href="https://idl.kz">IDL</a>--}}
{{--        </div>--}}
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src="/assets/js/mapdata.js"></script>
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script src="/assets/js/map.js"></script>
<script src="/assets/js/jquery.inputmask.min.js"></script>
<script src="/assets/js/inputmask.binding.js"></script>

</body>

</html>
