<!DOCTYPE html>
<STYLE TYPE="text/css">

BODY
   {
	   font-family:sans-serif;
   }
A:link{color:white}
A:visited{color:yellow}
error {color:red;}

table,th
{
border:1px solid gainsboro;
}

</STYLE>
<html>
<head>
<title>Network Virtualization for Software Testing -  Impairment Generator</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

<link rel="stylesheet" href="rangeslider/rangeslider.css">
    <style>
        *,
        *:before,
        *:after {
            -webkit-box-sizing: border-box;
               -moz-box-sizing: border-box;
                    box-sizing: border-box;
        }
        html {
            color: #404040;
            font-family: Helvetica, arial, sans-serif;
        }
        body {
            padding: 0px 0px;
            margin: 50px;
            max-width: 800px;
        }
        output {
            display: block;
            font-size: 14px;
            font-weight: bold;
            text-align: right;
            margin: -24px 0;
            width: 100%;
        }
    </style>
</head>

<body>
	<table  border="0">
		<TR>
			<img src="./images/header.png"></img>
		</TR>
	 </table>

<form method="post" action="writeimpare.php">
<table>
	<td>
    <table style="width:660px" >
    <Tr> <b> &darr; Downlink R(x) - Server to Client </b></Tr>
    <tr><td>Downlink Rate:</td><td width="70%"><input type="range" min="0" max="20" step="0.1" value="4.5" name="downLinkRate" data-rangeslider><output></output></td><td valign="bottom">Mbps</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>Delay:</td><td><input type="range" min="0" max="100" step="1" value="0" name="delayRx" data-rangeslider><output></output></td><td>ms</td></tr><tr></tr>
    <tr><td>&nbsp;</td></tr>
    <tr><td>Jitter:</td><td><input type="range" min="0" max="100" step="1" value="0" name="jitterRx" data-rangeslider><output></output></td><td>%</td></tr><tr></tr>
    <tr><td>&nbsp;</td></tr>
    <tr><td>Packet Loss:</td><td><input type="range" min="0" max="100" step="1" value="0" name="lossRx" data-rangeslider><output></output></td><td>%</td></tr><tr></tr>
    <tr><td>&nbsp;</td></tr>
    <tr><td>Duplicate :</td><td><input type="range" min="0" max="100" step="1" value="0" name="duplicateRx" data-rangeslider><output></output></td><td>%</td></tr><tr></tr>
    <tr><td>&nbsp;</td></tr>
    <tr><td>Corrupt Packets :</td><td><input type="range" min="0" max="100" step="1" value="0" name="corruptionRx" data-rangeslider><output></output></td><td>%</td></tr><tr></tr>
    <tr><td>&nbsp;</td></tr>
    <tr><td>Reorder Packets :</td><td><input type="range" min="0" max="100" step="1" value="0" name="reorderRx" data-rangeslider><output></output></td><td>%</td></tr><tr></tr>
    <tr><td>&nbsp;</td></tr>
	</table>
	</td>
	<td><img src="./images/space.png" ></img></td>
	<td><img src="./images/impGen_server-client.png"  height="200"></img></td>
</table>
<!--value="Start Impairments"-->
<table>
	<td>
    <table style="width:660px" border="0">
	<Tr> <b> &uarr; Uplink T(x) - Client to Server </b></Tr>
	<tr><td>Up-Link Rate:</td><td width="70%"><input type="range" min="0" max="20" step="0.1" value="1.5" name="upLinkRate" data-rangeslider><output></output></td><td valign="bottom">Mbps</td></tr>
	<tr><td>&nbsp;</td></tr>
	<tr><td>Delay:</td><td><input type="range" min="0" max="100" step="1" value="0" name="delayTx" data-rangeslider><output></output></td><td>ms</td></tr><tr></tr>
    <tr><td>&nbsp;</td></tr>
    <tr><td>Jitter:</td><td><input type="range" min="0" max="100" step="1" value="0" name="jitterTx" data-rangeslider><output></output></td><td>%</td></tr><tr></tr>
    <tr><td>&nbsp;</td></tr>
    <tr><td>Packet Loss:</td><td><input type="range" min="0" max="100" step="1" value="0" name="lossTx" data-rangeslider><output></output></td><td>%</td></tr><tr></tr>
    <tr><td>&nbsp;</td></tr>
    <tr><td>Duplicate :</td><td><input type="range" min="0" max="100" step="1" value="0" name="duplicateTx" data-rangeslider><output></output></td><td>%</td></tr><tr></tr>
    <tr><td>&nbsp;</td></tr>
    <tr><td>Corrupt Packets :</td><td><input type="range" min="0" max="100" step="1" value="0" name="corruptionTx" data-rangeslider><output></output></td><td>%</td></tr><tr></tr>
    <tr><td>&nbsp;</td></tr>
    <tr><td>Reorder Packets :</td><td><input type="range" min="0" max="100" step="1" value="0" name="reorderTx" data-rangeslider><output></output></td><td>%</td></tr><tr></tr>
    <tr><td>&nbsp;</td></tr>  
	</table>
	</td>
	<td><img src="./images/space.png" ></img></td>
	<td><img src="./images/impGen_client-server.png"  height="200"></img></td>
	<!--<tr><img src="./images/space.png" ></img></tr> 
	<tr><img src="./images/space.png" ></img></tr> -->
	<br>
	</table>
	
    <table style="width:665px" border = "0">
	<TR><TD><input type="submit" data-inline="true" value="&nbsp;&nbsp;&nbsp;  Submit  &nbsp;&nbsp;&nbsp;"></TD>
