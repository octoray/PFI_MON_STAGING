<?php require("./php/overview.php"); ?>
<?php require("./head_foot/header_1.inc.php"); ?>

<div class="wrapper">
<h1>ESC Billing Overview</h1>
    <table id="t01">
        <tr>
            <th>Status</th>
            <th>Amount</th>
            <th>Last Upadted</th>
        </tr>
        <tr>
            <td>Billed Successfully</td>
            <td style="color: black;"><?php echo $row1['amount']; ?></td>
            <td style="color: black;"><?php echo $row1['time']; ?></td>
        </tr>
        <tr>
            <td>Submitted Charge, No Response</td>
            <td style="color: black;"><?php echo $row2['amount']; ?></td>
            <td style="color: black;"><?php echo $row2['time']; ?></td>
        </tr>
        <tr>
            <td>Unkown Error</td>
            <td style="color: black;"><?php echo $row3['amount']; ?></td>
            <td style="color: black;"><?php echo $row3['time']; ?></td>
        </tr>
        <tr>
            <td>Processing Payment, Pending</td>
            <td style="color: black;"><?php echo $row4['amount']; ?></td>
            <td style="color: black;"><?php echo $row4['time']; ?></td>
        </tr>
        <tr>
            <td>Failed At Network</td>
            <td style="color: black;"><?php echo $row5['amount']; ?></td>
            <td style="color: black;"><?php echo $row5['time']; ?></td>
        </tr>
        <tr>
            <td>Network Error</td>
            <td style="color: black;"><?php echo $row6['amount']; ?></td>
            <td style="color: black;"><?php echo $row6['time']; ?></td>
        </tr>
    </table>

</div>

<?php require("./head_foot/footer_1.inc.php"); ?>
