<?php require("./head_foot/header_1.inc.php"); ?>
<?php require("./php/transesc.php"); ?>
<script type="text/javascript">
   <?php echo 'FusionCharts.ready(function(){
        var revenueChart = new FusionCharts({
            type: "column2d",
            renderAt: "chartContainer",
            width: "1200",
            height: "300",
            dataFormat: "json",
            dataSource: {
                "chart": {
                    "caption": "ESC Transactions Last Hour",
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
                        "label": "'.$time1.'",
                        "value": "'.$amount6.'"
                    },
                    {
                        "label": "'.$time5.'",
                        "value": "'.$amount5.'"
                    },
                    {
                        "label": "'.$time4.'",
                        "value": "'.$amount4.'"
                    },
                    {
                        "label": "'.$time3.'",
                        "value": "'.$amount3.'"
                    },
                    {
                        "label": "'.$time2.'",
                        "value": "'.$amount2.'"
                    },
                    {
                        "label": "'.$time1.'",
                        "value": "'.$amount1.'"
                    }
                ]
            }

        });
        revenueChart.render("chartContainer");
    });'
?>

</script>

<div class="wrapper">

    <div id="chartContainer_header" align="center" class="chart2"> ESC Transactions Last Hour </div>
    <div id="chartContainer" align="center"></div>

</div>

<?php require("./head_foot/footer_1.inc.php"); ?>
