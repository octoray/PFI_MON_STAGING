<?php require("./php/overview.php"); ?>
<?php require("./head_foot/header_1.inc.php"); ?>

<div class="wrapper">
<h1>ESC Billing Overview</h1>
    <table id="t01">
        <tr>
            <th>Status</th>
            <th>Amount</th>
            <th>Last Updated</th>
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

<br>
    <h1>MO / MT Overview</h1>
    <table id="t01">
        <tr>
            <th>Status</th>
            <th>Amount</th>
            <th>Last Updated</th>
        </tr>
        <tr>
            <td>MO Successfully Recived</td>
            <td style="color: black;"><?php echo $row7['amount']; ?></td>
            <td style="color: black;"><?php echo $row7['time']; ?></td>
        </tr>
        <tr>
            <td>MT's Delivered</td>
            <td style="color: black;"><?php echo $row8['amount']; ?></td>
            <td style="color: black;"><?php echo $row8['time']; ?></td>
        </tr>
        <tr>
            <td>Sent MT, No Final DR Yet</td>
            <td style="color: black;"><?php echo $row9['amount']; ?></td>
            <td style="color: black;"><?php echo $row9['time']; ?></td>
        </tr>
        <tr>
            <td>underlying connection forcibly closed</td>
            <td style="color: black;"><?php echo $row10['amount']; ?></td>
            <td style="color: black;"><?php echo $row10['time']; ?></td>
        </tr>
        <tr>
            <td>The request was aborted</td>
            <td style="color: black;"><?php echo $row11['amount']; ?></td>
            <td style="color: black;"><?php echo $row11['time']; ?></td>
        </tr>
        <tr>
            <td>The operation has timed out</td>
            <td style="color: black;"><?php echo $row12['amount']; ?></td>
            <td style="color: black;"><?php echo $row12['time']; ?></td>
        </tr>
    </table>

    <br>
    <h1>Other</h1>
    <table id="t01">
        <tr>
            <th>Componant</th>
            <th>Status</th>
            <th>Amount</th>
            <th>Last Updated</th>
        </tr>
        <tr>
            <td>ESC Transactions</td>
            <td>Pending/Stuck Transactions</td>
            <td style="color: black;"><?php echo $row13['amount']; ?></td>
            <td style="color: black;"><?php echo $row13['time']; ?></td>
        </tr>
        <tr>
            <td>ESC SIte Traffic</td>
            <td>ESC Site Hits</td>
            <td style="color: black;"><?php echo $row14['amount']; ?></td>
            <td style="color: black;"><?php echo $row14['time']; ?></td>
        </tr>
        <tr>
            <td>ESC</td>
            <td>Screenshots</td>
            <td style="color: black;"><?php echo $row15['amount']; ?></td>
            <td style="color: black;"><?php echo $row15['time']; ?></td>
        </tr>
        <tr>
            <td>IMSI</td>
            <td>Successful IMSI</td>
            <td style="color: black;"><?php echo $row16['amount']; ?></td>
            <td style="color: black;"><?php echo $row16['time']; ?></td>
        </tr>
        <tr>
            <td>IMSI</td>
            <td>Failed IMSI</td>
            <td style="color: black;"><?php echo $row17['amount']; ?></td>
            <td style="color: black;"><?php echo $row17['time']; ?></td>
        </tr>
        <tr>
            <td>STOPS</td>
            <td>Successful STOPS</td>
            <td style="color: black;"><?php echo $row18['amount']; ?></td>
            <td style="color: black;"><?php echo $row18['time']; ?></td>
        </tr>
        <tr>
            <td>STOPS</td>
            <td>Failed STOPS</td>
            <td style="color: black;"><?php echo $row19['amount']; ?></td>
            <td style="color: black;"><?php echo $row19['time']; ?></td>
        </tr>
        <tr>
            <td>Notifications</td>
            <td>Successfully Sent Notifications</td>
            <td style="color: black;"><?php echo $row20['amount']; ?></td>
            <td style="color: black;"><?php echo $row20['time']; ?></td>
        </tr>
        <tr>
            <td>Notifications</td>
            <td>Failed To Send Notifications</td>
            <td style="color: black;"><?php echo $row21['amount']; ?></td>
            <td style="color: black;"><?php echo $row21['time']; ?></td>
        </tr>
    </table>
</div>

<?php require("./head_foot/footer_1.inc.php"); ?>
