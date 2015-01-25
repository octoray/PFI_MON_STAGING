<?php require("./head_foot/header_1.inc.php"); ?>

<script type="text/javascript">
    FusionCharts.ready(function () {
        var csChart = new FusionCharts({
            type: 'hled',
            renderAt: 'chart-container',
            width: '800',
            height: '150',
            dataFormat: 'json',
            dataSource: {
            "chart": {
            "caption": "Fuel Level Indicator",
                "captionFontColor": "#FFFFFF",
                "subcaptionFontColor": "#FFFFFF",
                "baseFontColor": "#FFFFFF",
                "lowerLimit": "0",
                "upperLimit": "100",
                "lowerLimitDisplay": "Empty",
                "upperLimitDisplay": "Full",
                "numberSuffix": "%",
                "valueFontSize": "12",
                "showhovereffect": "1",
                "ledSize": "5",
                "ledGap": "1",
                "ChartBottomMargin": "20",
                "bgAlpha": "0",
                "theme": "fint"
        },
            "colorRange": {
            "color": [
                {
                    "minValue": "0",
                    "maxValue": "45"
                },
                {
                    "minValue": "45",
                    "maxValue": "75"
                },
                {
                    "minValue": "75",
                    "maxValue": "100"
                }
            ]
        },
            "value": "92"
        }
        })
            .render("chartContainer");
    });
</script>

<div class="wrapper">
    <br><BR>
    <div id="chartContainer_header" align="center" class="chart2"> ESC Billed Succesfully Last Hour </div>
    <div id="chartContainer" align="center"></div>
    <br>

</div>
<?php require("./head_foot/footer_1.inc.php"); ?>
