<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/">
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
        border-top: 3px solid #FFBF75;
        border-bottom: 3px solid #FFBF75;
        padding: 30px;
        background-color: #f9f9fa;
    }

</style>
<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto">
            <a href="{{route('home')}}" style="font-size: 16px">
                <img src="assets/img/logo-header.png" width="70" height="67" alt="">
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
                <div class="col-md-3 col-sm-12 pt-4">


                    <svg width="172" height="112" viewBox="0 0 452 317" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="34" y="102" width="264" height="89" fill="#332C24"/>
                        <path d="M452 158.5C452 246.037 380.589 317 292.5 317C240.977 317 195.16 292.724 166 255.053H197.161C221.719 279.002 255.374 293.772 292.5 293.772C367.68 293.772 428.625 233.208 428.625 158.5C428.625 83.7916 367.68 23.2284 292.5 23.2284C255.374 23.2284 221.719 37.9979 197.161 61.9467H166C195.16 24.2765 240.977 0 292.5 0C380.589 0 452 70.9629 452 158.5Z" fill="#FFBF75"/>
                        <path d="M71.7796 177.652C69.0182 177.652 66.7796 175.414 66.7796 172.652V118.833C66.7796 116.072 69.0182 113.833 71.7796 113.833H89.2208C91.9823 113.833 94.2208 116.072 94.2208 118.833V172.652C94.2208 175.414 91.9823 177.652 89.2208 177.652H71.7796Z" fill="#FFBF75"/>
                        <path d="M71.7796 177.652C69.0182 177.652 66.7796 175.414 66.7796 172.652V118.833C66.7796 116.072 69.0182 113.833 71.7796 113.833H89.2208C91.9823 113.833 94.2208 116.072 94.2208 118.833V172.652C94.2208 175.414 91.9823 177.652 89.2208 177.652H71.7796Z" fill="#FFBF75"/>
                        <path d="M102.291 177.652C99.5298 177.652 97.2912 175.414 97.2912 172.652V118.833C97.2912 116.072 99.5298 113.833 102.291 113.833H119.732C122.494 113.833 124.732 116.072 124.732 118.833V172.652C124.732 175.414 122.494 177.652 119.732 177.652H102.291Z" fill="#FFBF75"/>
                        <path d="M102.291 177.652C99.5298 177.652 97.2912 175.414 97.2912 172.652V118.833C97.2912 116.072 99.5298 113.833 102.291 113.833H119.732C122.494 113.833 124.732 116.072 124.732 118.833V172.652C124.732 175.414 122.494 177.652 119.732 177.652H102.291Z" fill="#FFBF75"/>
                        <path d="M212.824 177.652C210.062 177.652 207.824 175.414 207.824 172.652V118.833C207.824 116.072 210.062 113.833 212.824 113.833H230.265C233.026 113.833 235.265 116.072 235.265 118.833V172.652C235.265 175.414 233.026 177.652 230.265 177.652H212.824Z" fill="#FFBF75"/>
                        <path d="M212.824 177.652C210.062 177.652 207.824 175.414 207.824 172.652V118.833C207.824 116.072 210.062 113.833 212.824 113.833H230.265C233.026 113.833 235.265 116.072 235.265 118.833V172.652C235.265 175.414 233.026 177.652 230.265 177.652H212.824Z" fill="#FFBF75"/>
                        <path d="M243.719 177.652C240.958 177.652 238.719 175.414 238.719 172.652V118.833C238.719 116.072 240.958 113.833 243.719 113.833H261.16C263.922 113.833 266.16 116.072 266.16 118.833V172.652C266.16 175.414 263.922 177.652 261.16 177.652H243.719Z" fill="#FFBF75"/>
                        <path d="M243.719 177.652C240.958 177.652 238.719 175.414 238.719 172.652V118.833C238.719 116.072 240.958 113.833 243.719 113.833H261.16C263.922 113.833 266.16 116.072 266.16 118.833V172.652C266.16 175.414 263.922 177.652 261.16 177.652H243.719Z" fill="#FFBF75"/>
                        <path d="M274.039 177.652C271.277 177.652 269.039 175.414 269.039 172.652V118.833C269.039 116.072 271.277 113.833 274.039 113.833H288.793C291.555 113.833 293.793 116.072 293.793 118.833V172.652C293.793 175.414 291.555 177.652 288.793 177.652H274.039Z" fill="#FFBF75"/>
                        <path d="M300.318 191.068C297.774 191.068 295.712 189.006 295.712 186.462V118.439C295.712 115.895 297.774 113.833 300.318 113.833C302.861 113.833 304.923 115.895 304.923 118.439V186.462C304.923 189.006 302.861 191.068 300.318 191.068Z" fill="#FFBF75"/>
                        <path d="M32.3342 113.833C29.8436 113.833 27.8246 115.852 27.8246 118.343V186.558C27.8246 189.049 29.8436 191.068 32.3342 191.068C34.8248 191.068 36.8438 189.049 36.8438 186.558V118.343C36.8438 115.852 34.8248 113.833 32.3342 113.833Z" fill="#FFBF75"/>
                        <path d="M44.1465 113.833C41.3851 113.833 39.1465 116.072 39.1465 118.833V172.652C39.1465 175.414 41.3851 177.652 44.1465 177.652H58.9012C61.6626 177.652 63.9012 175.414 63.9012 172.652V118.833C63.9012 116.072 61.6626 113.833 58.9012 113.833H44.1465Z" fill="#FFBF75"/>
                        <path d="M33.9653 101.568C33.9653 99.8741 35.3382 98.5013 37.0317 98.5013H294.949C296.642 98.5013 298.015 99.8741 298.015 101.568C298.015 103.261 296.642 104.634 294.949 104.634H37.0317C35.3382 104.634 33.9653 103.261 33.9653 101.568Z" fill="#FFBF75"/>
                        <path d="M132.995 123.224C130.233 123.224 127.995 125.463 127.995 128.224V172.652C127.995 175.414 130.233 177.652 132.995 177.652H136.236C138.997 177.652 141.236 175.414 141.236 172.652V128.224C141.236 125.463 138.997 123.224 136.236 123.224H132.995Z" fill="#FFBF75"/>
                        <path d="M149.114 123.224C146.353 123.224 144.114 125.463 144.114 128.224V172.652C144.114 175.414 146.353 177.652 149.114 177.652H183.442C186.203 177.652 188.442 175.414 188.442 172.652V128.224C188.442 125.463 186.203 123.224 183.442 123.224H149.114Z" fill="#FFBF75"/>
                        <path d="M131.253 120.349C129.453 120.349 127.995 118.891 127.995 117.091C127.995 115.292 129.453 113.833 131.253 113.833H201.303C203.103 113.833 204.561 115.292 204.561 117.091C204.561 118.891 203.103 120.349 201.303 120.349H131.253Z" fill="#FFBF75"/>
                        <path d="M196.321 123.224C193.559 123.224 191.321 125.463 191.321 128.224V172.652C191.321 175.414 193.559 177.652 196.321 177.652H199.561C202.323 177.652 204.561 175.414 204.561 172.652V128.224C204.561 125.463 202.323 123.224 199.561 123.224H196.321Z" fill="#FFBF75"/>
                        <path d="M298.4 106.55C298.93 106.55 299.358 106.979 299.358 107.508C299.358 108.038 299.787 108.467 300.317 108.467H302.718C303.406 108.467 303.964 109.025 303.964 109.713C303.964 110.401 303.406 110.958 302.718 110.958H29.4541C28.7661 110.958 28.2084 110.401 28.2084 109.713C28.2084 109.025 28.7661 108.467 29.4541 108.467H31.7602C32.3422 108.467 32.8139 107.995 32.8139 107.413C32.8139 106.831 33.2861 106.359 33.8684 106.36L298.4 106.55Z" fill="#FFBF75"/>
                        <path d="M76.3748 201.608C76.3748 208.382 70.8763 213.874 64.0934 213.874C57.3106 213.874 51.8121 208.382 51.8121 201.608C51.8121 194.834 57.3106 189.343 64.0934 189.343C70.8763 189.343 76.3748 194.834 76.3748 201.608Z" fill="#FFBF75"/>
                        <path d="M282.088 201.608C282.088 208.382 276.589 213.874 269.807 213.874C263.024 213.874 257.525 208.382 257.525 201.608C257.525 194.834 263.024 189.343 269.807 189.343C276.589 189.343 282.088 194.834 282.088 201.608Z" fill="#FFBF75"/>
                        <path d="M38.7631 184.76C38.7631 181.999 41.0017 179.76 43.7631 179.76H288.986C291.747 179.76 293.986 181.999 293.986 184.76V188.176C293.986 190.937 291.747 193.176 288.986 193.176H43.7631C41.0017 193.176 38.7631 190.937 38.7631 188.176V184.76Z" fill="#FFBF75"/>
                        <path d="M102.089 201.608C102.089 208.382 96.5904 213.874 89.8076 213.874C83.0248 213.874 77.5262 208.382 77.5262 201.608C77.5262 194.834 83.0248 189.343 89.8076 189.343C96.5904 189.343 102.089 194.834 102.089 201.608Z" fill="#FFBF75"/>
                        <path d="M256.374 201.608C256.374 208.382 250.875 213.874 244.092 213.874C237.31 213.874 231.811 208.382 231.811 201.608C231.811 194.834 237.31 189.343 244.092 189.343C250.875 189.343 256.374 194.834 256.374 201.608Z" fill="#FFBF75"/>
                        <path d="M0.0830078 182.461C0.0830078 179.699 2.32158 177.461 5.08301 177.461H6.22375C8.21685 173.376 12.4146 170.561 17.2705 170.561V177.844H21.0977C23.8592 177.844 26.0977 180.083 26.0977 182.844V183.576C26.0977 186.338 23.8592 188.576 21.0977 188.576H17.2705V195.092C12.4146 195.092 8.21685 192.278 6.22375 188.193H5.08301C2.32158 188.193 0.0830078 185.954 0.0830078 183.193V182.461Z" fill="#FFBF75"/>
                        <path d="M323.73 192.026C318.642 192.026 314.518 187.907 314.518 182.827C314.518 177.746 318.642 173.628 323.73 173.628V170.561C318.723 170.561 314.416 173.553 312.504 177.844H311.442C308.796 177.844 306.651 179.989 306.651 182.635C306.651 185.281 308.796 187.426 311.442 187.426H312.341C314.163 191.921 318.575 195.092 323.73 195.092V192.026Z" fill="#FFBF75"/>
                        <path d="M0 221.174C0 218.412 2.23858 216.174 5 216.174H319.689C322.45 216.174 324.689 218.412 324.689 221.174V223.439C324.689 226.201 322.45 228.439 319.689 228.439H5C2.23857 228.439 0 226.201 0 223.439V221.174Z" fill="#FFBF75"/>
                        <path d="M411.458 158.068C411.458 225.771 356.465 280.656 288.629 280.656C258.336 280.656 230.604 269.711 209.187 251.567H288.629L369.761 204.818V111.319L288.629 64.5695H209.187C230.604 46.4258 258.336 35.481 288.629 35.481C356.465 35.481 411.458 90.3652 411.458 158.068Z" fill="#FFBF75"/>
                        <path d="M323.73 192.026C318.643 192.026 314.519 187.907 314.519 182.827C314.519 177.746 318.643 173.628 323.73 173.628V170.561C318.723 170.561 314.417 173.553 312.504 177.844H311.442C308.796 177.844 306.651 179.989 306.651 182.635C306.651 185.281 308.796 187.426 311.442 187.426H312.341C314.163 191.921 318.576 195.092 323.73 195.092V192.026Z" fill="#332C24"/>
                        <path d="M0.0830078 182.461C0.0830078 179.699 2.32158 177.461 5.08301 177.461H6.22375C8.21685 173.376 12.4146 170.561 17.2705 170.561V177.844H21.0977C23.8592 177.844 26.0977 180.083 26.0977 182.844V183.576C26.0977 186.338 23.8592 188.576 21.0977 188.576H17.2705V195.092C12.4146 195.092 8.21685 192.278 6.22375 188.193H5.08301C2.32158 188.193 0.0830078 185.954 0.0830078 183.193V182.461Z" fill="#332C24"/>
                        <path d="M76.3748 201.608C76.3748 208.382 70.8762 213.874 64.0934 213.874C57.3106 213.874 51.812 208.382 51.812 201.608C51.812 194.834 57.3106 189.343 64.0934 189.343C70.8762 189.343 76.3748 194.834 76.3748 201.608Z" fill="white"/>
                        <path d="M76.3748 201.608C76.3748 208.382 70.8762 213.874 64.0934 213.874C57.3106 213.874 51.812 208.382 51.812 201.608C51.812 194.834 57.3106 189.343 64.0934 189.343C70.8762 189.343 76.3748 194.834 76.3748 201.608Z" fill="#332C24"/>
                        <path d="M282.088 201.608C282.088 208.382 276.589 213.874 269.807 213.874C263.024 213.874 257.525 208.382 257.525 201.608C257.525 194.834 263.024 189.343 269.807 189.343C276.589 189.343 282.088 194.834 282.088 201.608Z" fill="white"/>
                        <path d="M282.088 201.608C282.088 208.382 276.589 213.874 269.807 213.874C263.024 213.874 257.525 208.382 257.525 201.608C257.525 194.834 263.024 189.343 269.807 189.343C276.589 189.343 282.088 194.834 282.088 201.608Z" fill="#332C24"/>
                        <path d="M102.089 201.608C102.089 208.382 96.5904 213.874 89.8075 213.874C83.0247 213.874 77.5262 208.382 77.5262 201.608C77.5262 194.834 83.0247 189.343 89.8075 189.343C96.5904 189.343 102.089 194.834 102.089 201.608Z" fill="white"/>
                        <path d="M102.089 201.608C102.089 208.382 96.5904 213.874 89.8075 213.874C83.0247 213.874 77.5262 208.382 77.5262 201.608C77.5262 194.834 83.0247 189.343 89.8075 189.343C96.5904 189.343 102.089 194.834 102.089 201.608Z" fill="#332C24"/>
                        <path d="M256.374 201.608C256.374 208.382 250.875 213.874 244.092 213.874C237.31 213.874 231.811 208.382 231.811 201.608C231.811 194.834 237.31 189.343 244.092 189.343C250.875 189.343 256.374 194.834 256.374 201.608Z" fill="white"/>
                        <path d="M256.374 201.608C256.374 208.382 250.875 213.874 244.092 213.874C237.31 213.874 231.811 208.382 231.811 201.608C231.811 194.834 237.31 189.343 244.092 189.343C250.875 189.343 256.374 194.834 256.374 201.608Z" fill="#332C24"/>
                        <path d="M0 221.174C0 218.412 2.23858 216.174 5 216.174H319.689C322.45 216.174 324.689 218.412 324.689 221.174V223.439C324.689 226.201 322.45 228.439 319.689 228.439H5C2.23857 228.439 0 226.201 0 223.439V221.174Z" fill="white"/>
                        <path d="M0 221.174C0 218.412 2.23858 216.174 5 216.174H319.689C322.45 216.174 324.689 218.412 324.689 221.174V223.439C324.689 226.201 322.45 228.439 319.689 228.439H5C2.23857 228.439 0 226.201 0 223.439V221.174Z" fill="#332C24"/>
                    </svg>




                    <br>
                    <h1 style="font-size: 16px; font-weight: 700; letter-spacing: 0.5px; color: white; margin-top: 15px">Вагонный Сервис</h1>

                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="social-links">
{{--                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>--}}
{{--                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>--}}
{{--                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>--}}
                    </div>
                </div>
                <div class="col-md-5 col-sm-12 pr-0 pl-5">
                    <div class="text-left text-white" style="font-size: 16px; padding-left: 40px">
                        <p><i class="docs-icon icofont-phone mr-2" style="font-size: 28px"></i>
                            +7 778 995 9862</p>
                        <p><i class="docs-icon icofont-envelope mr-2" style="font-size: 28px"></i>
                            random@email.com</p>
                        <p><i class="docs-icon icofont-location-pin mr-2" style="font-size: 28px"></i>
                            г. Нур-Султан, улица Кунаева 10, 15 этаж</p>
                    </div>

                </div>
            </div>

        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <strong><span >Вагонный сервис</span></strong>. All Rights Reserved
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
