<?php require("./head_foot/header_1.inc.php"); ?>
<?php require("./php/notif.php"); ?>
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
                  "caption": "Client Notification Success Last Hour",
                  "subCaption": "",
                  "xAxisName": "Time",
                  "yAxisName": "Amount",
                  "canvasBgAlpha": "0",
                  "bgColor": "EEEEEE,CCCCCC",
                  "logoURL": "/images/Vitruvian_Man_Outline_50x50.png",
                  "logoAlpha": "40",
                  "logoScale": "110",
                  "logoPosition": "TR",
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
            "startvalue": "'.$trendgood.'",
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
    <?php echo 'FusionCharts.ready(function(){
     var revenueChart = new FusionCharts({
         type: "column2d",
         renderAt: "chartContainer",
         width: "1200",
         height: "300",
         dataFormat: "json",
         dataSource: {
             "chart": {
                 "caption": "Client Notification Failed Last Hour",
                 "subCaption": "",
                 "xAxisName": "Time",
                 "yAxisName": "Amount",
                 "canvasBgAlpha": "0",
                 "bgColor": "EEEEEE,CCCCCC",
                 "logoURL": "/images/Vitruvian_Man_Outline_50x50.png",
                 "logoAlpha": "40",
                 "logoScale": "110",
                 "logoPosition": "TR",
                 "bgratio": "60,40",
                 "bgAlpha": "70,80",
                 "theme": "carbon"
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
           "startvalue": "'.$trendbad.'",
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
     revenueChart.render("chartContainer2");
 });'
?>
</script>
<script type="text/javascript">
    window.setInterval(customRedirect, 30000);
function customRedirect() {
    window.location = "http://mh-pfi-mon-01.win.local:81/sites.php";
}
</script>
<div class="wrapper">
    <br><BR>
    <div id="chartContainer_header" align="center" class="chart2"> Success Last Hour </div>
    <div id="chartContainer" align="center"></div>
    <br><BR>
    <div id="chartContainer_header" align="center" class="chart2"> Failed Last Hour </div>
    <div id="chartContainer2" align="center"></div>

</div>

<?php require("./head_foot/footer_1.inc.php"); ?>
