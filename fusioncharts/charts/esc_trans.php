
FusionCharts.ready(function(){
    var revenueChart = new FusionCharts({
    type: "column2d",
    renderAt: "chartContainer",
    width: "1200",
    height: "300",
    dataFormat: "json",
    dataSource: {
    "chart": {
    "caption": "Single Click Transactions Last Hour",
    "subCaption": "SC",
    "xAxisName": "Time",
    "yAxisName": "Amount",
    "canvasBgAlpha": "0",
    "bgColor": "EEEEEE,CCCCCC",
    "bgratio": "60,40",
    "bgAlpha": "70,80",
    "theme": "ocean"
    },
"data": [
                    {
                        "label": "<?php echo $time1;?>",
                        "value": "320000"
                        },
                    {
                        "label": "14:10",
                        "value": "110000"
                        },
                    {
                        "label": "14:20",
                        "value": "720000"
                        },
                    {
                        "label": "14:30",
                        "value": "190000"
                        },
                    {
                        "label": "14:40",
                        "value": "490000"
                        },
                    {
                        "label": "14:50",
                        "value": "310000"
                        },
                    {
                        "label": "15:00",
                        "value": "280000"
                        }
]
}

});
revenueChart.render("chartContainer2");
});


