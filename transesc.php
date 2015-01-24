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
    <?php echo 'FusionCharts.ready(function(){
         var revenueChart = new FusionCharts({
             type: "column2d",
             renderAt: "chartContainer",
             width: "1200",
             height: "300",
             dataFormat: "json",
             dataSource: {
                 "chart": {
                     "caption": "ESC Failed At Network Last Hour",
                     "subCaption": "",
                     "xAxisName": "Time",
                     "yAxisName": "Amount",
                     "canvasBgAlpha": "0",
                     "bgColor": "EEEEEE,CCCCCC",
                     "logoURL": "http://static.fusioncharts.com/sampledata/images/Logo-HM-72x72.png",
                     "logoAlpha": "40",
                     "logoScale": "110",
                     "logoPosition": "TR",
                     "bgratio": "60,40",
                     "bgAlpha": "70,80",
                     "theme": "ocean"
                 },
                 "data": [
                     {
                         "label": "'.$c2_time6.'",
                         "value": "'.$c2_amount6.'"
                     },
                     {
                         "label": "'.$c2_time5.'",
                         "value": "'.$c2_amount5.'"
                     },
                     {
                         "label": "'.$c2_time4.'",
                         "value": "'.$c2_amount4.'"
                     },
                     {
                         "label": "'.$c2_time3.'",
                         "value": "'.$c2_amount3.'"
                     },
                     {
                         "label": "'.$c2_time2.'",
                         "value": "'.$c2_amount2.'"
                     },
                     {
                         "label": "'.$c2_time1.'",
                         "value": "'.$c2_amount1.'"
                     }
                 ],
   "trendlines": [
      {
         "line": [
            {
               "startvalue": "5",
               "color": "#1aaf5d",
               "valueOnRight": "1",
               "tooltext": "Quarterly sales target was $startDataValue",
               "displayvalue": "Target - $175K"
            }
         ]
      }
   ]
             }

         });
         revenueChart.render("chartContainer2");
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
