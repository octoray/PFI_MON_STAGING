<html>
    <head>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
<?php
if(isset($_POST['host']))
{
    include("class.smpp.php");
}
// call_user_func('open');
?>

<div id="chartContainer_header" align="center" class="chart1">
<div class="jumbotron">
      <div class="container">
        <h1>SMPP Tool</h1>
        <img style="border: 0px;" id="mainBannerImage" title="" src="https://duckduckgo.com/i/709ae69b.png" width="80px">
      </div>
    </div>
<br>
<form name="htmlform" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <table width="550px">
        </tr>
        <tr>
            <td valign="top">
                <label for="server">SystemID*</label>
            </td>
            <td valign="top">
                <input  type="text" name="system_id" maxlength="80" size="50" value="<?php if(isset($_POST['system_id'])) {echo $_POST['system_id'];}else{echo "0000001181";};?>" 
                       id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAALZJREFUOBFjYKAANDQ0rGWiQD9IqzgL0BQ3IKMXiB8AcSKQ/waIrYDsKUD8Fir2pKmpSf/fv3+zgPxfzMzMSbW1tbeBbAaQC+b+//9fB4h9gOwikCAQTAPyDYHYBciuBQkANfcB+WZAbPP37992kBgIUOoFBiZGRsYkIL4ExJvZ2NhAXmFgYmLKBPLPAfFuFhaWJpAYEBQC+SeA+BDQC5UQIQpJYFgdodQLLyh0w6j20RCgUggAAEREPpKMfaEsAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
            </td>
        </tr>

        <tr>
            <td valign="top">
                <label for="ip">Password*</label>
            </td>
            <td valign="top">
                <input  type="text" name="password" maxlength="80" size="50" value="<?php if(isset($_POST['password'])) {echo $_POST['password'];}else{echo "TSG6118";};?>" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAALZJREFUOBFjYKAANDQ0rGWiQD9IqzgL0BQ3IKMXiB8AcSKQ/waIrYDsKUD8Fir2pKmpSf/fv3+zgPxfzMzMSbW1tbeBbAaQC+b+//9fB4h9gOwikCAQTAPyDYHYBciuBQkANfcB+WZAbPP37992kBgIUOoFBiZGRsYkIL4ExJvZ2NhAXmFgYmLKBPLPAfFuFhaWJpAYEBQC+SeA+BDQC5UQIQpJYFgdodQLLyh0w6j20RCgUggAAEREPpKMfaEsAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;"><br><br><br>
            </td>
        </tr>

        <tr>
            <td valign="top">
            <label for="login">Host/IP*</label>
            </td>
            <td valign="top">
                <input  type="text" name="host" maxlength="80" size="50"value="<?php if(isset($_POST['host'])) {echo $_POST['host'];}else{echo "172.16.10.30";};?>" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAALZJREFUOBFjYKAANDQ0rGWiQD9IqzgL0BQ3IKMXiB8AcSKQ/waIrYDsKUD8Fir2pKmpSf/fv3+zgPxfzMzMSbW1tbeBbAaQC+b+//9fB4h9gOwikCAQTAPyDYHYBciuBQkANfcB+WZAbPP37992kBgIUOoFBiZGRsYkIL4ExJvZ2NhAXmFgYmLKBPLPAfFuFhaWJpAYEBQC+SeA+BDQC5UQIQpJYFgdodQLLyh0w6j20RCgUggAAEREPpKMfaEsAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
            </td>
        </tr>

        </tr>
        <tr>
            <td valign="top">
                <label for="server">Port</label>
            </td>
            <td valign="top">
                <input  type="text" name="port" maxlength="80" size="50" value="<?php if(isset($_POST['port'])) {echo $_POST['port'];}else{echo "9002";};?>" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAALZJREFUOBFjYKAANDQ0rGWiQD9IqzgL0BQ3IKMXiB8AcSKQ/waIrYDsKUD8Fir2pKmpSf/fv3+zgPxfzMzMSbW1tbeBbAaQC+b+//9fB4h9gOwikCAQTAPyDYHYBciuBQkANfcB+WZAbPP37992kBgIUOoFBiZGRsYkIL4ExJvZ2NhAXmFgYmLKBPLPAfFuFhaWJpAYEBQC+SeA+BDQC5UQIQpJYFgdodQLLyh0w6j20RCgUggAAEREPpKMfaEsAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
            </td>
        </tr>

        <tr>
            <td valign="top">
                <label for="ip">System Type*</label>
            </td>
            <td valign="top">
                <input  type="text" name="system_type" maxlength="80" size="50" value="<?php if(isset($_POST['system_type'])) {echo $_POST['system_type'];}else{echo "SMPP";};?>" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAALZJREFUOBFjYKAANDQ0rGWiQD9IqzgL0BQ3IKMXiB8AcSKQ/waIrYDsKUD8Fir2pKmpSf/fv3+zgPxfzMzMSbW1tbeBbAaQC+b+//9fB4h9gOwikCAQTAPyDYHYBciuBQkANfcB+WZAbPP37992kBgIUOoFBiZGRsYkIL4ExJvZ2NhAXmFgYmLKBPLPAfFuFhaWJpAYEBQC+SeA+BDQC5UQIQpJYFgdodQLLyh0w6j20RCgUggAAEREPpKMfaEsAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;"><br><br><br>
            </td>
        </tr>

        <tr>
            <td valign="top">
                <label for="ip">Origin*</label>
            </td>
            <td valign="top">
                <input  type="text" name="src" maxlength="80" size="50" value="<?php if(isset($_POST['src'])) {echo $_POST['src'];}else{echo "62277";};?>" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAALZJREFUOBFjYKAANDQ0rGWiQD9IqzgL0BQ3IKMXiB8AcSKQ/waIrYDsKUD8Fir2pKmpSf/fv3+zgPxfzMzMSbW1tbeBbAaQC+b+//9fB4h9gOwikCAQTAPyDYHYBciuBQkANfcB+WZAbPP37992kBgIUOoFBiZGRsYkIL4ExJvZ2NhAXmFgYmLKBPLPAfFuFhaWJpAYEBQC+SeA+BDQC5UQIQpJYFgdodQLLyh0w6j20RCgUggAAEREPpKMfaEsAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
            </td>
        </tr>

        <tr>
            <td valign="top">
                <label for="ip">Destination*</label>
            </td>
            <td valign="top">
                <input  type="text" name="dst" maxlength="80" size="50" value="<?php if(isset($_POST['dst'])) {echo $_POST['dst'];}else{echo "447778045512";};?>" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAALZJREFUOBFjYKAANDQ0rGWiQD9IqzgL0BQ3IKMXiB8AcSKQ/waIrYDsKUD8Fir2pKmpSf/fv3+zgPxfzMzMSbW1tbeBbAaQC+b+//9fB4h9gOwikCAQTAPyDYHYBciuBQkANfcB+WZAbPP37992kBgIUOoFBiZGRsYkIL4ExJvZ2NhAXmFgYmLKBPLPAfFuFhaWJpAYEBQC+SeA+BDQC5UQIQpJYFgdodQLLyh0w6j20RCgUggAAEREPpKMfaEsAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;"><br><br><br>
            </td>
        </tr>

        <tr>
            <td valign="top">
                <label for="ip">Interface version*</label>
            </td>
            <td valign="top">
                <input  type="text" name="interface_version" maxlength="80" size="20" value="<?php if(isset($_POST['interface_version'])) {echo $_POST['interface_version'];}else{echo "52";};?>" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAALZJREFUOBFjYKAANDQ0rGWiQD9IqzgL0BQ3IKMXiB8AcSKQ/waIrYDsKUD8Fir2pKmpSf/fv3+zgPxfzMzMSbW1tbeBbAaQC+b+//9fB4h9gOwikCAQTAPyDYHYBciuBQkANfcB+WZAbPP37992kBgIUOoFBiZGRsYkIL4ExJvZ2NhAXmFgYmLKBPLPAfFuFhaWJpAYEBQC+SeA+BDQC5UQIQpJYFgdodQLLyh0w6j20RCgUggAAEREPpKMfaEsAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">For 3.4 use 52 / For 3.3 use 50
            </td>
        </tr>

        <tr>
            <td valign="top">
                <label for="ip">Addr_ton*</label>
            </td>
            <td valign="top">
                <input  type="text" name="addr_ton" maxlength="80" size="20" value="<?php if(isset($_POST['addr_ton'])) {echo $_POST['addr_ton'];}else{echo "0";};?>" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAALZJREFUOBFjYKAANDQ0rGWiQD9IqzgL0BQ3IKMXiB8AcSKQ/waIrYDsKUD8Fir2pKmpSf/fv3+zgPxfzMzMSbW1tbeBbAaQC+b+//9fB4h9gOwikCAQTAPyDYHYBciuBQkANfcB+WZAbPP37992kBgIUOoFBiZGRsYkIL4ExJvZ2NhAXmFgYmLKBPLPAfFuFhaWJpAYEBQC+SeA+BDQC5UQIQpJYFgdodQLLyh0w6j20RCgUggAAEREPpKMfaEsAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
            </td>
        </tr>

        <tr>
            <td valign="top">
                <label for="ip">Addr_npi*</label>
            </td>
            <td valign="top">
                <input  type="text" name="addr_npi" maxlength="80" size="20" value="<?php if(isset($_POST['addr_npi'])) {echo $_POST['addr_npi'];}else{echo "0";};?>" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAALZJREFUOBFjYKAANDQ0rGWiQD9IqzgL0BQ3IKMXiB8AcSKQ/waIrYDsKUD8Fir2pKmpSf/fv3+zgPxfzMzMSbW1tbeBbAaQC+b+//9fB4h9gOwikCAQTAPyDYHYBciuBQkANfcB+WZAbPP37992kBgIUOoFBiZGRsYkIL4ExJvZ2NhAXmFgYmLKBPLPAfFuFhaWJpAYEBQC+SeA+BDQC5UQIQpJYFgdodQLLyh0w6j20RCgUggAAEREPpKMfaEsAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
            </td>
        </tr>

        <tr>
            <td valign="top">
                <label for="ip">source_addr_ton*</label>
            </td>
            <td valign="top">
                <input  type="text" name="source_addr_ton" maxlength="80" size="20" value="<?php if(isset($_POST['source_addr_ton'])) {echo $_POST['source_addr_ton'];}else{echo "0";};?>" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAALZJREFUOBFjYKAANDQ0rGWiQD9IqzgL0BQ3IKMXiB8AcSKQ/waIrYDsKUD8Fir2pKmpSf/fv3+zgPxfzMzMSbW1tbeBbAaQC+b+//9fB4h9gOwikCAQTAPyDYHYBciuBQkANfcB+WZAbPP37992kBgIUOoFBiZGRsYkIL4ExJvZ2NhAXmFgYmLKBPLPAfFuFhaWJpAYEBQC+SeA+BDQC5UQIQpJYFgdodQLLyh0w6j20RCgUggAAEREPpKMfaEsAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
            </td>
        </tr>

        <tr>
            <td valign="top">
                <label for="ip">source_addr_npi*</label>
            </td>
            <td valign="top">
                <input  type="text" name="source_addr_npi" maxlength="80" size="20" value="<?php if(isset($_POST['source_addr_npi'])) {echo $_POST['source_addr_npi'];}else{echo "0";};?>" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAALZJREFUOBFjYKAANDQ0rGWiQD9IqzgL0BQ3IKMXiB8AcSKQ/waIrYDsKUD8Fir2pKmpSf/fv3+zgPxfzMzMSbW1tbeBbAaQC+b+//9fB4h9gOwikCAQTAPyDYHYBciuBQkANfcB+WZAbPP37992kBgIUOoFBiZGRsYkIL4ExJvZ2NhAXmFgYmLKBPLPAfFuFhaWJpAYEBQC+SeA+BDQC5UQIQpJYFgdodQLLyh0w6j20RCgUggAAEREPpKMfaEsAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
            </td>
        </tr>

        <tr>
            <td valign="top">
                <label for="ip">dest_addr_ton*</label>
            </td>
            <td valign="top">
                <input  type="text" name="dest_addr_ton" maxlength="80" size="20" value="<?php if(isset($_POST['dest_addr_ton'])) {echo $_POST['dest_addr_ton'];}else{echo "0";};?>" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAALZJREFUOBFjYKAANDQ0rGWiQD9IqzgL0BQ3IKMXiB8AcSKQ/waIrYDsKUD8Fir2pKmpSf/fv3+zgPxfzMzMSbW1tbeBbAaQC+b+//9fB4h9gOwikCAQTAPyDYHYBciuBQkANfcB+WZAbPP37992kBgIUOoFBiZGRsYkIL4ExJvZ2NhAXmFgYmLKBPLPAfFuFhaWJpAYEBQC+SeA+BDQC5UQIQpJYFgdodQLLyh0w6j20RCgUggAAEREPpKMfaEsAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
            </td>
        </tr>

        <tr>
            <td valign="top">
                <label for="ip">dest_addr_npi*</label>
            </td>
            <td valign="top">
                <input  type="text" name="dest_addr_npi" maxlength="80" size="20" value="<?php if(isset($_POST['dest_addr_npi'])) {echo $_POST['dest_addr_npi'];}else{echo "0";};?>" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAALZJREFUOBFjYKAANDQ0rGWiQD9IqzgL0BQ3IKMXiB8AcSKQ/waIrYDsKUD8Fir2pKmpSf/fv3+zgPxfzMzMSbW1tbeBbAaQC+b+//9fB4h9gOwikCAQTAPyDYHYBciuBQkANfcB+WZAbPP37992kBgIUOoFBiZGRsYkIL4ExJvZ2NhAXmFgYmLKBPLPAfFuFhaWJpAYEBQC+SeA+BDQC5UQIQpJYFgdodQLLyh0w6j20RCgUggAAEREPpKMfaEsAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
            </td>
        </tr>

        <tr>
            <td valign="top">
                <label for="ip">valid in Relative*</label>

            </td>
            <td valign="top">
                <input  type="text" name="validity" maxlength="80" size="20" value="<?php if(isset($_POST['validity'])) {echo $_POST['validity'];}else{echo "000000000300000R";};?>" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAALZJREFUOBFjYKAANDQ0rGWiQD9IqzgL0BQ3IKMXiB8AcSKQ/waIrYDsKUD8Fir2pKmpSf/fv3+zgPxfzMzMSbW1tbeBbAaQC+b+//9fB4h9gOwikCAQTAPyDYHYBciuBQkANfcB+WZAbPP37992kBgIUOoFBiZGRsYkIL4ExJvZ2NhAXmFgYmLKBPLPAfFuFhaWJpAYEBQC+SeA+BDQC5UQIQpJYFgdodQLLyh0w6j20RCgUggAAEREPpKMfaEsAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">3 mins set default
            </td>
        </tr>

   <!--     <tr>
            <td valign="top">
                <label for="ip">Optional*</label>

            </td>
            <td valign="top">
                <input  type="text" name="optional" maxlength="80" size="20" value="<?php if(isset($_POST['optional'])) {echo $_POST['optional'];}else{echo "";};?>">
            </td>
        </tr>
