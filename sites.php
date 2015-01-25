<?php require("./head_foot/header_1.inc.php"); ?>
    <?php require("./php/ping.php");
    require("./php/curl.php");
    require("./php/sites.php");
    date_default_timezone_set('Europe/London');?>

<script type="text/javascript">
<?php echo 'FusionCharts.ready(function () {
   var multiseriesChart = new FusionCharts({
       "type": "MSLine",
       "renderAt": "chartContainer",
       "width": "1200",
       "height": "220",
       "dataFormat": "json",
       "dataSource":  {
          "chart": {
             "caption": "Site Hits",
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
                      "label": "'.$c1_time1.'"
                   }
                ]
             }
          ],
          "dataset": [
             {
                "seriesname": "HITS",
                "data": [
                   {
                      "value": "'.$c1_amount6.'"
                   },
                   {
                      "value": "'.$c1_amount5.'"
                   },
                   {
                      "value": "'.$c1_amount4.'"
                   },
                   {
                      "value": "'.$c1_amount3.'"
                   },
                   {
                      "value": "'.$c1_amount2.'"
                   },
                   {
                      "value": "'.$c1_amount1.'"
                   }
                ]
             }

          ]
       }
   });

   multiseriesChart.render("chartContainer");
});'
?>

</script>
<div class="wrapper">
    <br><BR>
    <div id="chartContainer_header" align="center" class="chart2"> ESC Site Hits Last Hour </div>
    <div id="chartContainer" align="center"></div>
    <br>
    <h1>Client sites (If these fail to load check ESC services/Applications)</h1>
    <br>
    <div class="center">
        <iframe src="http://wintoday.77win.co" width="280" height="400" frameborder="0"></iframe>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <iframe src="http://tsgpfi.co.uk/" width="280" height="400" frameborder="0"></iframe>
    </div>
</div>

<?php require("./head_foot/footer_1.inc.php"); ?>
