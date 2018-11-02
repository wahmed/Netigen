<!DOCTYPE html>
<STYLE TYPE="text/css">
<!--
BODY
   {
	   font-family:sans-serif;
   }
A:link{color:FireBrick }
A:visited{color:FireBrick }
error {color:red;}
-->
</STYLE>
<html>
<head>	
	<body background="./images/background3.jpg">
<title>Network Impairment Generator</title>
<meta charset="UTF-16">
<script src="stopwatch.js"></script>
<body onload="show();">
	
<table>
	<td><tr><b>&nbsp;Parameters Updated</b></tr></td>
	<tr>
	<td><b>Elapsed Time : </b><span id="time" onload="start();"></span></td>
	<td><input type="button" value="start" onclick="start();"></td>
	<td><input type="button" value="stop" onclick="stop();"></td>
	<td><input type="button" value="reset" onclick="reset()"></td>
	</tr>
	<!--<tr><td><img src="./images/space.png" ></img></td></tr>-->
	<tr><td><b>Probability Distrubtion:</b> Gaussian (normal)</td></tr>
</table>

<table>
<td>
<table style="width:300px">
	<Tr> <b>Values Set - R(x) Server to Client &darr; (Downlink)</b></Tr>
	<tr> <td>Downlink Rate:</td><td><?php echo $_POST["downLinkRate"];?> Mbit/sec</td></tr>
    <tr> <td>Delay = </td><td><?php echo $_POST["delayRx"];?> ms</td></tr>
    <tr> <td>Jitter = </td><td><?php echo $_POST["jitterRx"];?>%</td></tr>
    <tr> <td>Packet Loss = </td><td><?php echo $_POST["lossRx"];?>%</td></tr>
    <tr> <td>Duplicate = </td><td><?php echo $_POST["duplicateRx"];?>%</td></tr>
    <tr> <td>Corruption = </td><td><?php echo $_POST["corruptionRx"];?>%</td></tr>
    <tr> <td>Reorder = </td><td><?php echo $_POST["reorderRx"];?>%</td></tr>
</table>
</td>
<td><img src="./images/space.png" ></img></td>
<td><img src="./images/impGen_server-client.png"  height="200"></img></td>
<tr><img src="./images/space.png" ></img></tr>
</table>

<table>
	<td>
<table style="width:300px">
	<Tr> <b>Values Set - T(x) Client to Server &uarr; (UpLink)</b></Tr>
	<tr> <td>Uplink Rate:</td><td><?php echo $_POST["upLinkRate"];?> Mbit/sec</td></tr>
    <tr> <td>Delay = </td><td><?php echo $_POST["delayTx"];?> ms</td></tr>
    <tr> <td>Jitter = </td><td><?php echo $_POST["jitterTx"];?>%</td></tr>
    <tr> <td>Packet Loss = </td><td><?php echo $_POST["lossTx"];?>%</td></tr>
    <tr> <td>Duplicate = </td><td><?php echo $_POST["duplicateTx"];?>%</td></tr>
    <tr> <td>Corruption = </td><td><?php echo $_POST["corruptionTx"];?>%</td></tr>
    <tr> <td>Reorder = </td><td><?php echo $_POST["reorderTx"];?>%</td></tr>
</table>
</td>
<td><img src="./images/space.png" ></img></td>
<td><img src="./images/impGen_client-server.png"  height="200"></img></td>
<tr><img src="./images/space.png" ></img></tr>
<tr><img src="./images/space.png" ></img></tr>
</table>
<br>

<script type="text/javascript">
function goBack()
  {
  window.history.back()
  }
</script>


<!-- <a href="#" onclick="goBack()" /><b>Reset Parameters</b></a> -->
<form method="get" action="/neti/index.php"><button type="submit">Reset</button></form>


    
<?php
function startImpairmentGenerator($delayTx, $jitterTx, $lossTx, $duplicateTx, $corruptionTx, $reorderTx, $delayRx, $jitterRx, $lossRx, $duplicateRx, $corruptionRx, $reorderRx, $upLinkRate, $downLinkRate)
{
//echo $var1;
echo "<br>";
chdir('/var/www/html/neti/');
//echo dirname(__FILE__);

/*
$setupBridge = shell_exec('sudo sh setup-bridge.sh');
echo $setupBridge;
#$tc_qdisc=shell_exec('tc qdisc');
$brctl=shell_exec('sudo sh brctl show');
echo $brctl;
*/


$small_init_delta = 0.001;

#initialize the values with a small number to fix disq bug of not taking zero(0) values on Ubuntu 18?
$lossRx = $lossRx+$small_init_delta;
$duplicateRx = $duplicateRx+$small_init_delta;
$corruptionRx = $corruptionRx+$small_init_delta;
$reorderRx = $reorderRx+$small_init_delta;
$delayRx = $delayRx+$small_init_delta;


$lossTx = $lossTx+$small_init_delta;
$duplicateTx = $duplicateTx+$small_init_delta;
$corruptionTx = $corruptionTx+$small_init_delta;
$reorderTx = $reorderTx+$small_init_delta;
$delayTx = $delayTx+$small_init_delta;

//Mbit to Kbit conversion
$downLinkRate = $downLinkRate * 1024;
$upLinkRate = $upLinkRate * 1024;


 
echo "<br>";
$commandString =  'sudo sh impare.sh '.$delayTx.' '.$jitterTx.' '.$lossTx.' '.$duplicateTx.' '.$corruptionTx.' '.$reorderTx.' '.$delayRx.' '.$jitterRx.' '.$lossRx.' '.$duplicateRx.' '.$corruptionRx.' '.$reorderRx. ' '.$downLinkRate.'kbit'.' '.$upLinkRate.'kbit'; 
#echo $commandString;
echo "<br>";
echo "<br>";
#echo $commandString;
echo "<br>";
echo "<br>";

#$theImpairmenentGen  = shell_exec('./impare.sh '.$delayTx.' '.$jitterTx.' '.$lossTx.' '.$duplicateTx.' '.$corruptionTx.' '.$reorderTx); downLinkRate
$theImpairmenentGen  = shell_exec($commandString);
echo $theImpairmenentGen;

}

startImpairmentGenerator(
$_POST["delayTx"],
$_POST["jitterTx"],
$_POST["lossTx"],
$_POST["duplicateTx"],
$_POST["corruptionTx"],
$_POST["reorderTx"],
$_POST["delayRx"],
$_POST["jitterRx"],
$_POST["lossRx"],
$_POST["duplicateRx"],
$_POST["corruptionRx"],
$_POST["reorderRx"],
$_POST["upLinkRate"],
$_POST["downLinkRate"]
);

//makeFileString($_POST["delayTx"]); // call the function
//echo "<br>";
//echo $imparesh;

/*
$old_path = getcwd();
chdir('/var/www/netimp/');
//$output = exec(dirname(__FILE__)."/test.sh");
echo dirname(__FILE__);
$delayTX = $_POST["delayTx"];
$output = shell_exec('./test.sh '.$delayTX);
echo $output;
chdir($old_path);
*/
//For Linux
//$result = shell_exec('ls -altp');
//echo "<pre>$result</pre>";

?>
</body>
</html>
