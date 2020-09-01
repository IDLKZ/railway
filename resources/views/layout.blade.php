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
                <svg width="120" height="37" viewBox="0 0 282 232" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18 107C18 107 135 107 142 107C149 107 158.725 116.295 159.5 126L37 126C28.5 126 21.127 118.266 18 107Z" fill="#FEA33A"/>
                    <path d="M0 62.5002C0 62.5002 111 62.5 149 62.5002C187 62.5004 217 102.001 217 140.5V167.5H58.5C53.5 167.5 41.5 161.5 41.5 150H197.5C201.332 106.583 172 81.5002 149 81.5002H19C10.5 81.5002 3.12697 73.7659 0 62.5002Z" fill="#FEA33A"/>
                    <path d="M282 116C282 180.065 230.065 232 166 232C128.529 232 95.2072 214.233 74 186.664H96.6627C114.523 204.191 138.999 215 166 215C220.676 215 265 170.676 265 116C265 61.3238 220.676 17 166 17C138.999 17 114.523 27.8092 96.6627 45.3364H74C95.2072 17.767 128.529 0 166 0C230.065 0 282 51.935 282 116Z" fill="#FEA33A"/>
                </svg>
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
                    <svg width="152" height="102" viewBox="0 0 282 232" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18 107C18 107 135 107 142 107C149 107 158.725 116.295 159.5 126L37 126C28.5 126 21.127 118.266 18 107Z" fill="#FEA33A"/>
                        <path d="M0 62.5002C0 62.5002 111 62.5 149 62.5002C187 62.5004 217 102.001 217 140.5V167.5H58.5C53.5 167.5 41.5 161.5 41.5 150H197.5C201.332 106.583 172 81.5002 149 81.5002H19C10.5 81.5002 3.12697 73.7659 0 62.5002Z" fill="#FEA33A"/>
                        <path d="M282 116C282 180.065 230.065 232 166 232C128.529 232 95.2072 214.233 74 186.664H96.6627C114.523 204.191 138.999 215 166 215C220.676 215 265 170.676 265 116C265 61.3238 220.676 17 166 17C138.999 17 114.523 27.8092 96.6627 45.3364H74C95.2072 17.767 128.529 0 166 0C230.065 0 282 51.935 282 116Z" fill="#FEA33A"/>
                    </svg>
                    <br>
                    <span style="font-family: Montserrat,serif;font-style: normal;font-size: 24px; color: white">Вагонный Сервис</span>

                </div>
                <div class="col-md-7 col-sm-12">
                    <div class="text-left text-white" style="font-size: 16px; padding-left: 80px">
                        <p>Телефон: +77172123456</p>
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
            &copy; Copyright <strong><span>Имя компании</span></strong>. All Rights Reserved
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
</body>

</html>
