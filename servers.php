<?php require("./head_foot/header_1.inc.php"); ?>
    <?php require("./php/ping.php");
    require("./php/curl.php");
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
</div>

<?php require("./head_foot/footer_1.inc.php"); ?>
