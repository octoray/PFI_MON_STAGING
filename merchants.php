<?php require("./head_foot/header_1.inc.php"); ?>

<script type="text/javascript">
<?php   echo 'FusionCharts.ready(function () {
        var csChart = new FusionCharts({
            type: "hled",
            renderAt: "chart-container",
            width: "700",
            height: "140",
            dataFormat: "json",
            dataSource: {
            "chart": {
            "caption": "MH-PFI-01 Response time",
                "captionFontColor": "#FFFFFF",
                "subcaptionFontColor": "#FFFFFF",
                "baseFontColor": "#FFFFFF",
                "lowerLimit": "0",
                "upperLimit": "6",
                "lowerLimitDisplay": "Empty",
                "upperLimitDisplay": "Full",
                "numberSuffix": "%",
                "showBorder": "0",
                "valueFontSize": "12",
                "showhovereffect": "1",
                "ledSize": "5",
                "ledGap": "1",
                "ChartBottomMargin": "20",
                "bgAlpha": "100",
                "bgColor": "#000000",
                "theme": "fint"
        },
            "colorRange": {
            "color": [
                {
                    "minValue": "0",
                    "maxValue": "2"
                },
                {
                    "minValue": "2",
                    "maxValue": "4"
                },
                {
                    "minValue": "4",
                    "maxValue": "6"
                }
            ]
        },
            "value": "45"
        }
        })
            .render("chartContainer");
    });';?>
</script>

<div class="wrapper">
    <br><BR>
    <div id="chartContainer" align="center"></div>
    <br>

</div>
<?php require("./head_foot/footer_1.inc.php"); ?>