</form>
		<TD><form method="get" action="/neti/index.php"><button type="submit"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Reset &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </button></form></TD>
	</TR>
	<TR></TR>
	<TR> <TD><b>Load Profiles</b></TD></TR>
	
	<TR>
		<TD style="color: #fff; background: Black;">&nbsp Fast Network</TD>
		<TD> <form method="get" action="/neti/fastJitter.php"><button type="submit">High Jitter</button></form></TD>
		<TD> <form method="get" action="/neti/fastDelay.php"><button type="submit">High Delay</button></form></TD>
		<TD> <form method="get" action="/neti/fastPacketLoss.php"><button type="submit">Packet Loss</button></form></TD>
		<TD> <form method="get" action="/neti/fastCrunch.php"><button type="submit">The Crunch</button></form></TD>		
	</TR>
	<TR> </TR>
	<TR>
		<TD style="color: #fff; background: Red;">&nbsp Slow Network</TD>
		<TD> <form method="get" action="/neti/slowJitter.php"><button type="submit">High Jitter</button></form></TD>
		<TD> <form method="get" action="/neti/slowDelay.php"><button type="submit">High Delay</button></form></TD>
		<TD> <form method="get" action="/neti/slowPacketLoss.php"><button type="submit">Packet Loss</button></form></TD>
		<TD> <form method="get" action="/neti/slowCrunch.php"><button type="submit">The Crunch</button></form></TD>	
	</TR>
    </table>
    
<script src="rangeslider/jquery.min.js"></script>
    <script src="rangeslider/rangeslider.min.js"></script>
    <script>
    $(function() {

        var $document   = $(document),
            selector    = '[data-rangeslider]',
            $element    = $(selector);

        // Example functionality to demonstrate a value feedback
        function valueOutput(element) {
            var value = element.value,
                output = element.parentNode.getElementsByTagName('output')[0];
            output.innerHTML = value;
        }
        for (var i = $element.length - 1; i >= 0; i--) {
            valueOutput($element[i]);
        };
        $document.on('input', 'input[type="range"]', function(e) {
            valueOutput(e.target);
        });

        // Example functionality to demonstrate disabled functionality
        $document .on('click', '#js-example-disabled button[data-behaviour="toggle"]', function(e) {
            var $inputRange = $('input[type="range"]', e.target.parentNode);

            if ($inputRange[0].disabled) {
                $inputRange.prop("disabled", false);
            }
            else {
                $inputRange.prop("disabled", true);
            }
            $inputRange.rangeslider('update');
        });

        // Example functionality to demonstrate programmatic value changes
        $document.on('click', '#js-example-change-value button', function(e) {
            var $inputRange = $('input[type="range"]', e.target.parentNode),
                value = $('input[type="number"]', e.target.parentNode)[0].value;

            $inputRange.val(value).change();
        });

        // Example functionality to demonstrate programmatic attribute changes
        $document.on('click', '#js-example-change-attributes button', function(e) {
            var $inputRange = $('input[type="range"]', e.target.parentNode),
                attributes = {
                    min: $('input[name="min"]', e.target.parentNode)[0].value,
                    max: $('input[name="max"]', e.target.parentNode)[0].value,
                    step: $('input[name="step"]', e.target.parentNode)[0].value
                };

            $inputRange.attr(attributes);
            $inputRange.rangeslider('update', true);
        });

        // Example functionality to demonstrate destroy functionality
        $document
            .on('click', '#js-example-destroy button[data-behaviour="destroy"]', function(e) {
                $('input[type="range"]', e.target.parentNode).rangeslider('destroy');
            })
            .on('click', '#js-example-destroy button[data-behaviour="initialize"]', function(e) {
                $('input[type="range"]', e.target.parentNode).rangeslider({ polyfill: false });
            });

        // Example functionality to test initialisation on hidden elements
        $document
            .on('click', '#js-example-hidden button[data-behaviour="toggle"]', function(e) {
                var $container = $(e.target.previousElementSibling);
                $container.toggle();
            });

        // Basic rangeslider initialization
        $element.rangeslider({

            // Deactivate the feature detection
            polyfill: false,

            // Callback function
            onInit: function() {},

            // Callback function
            onSlide: function(position, value) {
                console.log('onSlide');
                console.log('position: ' + position, 'value: ' + value);
            },

            // Callback function
            onSlideEnd: function(position, value) {
                console.log('onSlideEnd');
                console.log('position: ' + position, 'value: ' + value);
            }
        });

    });
    </script>
</body>
</html> 

<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor. 
 */
?>

