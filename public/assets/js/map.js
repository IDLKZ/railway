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
        text: 'Карта Казахстана',
        style: {
            fontSize:"30px",
            fontWeight: 'bold'
        }
    },
    tooltip: {
        enabled: false
    },

    plotOptions: {
        series: {
            point: {
                events: {
                    mouseOver: function () {
                        let cities = {
                            1: "Кызылорда",
                            2: "Алматы",
                            4: "Костанай",
                            5: "Северный Казахстан",
                            6: "Павлодар",
                            7: "Нурсултан",
                            8: "Жамбыл",
                            9: "Восточный Казахстан",
                            10: "Атырау",
                            11: "Мангистау",
                            12: "Алматы",
                            13: "Актобе",
                            14: "Западный Казахстан",
                            15: "Южный Казахстан",
                            16: "Караганда"
                        };
                        let title = this.x == 6 ? "<b>Экибастуз-2</b>*<br>" + "Механизированный пункт подготовки вагонов<br>" + "<b>Экибастуз-2</b><br>" + "Текущий отцепочный ремонт ТОР-1<br>" + "<b>Экибастуз-2</b><br>" + "Текущий отцепочный ремонт ТОР-2<br>" + "<b>Павлодар</b><br>" + "Механизированный пункт ремонта вагонов" : "Отсутствует";
                        $(".city").html(cities[this.x])
                        $(".office").html(title)

                    },
                    renderTo:function (){alert("hello")}
                }
            },
            events: {
                mouseOut: function () {

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
        color: "#D9D9D9",
        name: "",
        states: {
            hover: {
                color: '#FEA33A',

            }
        },
        dataLabels: {

            enabled: true,
            format:"{point.name}"

        }
    }]
});

$(".highcharts-credits").css({"display":"none"})