-->
        <tr>
            <td valign="top">
                <label for="ip">Bind Type*</label>
            </td>
            <td valign="top">
                <input  type="text" name="pdu_bindtype" maxlength="80" size="20" value="<?php if(isset($_POST['pdu_bindtype'])) {echo $_POST['pdu_bindtype'];}else{echo "9";};?>" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAALZJREFUOBFjYKAANDQ0rGWiQD9IqzgL0BQ3IKMXiB8AcSKQ/waIrYDsKUD8Fir2pKmpSf/fv3+zgPxfzMzMSbW1tbeBbAaQC+b+//9fB4h9gOwikCAQTAPyDYHYBciuBQkANfcB+WZAbPP37992kBgIUOoFBiZGRsYkIL4ExJvZ2NhAXmFgYmLKBPLPAfFuFhaWJpAYEBQC+SeA+BDQC5UQIQpJYFgdodQLLyh0w6j20RCgUggAAEREPpKMfaEsAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">For Transceiver use 9, For Transmitter use 2.
            </td>
        </tr>

        <tr>
            <td valign="top">
                <label for="ip">Timeout*</label>
            </td>
            <td valign="top">
                <input  type="text" name="timeout" maxlength="80" size="20" value="3" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAALZJREFUOBFjYKAANDQ0rGWiQD9IqzgL0BQ3IKMXiB8AcSKQ/waIrYDsKUD8Fir2pKmpSf/fv3+zgPxfzMzMSbW1tbeBbAaQC+b+//9fB4h9gOwikCAQTAPyDYHYBciuBQkANfcB+WZAbPP37992kBgIUOoFBiZGRsYkIL4ExJvZ2NhAXmFgYmLKBPLPAfFuFhaWJpAYEBQC+SeA+BDQC5UQIQpJYFgdodQLLyh0w6j20RCgUggAAEREPpKMfaEsAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;"> <br><br><br>
            </td>
        </tr>
        <tr>
            
            <td valign="top">
                <label for="details">Message Body*</label>
            </td>
            <td valign="top">
                <textarea  name="message" maxlength="5000" cols="98" rows="20" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAALZJREFUOBFjYKAANDQ0rGWiQD9IqzgL0BQ3IKMXiB8AcSKQ/waIrYDsKUD8Fir2pKmpSf/fv3+zgPxfzMzMSbW1tbeBbAaQC+b+//9fB4h9gOwikCAQTAPyDYHYBciuBQkANfcB+WZAbPP37992kBgIUOoFBiZGRsYkIL4ExJvZ2NhAXmFgYmLKBPLPAfFuFhaWJpAYEBQC+SeA+BDQC5UQIQpJYFgdodQLLyh0w6j20RCgUggAAEREPpKMfaEsAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;" >TSG Test SMPP Message</textarea>
            </td>

        </tr>
        <tr>
            <td colspan="2" style="text-align:center">
                <input type="submit" value="Bind / Sumbit PDU" type="button" class="btn btn-lg btn-danger">
            </td>
        </tr>
    </table>
