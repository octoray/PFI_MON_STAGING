<?php

$email1 =
    '<!DOCTYPE html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width"/>
        <style>
        body{
        width:50% !important;
        min-width: 0%;
        max-width: 50;
      -webkit-text-size-adjust:50%;
      -ms-text-size-adjust:50%;
      margin:0;
      padding:0;
    }
    h1 {
        font-family: Trebuchet MS;
        color: Red;
        font-size: 23px;
    }
    h2 {
        font-family: Trebuchet MS;
        color: black;
        font-size: 13px;
    }

    h3 {
        font-family: Trebuchet MS;
        color: #000000;
        font-size: 10px;
    }
      h4 {
        font-family: Trebuchet MS;
        color: #0000ff;
        font-size: 10px;
        width:100px;
        word-wrap:break-word;
    }

        </style>
    <title>PFI Monitor Email</title>
    </head>
   <body>
    <h1>PFI Alert</h1>
    <h2>
    Transaction Count Alert:
    </h2>
    <h3>
    No Successful PFI transactions seen in last 60 minutes.
    Please check on boron for latest traffic using:
    </h3>
    <h4>
    SELECT  top 100
		pfi.id,
		pfi.msisdn,
		stat1.Description as "Flow Type",
		stat2.Description as "Transaction Status",
		stat3.Description as "MNO",
		pfi.created,
		pfi.charged,
		pfi.receiptsent,
		pfi.merchanttransactionref,
		pfi.esccontenturl,
		pfi.ESCMerchantUrlId,
		pfi.Amount,
		pfi.ProductId
  FROM [PayForIt].[dbo].[Transaction] pfi
  full outer join [PayForIt].[dbo].[PaymentFlow] stat1 on pfi.paymentflowid = stat1.id
  full outer join [PayForIt].[dbo].[TransactionStatus] stat2 on pfi.transactionstatusid = stat2.id
  full outer join [PayForIt].[dbo].[Network] stat3 on pfi.networkid = stat3.id
  where 1=1
  order by pfi.created desc
  </h4>

  <h3>
  Please also check PFI All applications on Titanium.winprod.lan are running without errors

  Further information can be found in handover as per : http://hw-ops01/WinWiki/PFI_V4

  Generated by PFI V4 Monitor: http://mh-pfi-mon-01.win.local:81/overview.php
 </h3>
    </body>
    </html>';



$email2 =
    '<!DOCTYPE html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width"/>
       <style>
        body{
        width:50% !important;
        min-width: 0%;
        max-width: 50;
      -webkit-text-size-adjust:50%;
      -ms-text-size-adjust:50%;
      margin:0;
      padding:0;
    }
    h1 {
        font-family: Trebuchet MS;
        color: Red;
        font-size: 23px;
    }
    h2 {
        font-family: Trebuchet MS;
        color: black;
        font-size: 13px;
    }

    h3 {
        font-family: Trebuchet MS;
        color: #000000;
        font-size: 10px;
    }
      h4 {
        font-family: Trebuchet MS;
        color: #0000ff;
        width: 70%;
        word-break: break-all;
    }

        </style>
    <title>PFI Monitor Email</title>
    </head>
   <body>
    <h1>PFI Alert</h1>
    <h2>
    Transaction Count Alert:
    </h2>
    <h3>
    No Successful PFI SCREENSHOTS seen in last 60 minutes.
    Please check on boron for latest traffic using:
    </h3>
    <h4>
    <pre width="30">
SELECT TOP 10 *
  FROM [PayForIt].[dbo].[EscScreenshot]
  order by id desc
</pre>
  </h4>
<pre width="10">
  <h3>
  Please also check ESC.Screenshot applications on MH-PFI-04/04 are running without errors
  Further information can be found in handover as per : http://hw-ops01/WinWiki/PFI_V4

  Generated by PFI V4 Monitor: http://mh-pfi-mon-01.win.local:81/overview.php
 </h3>
 </pre>
    </body>
    </html>';


