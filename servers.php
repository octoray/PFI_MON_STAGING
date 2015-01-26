<?php require("./head_foot/header_1.inc.php"); ?>
    <?php require("./php/ping.php");
    require("./php/curl.php");
    require("./php/led.php");
?>
<script type="text/javascript">
    <?php   echo 'FusionCharts.ready(function () {
            var csChart = new FusionCharts({
                type: "hled",
                renderAt: "chart-container",
                width: "700",
                height: "130",
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
                        "code": "#FF0000"
                    }
                ]
            },
                "value": "'.$led_pfi_01.'"
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
                height: "130",
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
                        "code": "#FF0000"
                    }
                ]
            },
                "value": "'.$led_pfi_02.'"
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
                height: "130",
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
                        "code": "#FF0000"
                    }
                ]
            },
                "value": "'.$led_pfi_03.'"
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
                height: "130",
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
                        "code": "#FF0000"
                    }
                ]
            },
                "value": "'.$led_pfi_04.'"
            }
            })
                .render("chartContainer4");
        });';?>
</script>

<script type="text/javascript">
    <?php   echo 'FusionCharts.ready(function () {
            var csChart = new FusionCharts({
                type: "hled",
                renderAt: "chart-container",
                width: "700",
                height: "130",
                dataFormat: "json",
                dataSource: {
                "chart": {
                "caption": "Titanium Response time",
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
                        "code": "#FF0000"
                    }
                ]
            },
                "value": "'.$led_titanium.'"
            }
            })
                .render("chartContainer5");
        });';?>
</script>
</script>
<script type="text/javascript">
    window.setInterval(customRedirect, 30000);
function customRedirect() {
    window.location = "http://mh-pfi-mon-01.win.local:81/overview.php";
}
</script>
<div class="wrapper">
    <table id="t01">
        <tr>
            <th>Server</th>
            <th>Ping</th>
            <th>CURL</th>
            <th>DB</th>
        </tr>
        <tr>
            <td>MH-PFI-01</td>
            <td style="color: <?php colour($ping_pfi_01); ?>"><?php echo $ping_pfi_01; ?></td>
            <td style="color: <?php colourcurl($curl_pfi_01); ?>"><?php echo $curl_pfi_01; ?></td>
            <td style="color: darkslategrey">NA</td>
        </tr>
        <tr>
            <td>MH-PFI-02</td>
            <td style="color: <?php colour($ping_pfi_02); ?>"><?php echo $ping_pfi_02; ?></td>
            <td style="color: <?php colourcurl($curl_pfi_02); ?>"><?php echo $curl_pfi_02; ?></td>
            <td style="color: darkslategrey">NA</td>
        </tr>
        <tr>
            <td>MH-PFI-03</td>
            <td style="color: <?php colour($ping_pfi_03); ?>"><?php echo $ping_pfi_03; ?></td>
            <td style="color: <?php colourcurl($curl_pfi_03); ?>"><?php echo $curl_pfi_03; ?></td>
            <td style="color: darkslategrey">NA</td>
        </tr>
        <tr>
            <td>MH-PFI-04</td>
            <td style="color: <?php colour($ping_pfi_04); ?>"><?php echo $ping_pfi_04; ?></td>
            <td style="color: <?php colourcurl($curl_pfi_04); ?>"><?php echo $curl_pfi_04; ?></td>
            <td style="color: darkslategrey">NA</td>
        </tr>
        <tr>
            <td>Titanium</td>
            <td style="color: <?php colour($ping_titanium); ?>"><?php echo $ping_titanium; ?></td>
            <td style="color: <?php colourcurl($curl_titanium); ?>"><?php echo $curl_titanium; ?></td>
            <td style="color: darkslategrey">NA</td>
        </tr>
        <tr>
            <td>Chromium</td>
            <td style="color: <?php colour($ping_chromium); ?>"><?php echo $ping_chromium; ?></td>
            <td style="color: <?php colourcurl($curl_chromium); ?>"><?php echo $curl_chromium; ?></td>
            <td style="color: darkslategrey">NA</td>
        </tr>
        <tr>
            <td>Boron DB</td>
            <td style="color: darkslategrey">NA</td>
            <td style="color: darkslategrey">NA</td>
            <td style="color: darkslategrey">NA</td>
        </tr>
    </table>
<br> <br>
<div id="chartContainer" align="center"></div>
<div id="chartContainer2" align="center"></div>
<div id="chartContainer3" align="center"></div>
<div id="chartContainer4" align="center"></div>
</div>
<?php require("./head_foot/footer_1.inc.php"); ?>
