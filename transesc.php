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
                    "subCaption": "",
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
                        "label": "'.$c1_time6.'",
                        "value": "'.$c1_amount6.'"
                    },
                    {
                        "label": "'.$c1_time5.'",
                        "value": "'.$c1_amount5.'"
                    },
                    {
                        "label": "'.$c1_time4.'",
                        "value": "'.$c1_amount4.'"
                    },
                    {
                        "label": "'.$c1_time3.'",
                        "value": "'.$c1_amount3.'"
                    },
                    {
                        "label": "'.$c1_time2.'",
                        "value": "'.$c1_amount2.'"
                    },
                    {
                        "label": "'.$c1_time1.'",
                        "value": "'.$c1_amount1.'"
                    }
                ]
            }

        });
        revenueChart.render("chartContainer");
    });'
?>

</script>
<script type="text/javascript">
    <?php echo 'FusionCharts.ready(function () {
    var multiseriesChart = new FusionCharts({
        "type": "mscolumn2d",
        "renderAt": "chartContainer",
        "width": "500",
        "height": "300",
        "dataFormat": "json",
        "dataSource":  {
           "chart": {
              "caption": "Comparison of Quarterly Revenue",
              "subCaption": "Harrys SuperMart",
              "xAxisname": "Quarter",
              "yAxisName": "Revenues (In USD)",
              "numberPrefix": "$",
              "theme": "fint"
           },
           "categories": [
              {
                 "category": [
                    {
                       "label": "Q1"
                    },
                    {
                       "label": "Q2"
                    },
                    {
                       "label": "Q3"
                    },
                    {
                       "label": "Q4"
                    }
                 ]
              }
           ],
           "dataset": [
              {
                 "seriesname": "Previous Year",
                 "data": [
                    {
                       "value": "10000"
                    },
                    {
                       "value": "11500"
                    },
                    {
                       "value": "12500"
                    },
                    {
                       "value": "15000"
                    }
                 ]
              },
              {
                 "seriesname": "Current Year",
                 "data": [
                    {
                       "value": "25400"
                    },
                    {
                       "value": "29800"
                    },
                    {
                       "value": "21800"
                    },
                    {
                       "value": "26800"
                    }
                 ]
              }
           ]
        }
    });

    multiseriesChart.render("chartContainer2");
});'
 ?>

</script>
<div class="wrapper">
<br><BR>
    <div id="chartContainer_header" align="center" class="chart2"> ESC Billed Succesfully Last Hour </div>
    <div id="chartContainer" align="center"></div>
    <br><BR>
    <div id="chartContainer_header" align="center" class="chart2"> ESC Failed At Network Last Hour </div>
    <div id="chartContainer2" align="center"></div>

</div>

<?php require("./head_foot/footer_1.inc.php"); ?>
