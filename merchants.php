<?php require("./head_foot/header_1.inc.php"); ?>

<script type="text/javascript">
<?php   echo 'FusionCharts.ready(function () {
        var csChart = new FusionCharts({
            type: "hled",
            renderAt: "chart-container",
            width: "700",
            height: "120",
            dataFormat: "json",
            dataSource: {
            "chart": {
            "caption": "MH-PFI-01 Response time",
                "captionFontColor": "#FFFFFF",
                "subcaptionFontColor": "#FFFFFF",
                "baseFontColor": "#FFFFFF",
                "lowerLimit": "0",
                "upperLimit": "6",
                "lowerLimitDisplay": "Fast",
                "upperLimitDisplay": "Slow",
                "numberSuffix": " Seconds",
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
                    "maxValue": "2",
                    "code": "#3399FF"
                },
                {
                    "minValue": "2",
                    "maxValue": "4",
                    "code": "#0000FF"
                },
                {
                    "minValue": "4",
                    "maxValue": "6",
                    "code": "#000066"
                }
            ]
        },
            "value": "0.34"
        }
        })
            .render("chartContainer");
    });';?>
</script>


<script type="text/javascript">
    <?php   echo 'FusionCharts.ready(function () {
            var csChart = new FusionCharts({
                type: "hled",
                renderAt: "chart-container",
                width: "700",
                height: "120",
                dataFormat: "json",
                dataSource: {
                "chart": {
                "caption": "MH-PFI-02 Response time",
                    "captionFontColor": "#FFFFFF",
                    "subcaptionFontColor": "#FFFFFF",
                    "baseFontColor": "#FFFFFF",
                    "lowerLimit": "0",
                    "upperLimit": "6",
                    "lowerLimitDisplay": "Fast",
                    "upperLimitDisplay": "Slow",
                    "numberSuffix": " Seconds",
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
                        "maxValue": "2",
                        "code": "#3399FF"
                    },
                    {
                        "minValue": "2",
                        "maxValue": "4",
                        "code": "#0000FF"
                    },
                    {
                        "minValue": "4",
                        "maxValue": "6",
                        "code": "#000066"
                    }
                ]
            },
                "value": "2.34"
            }
            })
                .render("chartContainer2");
        });';?>
</script>


<script type="text/javascript">
    <?php   echo 'FusionCharts.ready(function () {
            var csChart = new FusionCharts({
                type: "hled",
                renderAt: "chart-container",
                width: "700",
                height: "120",
                dataFormat: "json",
                dataSource: {
                "chart": {
                "caption": "MH-PFI-03 Response time",
                    "captionFontColor": "#FFFFFF",
                    "subcaptionFontColor": "#FFFFFF",
                    "baseFontColor": "#FFFFFF",
                    "lowerLimit": "0",
                    "upperLimit": "6",
                    "lowerLimitDisplay": "Fast",
                    "upperLimitDisplay": "Slow",
                    "numberSuffix": " Seconds",
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
                        "maxValue": "2",
                        "code": "#3399FF"
                    },
                    {
                        "minValue": "2",
                        "maxValue": "4",
                        "code": "#0000FF"
                    },
                    {
                        "minValue": "4",
                        "maxValue": "6",
                        "code": "#000066"
                    }
                ]
            },
                "value": "4.84"
            }
            })
                .render("chartContainer3");
        });';?>
</script>

<script type="text/javascript">
    <?php   echo 'FusionCharts.ready(function () {
            var csChart = new FusionCharts({
                type: "hled",
                renderAt: "chart-container",
                width: "700",
                height: "120",
                dataFormat: "json",
                dataSource: {
                "chart": {
                "caption": "MH-PFI-04 Response time",
                    "captionFontColor": "#FFFFFF",
                    "subcaptionFontColor": "#FFFFFF",
                    "baseFontColor": "#FFFFFF",
                    "lowerLimit": "0",
                    "upperLimit": "6",
                    "lowerLimitDisplay": "Fast",
                    "upperLimitDisplay": "Slow",
                    "numberSuffix": " Seconds",
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
                        "maxValue": "2",
                        "code": "#3399FF"
                    },
                    {
                        "minValue": "2",
                        "maxValue": "4",
                        "code": "#0000FF"
                    },
                    {
                        "minValue": "4",
                        "maxValue": "6",
                        "code": "#000066"
                    }
                ]
            },
                "value": "6"
            }
            })
                .render("chartContainer4");
        });';?>
</script>
<div class="wrapper">
    <br><BR>
    <div id="chartContainer" align="center"></div>
    <div id="chartContainer2" align="center"></div>
    <div id="chartContainer3" align="center"></div>
    <div id="chartContainer4" align="center"></div>
    <br>

</div>
<?php require("./head_foot/footer_1.inc.php"); ?>