$email3 =
    '<!DOCTYPE html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width"/>
         <style>
        body{
        width:50% !important;
        min-width: 0%;
        max-width: 50;
      -webkit-text-size-adjust:50%;
      -ms-text-size-adjust:50%;
      margin:0;
      padding:0;
    }
    h1 {
        font-family: Trebuchet MS;
        color: Red;
        font-size: 23px;
    }
    h2 {
        font-family: Trebuchet MS;
        color: black;
        font-size: 13px;
    }

    h3 {
        font-family: Trebuchet MS;
        color: #000000;
        font-size: 10px;
    }
      h4 {
        font-family: Trebuchet MS;
        color: #0000ff;
        font-size: 10px;
    }

        </style>
    <title>PFI Monitor Email</title>
    </head>
   <body>
    <h1>PFI Alert</h1>
    <h2>
    Transaction Count Alert:
    </h2>
    <h3>
    ESC Site HIT count Very low in last 30 minutes
    Please check on boron for latest traffic using:
    </h3>
    <h4>
    SELECT TOP 100 *
  FROM [PayForIt].[dbo].[ReportEvent]
  order by eventdate desc
  </h4>

  <h3>
  Please also check PFI All applications on Titanium.winprod.lan are running without errors
  And please access some live sites from SELECT [RequestedHost] FROM [PayForIt].[dbo].[EscMerchantUrl] and make sure they load ok.

  Further information can be found in handover as per : http://hw-ops01/WinWiki/PFI_V4

  Generated by PFI V4 Monitor: http://mh-pfi-mon-01.win.local:81/overview.php
 </h3>
    </body>
    </html>';

$email4 =
    '<!DOCTYPE html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width"/>
        <style>
        body{
        width:50% !important;
        min-width: 0%;
        max-width: 50;
      -webkit-text-size-adjust:50%;
      -ms-text-size-adjust:50%;
      margin:0;
      padding:0;
    }
    h1 {
        font-family: Trebuchet MS;
        color: Red;
        font-size: 23px;
    }
    h2 {
        font-family: Trebuchet MS;
        color: black;
        font-size: 13px;
    }

    h3 {
        font-family: Trebuchet MS;
        color: #000000;
        font-size: 10px;
    }
      h4 {
        font-family: Trebuchet MS;
        color: #0000ff;
        font-size: 10px;
    }

        </style>
    <title>PFI Monitor Email</title>
    </head>
   <body>
    <h1>PFI Alert</h1>
    <h2>
    Transaction Count Alert:
    </h2>
    <h3>
    Pending PFI transactions High in last 60 minutes.
    Please check on boron for latest traffic using:
    </h3>
    <h4>
  SELECT *
  FROM [PayForIt].[dbo].[Transaction](nolock)
  WHERE [TransactionStatusId] = 4 AND [NetworkId] != 4
  AND [Charged] >= DATEADD("mi", -1440, getdate())
  </h4>

  <h3>
  Please also check PFI All applications on Titanium.winprod.lan are running without errors

  Further information can be found in handover as per : http://hw-ops01/WinWiki/PFI_V4

  Generated by PFI V4 Monitor: http://mh-pfi-mon-01.win.local:81/overview.php
 </h3>
    </body>
    </html>';


$email5 =
    '<!DOCTYPE html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width"/>
        <style>
        body{
        width:50% !important;
        min-width: 0%;
        max-width: 50;
      -webkit-text-size-adjust:50%;
      -ms-text-size-adjust:50%;
      margin:0;
      padding:0;
    }
    h1 {
        font-family: Trebuchet MS;
        color: Red;
        font-size: 23px;
    }
    h2 {
        font-family: Trebuchet MS;
        color: black;
        font-size: 13px;
    }

    h3 {
        font-family: Trebuchet MS;
        color: #000000;
        font-size: 10px;
    }
      h4 {
        font-family: Trebuchet MS;
        color: #0000ff;
        font-size: 10px;
    }

        </style>
    <title>PFI Monitor Email</title>
    </head>
   <body>
    <h1>PFI Alert</h1>
    <h2>
    Transaction Count Alert:
    </h2>
    <h3>
    NO MT Traffic in last 60 minutes.
    Please check on boron for latest traffic using:
    </h3>
    <h4>
  SELECT top 10 *
  FROM [PaymentGateway].[operator].[Transaction] gtw
  full outer join [PaymentGateway].[operator].[TransactionMessage] pay on gtw.TransactionMessageId = pay.id
  where 1=1
  -- and TransactionMessageId = 414060
  -- and gtw.Msisdn = 447961832063
  and gtw.TransactionTypeId in (2,7)
  order by gtw.CreateDate desc
  </h4>

  <h3>
  Please also check PFI All applications on Titanium.winprod.lan are running without errors
  Use sites on wifi to test : SELECT [RequestedHost] FROM [PayForIt].[dbo].[EscMerchantUrl]

  Further information can be found in handover as per : http://hw-ops01/WinWiki/PFI_V4

  Generated by PFI V4 Monitor: http://mh-pfi-mon-01.win.local:81/overview.php
 </h3>
    </body>
    </html>';

?>