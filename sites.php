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
       "width": "800",
       "height": "200",
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
                      "value": "'.$c2_amount6.'"
                   },
                   {
                      "value": "'.$c2_amount5.'"
                   },
                   {
                      "value": "'.$c2_amount4.'"
                   },
                   {
                      "value": "'.$c2_amount3.'"
                   },
                   {
                      "value": "'.$c2_amount2.'"
                   },
                   {
                      "value": "'.$c2_amount1.'"
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
    <div id="chartContainer_header" align="center" class="chart2"> ESC Billed Succesfully Last Hour </div>
    <div id="chartContainer" align="center"></div>
    <br>
    <h1>Client sites (if these fail to load or show errors. Raise to TSG)</h1>
    <br><br>
    <div class="center">
        <iframe src="http://wintoday.77win.co" width="250" height="400" frameborder="0"></iframe>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <iframe src="http://tsgpfi.co.uk/" width="250" height="400" frameborder="0"></iframe>
    </div>
</div>

<?php require("./head_foot/footer_1.inc.php"); ?>
