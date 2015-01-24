<?php require("./head_foot/header_1.inc.php"); ?>
<?php require("./php/momt.php"); ?>
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
                     "caption": "MT Delivered",
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
                                ],
   "trendlines": [
      {
         "line": [
            {
               "startvalue": "'.$trend.'",
               "color": "#1aaf5d",
               "thickness": "2",
               "valueOnRight": "1",
               "tooltext": "Average Last Hour",
               "displayvalue": "Average"
            }
         ]
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
                 "caption": "MO/MT Failed",
                 "subCaption": "Failures",
                 "xAxisname": "Time",
                 "yAxisName": "Amount",
                 "numberPrefix": "",
                 "theme": "ocean"
              },
              "categories": [
                 {
                    "category": [
                       {
                          "label": "'.$c1_time6.'"
                       },
                       {
                          "label": "'.$c1_time5.'"
                       },
                       {
                          "label": "'.$c1_time4.'"
                       },
                       {
                          "label": "'.$c1_time3.'"
                       },
                       {
                          "label": "'.$c1_time2.'"
                       },
                       {
                          "label": "'.$c1_time1.'0"
                       }
                    ]
                 }
              ],
              "dataset": [
                 {
                    "seriesname": "Sent MT, No DR",
                    "data": [
                       {
                          "value": "'.$c2_time6.'"
                       },
                       {
                          "value": "'.$c2_time5.'"
                       },
                       {
                          "value": "'.$c2_time4.'"
                       },
                       {
                          "value": "'.$c2_time3.'"
                       },
                       {
                          "value": "'.$c2_time2.'"
                       },
                       {
                          "value": "'.$c2_time1.'"
                       }
                    ]
                 },
                 {
                    "seriesname": "request aborted",
                    "data": [
                       {
                          "value": "'.$c3_time6.'"
                       },
                       {
                          "value": "'.$c3_time5.'"
                       },
                       {
                          "value": "'.$c3_time4.'"
                       },
                       {
                          "value": "'.$c3_time3.'"
                       },
                       {
                          "value": "'.$c3_time2.'"
                       },
                       {
                          "value": "'.$c3_time1.'"
                       }
                    ]
                 },
                 {
                    "seriesname": "timed out",
                    "data": [
                       {
                          "value": "'.$c4_time6.'"
                       },
                       {
                          "value": "'.$c4_time5.'"
                       },
                       {
                          "value": "'.$c4_time4.'"
                       },
                       {
                          "value": "'.$c4_time3.'"
                       },
                       {
                          "value": "'.$c4_time2.'"
                       },
                       {
                          "value": "'.$c4_time1.'"
                       }
                    ]
                 },
                 {
                    "seriesname": "connection forcibly closed",
                    "data": [
                       {
                          "value": "'.$c5_time6.'"
                       },
                       {
                          "value": "'.$c5_time5.'"
                       },
                       {
                          "value": "'.$c5_time4.'"
                       },
                       {
                          "value": "'.$c5_time3.'"
                       },
                       {
                          "value": "'.$c5_time2.'"
                       },
                       {
                          "value": "'.$c5_time1.'"
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
    <div id="chartContainer_header" align="center" class="chart2"> MT Delivered Succesfully Last Hour</div>
    <div id="chartContainer" align="center"></div>
    <br><BR>
    <div id="chartContainer_header" align="center" class="chart2"> MO Recived Succesfully Last Hour</div>
    <div id="chartContainer2" align="center"></div>

</div>

<?php require("./head_foot/footer_1.inc.php"); ?>
