<?php require("./head_foot/header_1.inc.php"); ?>
<?php require("./php/hist.php"); ?>
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
                    "logoURL": "/images/Vitruvian_Man_Outline_50x50.png",
                  "logoAlpha": "40",
                  "logoScale": "110",
                  "logoPosition": "TR",
                    "bgColor": "EEEEEE,CCCCCC",
                    "bgratio": "60,40",
                    "bgAlpha": "70,80",
                    "theme": "ocean"
                },
                "data": [
                    {
                        "label": "-2 Days",
                        "value": "'.$c1_amount1.'"
                    },
                    {
                        "label": "-1 Days",
                        "value": "'.$c2_amount1.'"
                    },
                    {
                        "label": "Past 24 hours",
                        "value": "'.$c3_amount1.'"
                    }
                   ],
   "trendlines": [
      {
         "line": [
            {
               "startvalue": "0",
               "color": "#1aaf5d",
               "thickness": "2",
               "valueOnRight": "1",
               "tooltext": "Average Last 3 days",
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


<div class="wrapper">
<br><BR>
    <form method="post" action="<?php echo $PHP_SELF;?>" style="color: #000000">
        <select name="opt">
            <option value="6">Billed Successfully</option>
            <option value="2">Submitted Charge, No Response</option>
            <option value="3">Unkown Error</option>
            <option value="4">Processing Payment, Pending</option>
            <option value="5">Failed At Network</option>
            <option value="600">Network Error</option>
        </select>

        <input type=submit value="Go">
    </form>
<br>
    <br>
    <br>
    <?php if(isset($opt))
        echo  '<div id="chartContainer_header" align="center" class="chart2"> Billed Successfully Last Hour </div>';
   echo  '<div id="chartContainer" align="center"></div>';
   ?>

</div>

<?php require("./head_foot/footer_1.inc.php"); ?>
