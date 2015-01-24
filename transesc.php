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
        "type": "MSLine",
        "renderAt": "chartContainer",
        "width": "1200",
        "height": "300",
        "dataFormat": "json",
        "dataSource":  {
           "chart": {
              "caption": "Transaction Failed",
              "subCaption": "",
              "xAxisname": "Time",
              "yAxisName": "Amount",
              "numberPrefix": "",
              "theme": "ocean"
           },
           "categories": [
              {
                 "category": [
                    {
                       "label": "14:00"
                    },
                    {
                       "label": "14:00"
                    },
                    {
                       "label": "14:00"
                    },
                    {
                       "label": "14:00"
                    },
                    {
                       "label": "14:00"
                    },
                    {
                       "label": "14:00"
                    }
                 ]
              }
           ],
           "dataset": [
              {
                 "seriesname": "Submitted,No Response",
                 "data": [
                    {
                       "value": "10"
                    },
                    {
                       "value": "20"
                    },
                    {
                       "value": "10"
                    },
                    {
                       "value": "50"
                    },
                    {
                       "value": "2"
                    },
                    {
                       "value": "4"
                    }
                 ]
              },
              {
                 "seriesname": "Unkown Error",
                 "data": [
                    {
                       "value": "7"
                    },
                    {
                       "value": "2"
                    },
                    {
                       "value": "1"
                    },
                    {
                       "value": "0"
                    },
                    {
                       "value": "0"
                    },
                    {
                       "value": "30"
                    }
                 ]
              },
              {
                 "seriesname": "Pending",
                 "data": [
                    {
                       "value": "12"
                    },
                    {
                       "value": "13"
                    },
                    {
                       "value": "19"
                    },
                    {
                       "value": "2"
                    },
                    {
                       "value": "40"
                    },
                    {
                       "value": "51"
                    }
                 ]
              },
              {
                 "seriesname": "Failed At Network",
                 "data": [
                    {
                       "value": "12"
                    },
                    {
                       "value": "13"
                    },
                    {
                       "value": "19"
                    },
                    {
                       "value": "2"
                    },
                    {
                       "value": "40"
                    },
                    {
                       "value": "51"
                    }
                 ]
              },
              {
                 "seriesname": "Network Error",
                 "data": [
                    {
                       "value": "23"
                    },
                    {
                       "value": "32"
                    },
                    {
                       "value": "43"
                    },
                    {
                       "value": "34"
                    },
                    {
                       "value": "1"
                    },
                    {
                       "value": "10"
                    },

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
