<script src="https://code.highcharts.com/maps/highmaps.js"></script>
<script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
<script src="https://code.highcharts.com/mapdata/countries/kz/kz-all.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
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
<div id="container"></div>
<div class="city"></div>
<div class="office"></div>
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
