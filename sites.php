<?php require("./head_foot/header_1.inc.php"); ?>
    <?php require("./php/ping.php");
    date_default_timezone_set('Europe/London');?>
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
            <td style="color: <?php colour($ping); ?>"><?php echo $ping; ?></td>
            <td style="color: greenyellow">Up</td>
            <td>N/A</td>
        </tr>
        <tr>
            <td>MH-PFI-02</td>
            <td style="color: greenyellow">Up</td>
            <td style="color: greenyellow">Up</td>
            <td>N/A</td>
        </tr>
        <tr>
            <td>MH-PFI-03</td>
            <td><B style="color: red">DOWN</B></td>
            <td style="color: red">DOWN</td>
            <td>N/A</td>
        </tr>
        <tr>
            <td>MH-PFI-04</td>
            <td style="color: greenyellow">Up</td>
            <td style="color: greenyellow">Up</td>
            <td>N/A</td>
        </tr>
        <tr>
            <td>Titanium</td>
            <td style="color: greenyellow">Up</td>
            <td style="color: greenyellow">Up</td>
            <td>N/A</td>
        </tr>
        <tr>
            <td>Chromium</td>
            <td style="color: greenyellow">Up</td>
            <td style="color: red">Down</td>
            <td>N/A</td>
        </tr>
    </table>
</div>

<?php require("./head_foot/footer_1.inc.php"); ?>