</form>
</p>
</li>
<br><br>

<p><div class="jumbotron">
      <div class="container">
        <h1>Output</h1>
      </div>
    </div>
<br>
<table width="550px">
    <tr>
        <td valign="top">
            <label for="details">PDU_SUBMIT_SM</label>
        </td>
        <td valign="top">
            <textarea  name="details" maxlength="500" cols="99" rows="20" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAALZJREFUOBFjYKAANDQ0rGWiQD9IqzgL0BQ3IKMXiB8AcSKQ/waIrYDsKUD8Fir2pKmpSf/fv3+zgPxfzMzMSbW1tbeBbAaQC+b+//9fB4h9gOwikCAQTAPyDYHYBciuBQkANfcB+WZAbPP37992kBgIUOoFBiZGRsYkIL4ExJvZ2NhAXmFgYmLKBPLPAfFuFhaWJpAYEBQC+SeA+BDQC5UQIQpJYFgdodQLLyh0w6j20RCgUggAAEREPpKMfaEsAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;"><?php print_r($_POST);?></textarea>
            </textarea>
        </td>
    </tr>


    <tr>
        <td valign="top">
            <label for="ip">Total Bind/Send Time</label>
        </td>
        <td valign="top">
            <input  type="text" name="t" maxlength="80" size="20" value="<?php echo $time;?>" id="inputEmail" class="form-control" placeholder="Time" required="" autofocus="" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAALZJREFUOBFjYKAANDQ0rGWiQD9IqzgL0BQ3IKMXiB8AcSKQ/waIrYDsKUD8Fir2pKmpSf/fv3+zgPxfzMzMSbW1tbeBbAaQC+b+//9fB4h9gOwikCAQTAPyDYHYBciuBQkANfcB+WZAbPP37992kBgIUOoFBiZGRsYkIL4ExJvZ2NhAXmFgYmLKBPLPAfFuFhaWJpAYEBQC+SeA+BDQC5UQIQpJYFgdodQLLyh0w6j20RCgUggAAEREPpKMfaEsAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;">
        </td>
    </tr>
</table>
<br>
<br>
<br>
</p>
</li>
<br>
<br>
<li>
    <h2>TON Value's:</h2> <br>
    Unknown/SMSC Default: <b>0</b><br>
    International: <b>1</b><br>
    National: <b>2</b><br>
    Network Specific: <b>3</b><br>
    Subscriber Number: <b>4</b><br>
    Alphanumeric: <b>5</b><br>
</li>
<br><br>
<li>
    <h2>NPI Value's:</h2> <br>
    Unknown/SMSC Default: <b>0</b><br>
    ISDN (E163/E164): <b>1</b><br>
    Data (X.121): <b>3</b><br>
    Telex (F.69): <b>4</b><br>
    Land Mobile (E.212): <b>6</b><br>
    Private: <b>9</b><br>
    ERMES: <b>10</b><br>
    Internet (IP): <b>14</b><br>
</li>


</div>
