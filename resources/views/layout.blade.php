<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Сайт 1</title>
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

</style>
<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo mr-auto"><a href="index.html">ЛОГО</a></h1>
        <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a> -->

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="index.html">О компании</a></li>
                <li><a href="#">Ремонт по заявкам</a></li>
                <li><a href="{{route("managers")}}">Руководство</a></li>
                <li><a href="{{route("docs")}}">Документы</a></li>
                <li><a href="#">Контакты</a></li>

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

            <div class="social-links">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>

        </div>
    </div>

    <div class="container footer-bottom clearfix">
        <div class="copyright">
            &copy; Copyright <strong><span>Имя компании</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://fb.com/dinmukhamed.tezekbayev">Dinmukhamed</a>
        </div>
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
<script>

    var data = [
        ['kz-5085', 120],
        ['kz-qo', 1],
        ['kz-ac', 2],
        ['kz-as', 3],
        ['kz-qs', 4],
        ['kz-nk', 5],
        ['kz-pa', 6],
        ['kz-am', 7],
        ['kz-zm', 8],
        ['kz-ek', 9],
        ['kz-ar', 10],
        ['kz-mg', 11],
        ['kz-aa', 12],
        ['kz-at', 13],
        ['kz-wk', 14],
        ['kz-sk', 15],
        ['kz-qg', 16]
    ];

    // Create the chart
    Highcharts.mapChart('container', {
        chart: {
            map: 'countries/kz/kz-all',
        },

        title: {
            text: 'Где мы работаем'
        },
        tooltip: {
            enabled:false
        },
        plotOptions: {
            series: {
                point: {
                    events: {
                        mouseOver: function () {
                            let cities={1:"Кызылорда",2:"Алматы",4:"Костанай",5:"Северный Казахстан", 6:"Павлодар",7:"Нурсултан",8:"Жамбыл",9:"Восточный Казахстан",10:"Атырау", 11:"Мангистау", 12:"Алматы", 13:"Актобе", 14:"Западный Казахстан", 15:"Южный Казахстан",16:"Караганда"
                            };
                            let title = this.x == 6 ? "<b>Экибастуз-2</b>*<br>" + "Механизированный пункт подготовки вагонов<br>" + "<b>Экибастуз-2</b><br>" + "Текущий отцепочный ремонт ТОР-1<br>" + "<b>Экибастуз-2</b><br>" + "Текущий отцепочный ремонт ТОР-2<br>" + "<b>Павлодар</b><br>" + "Механизированный пункт ремонта вагонов" : "Отсутствует";
                            $(".city").html(cities[this.x])
                            $(".office").html(title)

                        }
                    }
                },
                events: {
                    mouseOut: function () {
                        console.log("bye!")
                    }
                }
            }
        },



        mapNavigation: {
            enabled: true,
            buttonOptions: {
                verticalAlign: 'bottom'
            }
        },

        // colorAxis: {
        //     min: 0
        // },

        series: [{
            data: data,
            color:"#D9D9D9",
            name:"" ,
            states: {
                hover: {
                    color: '#FEA33A',

                }
            },
            dataLabels: {
                enabled: false,
                format:""

            }
        }]
    });

</script>
</body>

</html>
