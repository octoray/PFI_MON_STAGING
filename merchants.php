<?php require("./head_foot/header_1.inc.php"); ?>

<script type="text/javascript">

  <?php echo  'FusionCharts.ready(function(){
        var myChart = new FusionCharts({
            "type": "hled",
            "width": "500",
            "height": "200",
            "dataFormat": "jsonurl",
            "dataSource": {
                    "chart": {
                        "caption": "Customer satisfaction score",
                        "subcaption": "Current week - Bakersfield Central",
                        "subcaptionFontBold": "0",
                        "lowerLimit": "0",
                        "upperLimit": "100",
                        "lowerLimitDisplay": "Bad",
                        "upperLimitDisplay": "Good",
                        "numberSuffix": "%",
                        "showValue": "0",
                        "showBorder": "0",
                        "bgColor": "#ffffff",
                        "showShadow": "0",
                        "tickMarkDistance": "5"
                    },
                    "colorRange": {
                        "color": [
                            {
                                "minValue": "0",
                                "maxValue": "45",
                                "code": "#8e0000"
                            },
                            {
                                "minValue": "45",
                                "maxValue": "75",
                                "code": "#f2c500"
                            },
                            {
                                "minValue": "75",
                                "maxValue": "100",
                                "code": "#1aaf5d"
                            }
                        ]
                    },
                    "value": "92"
                }
        });

        multiseriesChart.render("chartContainer");
    });' ?>

</script>
<div class="wrapper">
    <br><BR>
    <div id="chartContainer_header" align="center" class="chart2"> ESC Billed Succesfully Last Hour </div>
    <div id="chartContainer" align="center"></div>
    <br>

</div>
<?php require("./head_foot/footer_1.inc.php"); ?>
