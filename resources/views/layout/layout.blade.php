<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bruce - Creative Multipurpose HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
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



</head>

<body>







<div id="container"></div>




















</body>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<script src="https://code.highcharts.com/mapdata/countries/kz/kz-all.js"></script>
<script>
$(".container").hover(function (){
   console.log("current")
});
</script>
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
                            let title = this.x == 6 ? "Экибастуз-2*\n" + "Механизированный пункт подготовки вагонов\n" + "Экибастуз-2\n" + "Текущий отцепочный ремонт ТОР-1\n" + "Экибастуз-2\n" + "Текущий отцепочный ремонт ТОР-2\n" + "Павлодар\n" + "Механизированный пункт ремонта вагонов" : "Отсутствует";
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
                    color: 'yellow',

                }
            },
            dataLabels: {
                enabled: true,
                format:""

            }
        }]
    });
</script>
</html>
