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
<title>Sky Research, Network Impairment Generator</title>
</head>

<body>
	<img src="./images/skycolored.png" ></img>
	<br>
	<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PDD Research, Network Impairment Generator</b>
	<!--<img src="./images/space.png" ></img>-->
	
<!-- writeimpare-->

<form action="processinput.php" method="post">
	
	<table>
	<td>
    <table style="width:350px">
	
    <Tr> <b>T(x) Client to server </b></Tr>
    <tr><td>Up-Link Rate:</td> <td> <input type="number" maxlength="6" size="6" name="upLinkRate" value = "10"> Mbps</td></tr>
    <tr><td>Delay:</td> <td> <input type="number" maxlength="3" size="3" name="delayTx" value = "0"> ms</td></tr>
    <tr><td>Jitter:</td> <td> <input type="number" maxlength="2" size="2" name="jitterTx" value = "15"> %</td></tr>
    <tr><td>Packet Loss:</td> <td> <input type="number" maxlength="2" size="2" name="lossTx" value = "0"> %</td></tr>
    <tr><td>Duplicate:</td> <td> <input type="number" maxlength="2" size="2" name="duplicateTx" value = "0"> %</td></tr>
    <tr><td>Corrupt Packets:</td> <td> <input type="number" maxlength="2" size="2"  name="corruptionTx" value = "0"> %</td></tr>
    <tr><td>Reorder:</td> <td> <input type="number" maxlength="2" size="2" name="reorderTx" value = "0"> %</td></tr>
    
    
    </table>
	</td>
	<td><img src="./images/space.png" ></img></td>
	<td><img src="./images/impGen_client-server.png"  height="200"></img></td>
	<tr><img src="./images/space.png" ></img></tr>
	<tr><img src="./images/space.png" ></img></tr>
	</table>
   
   <br><br>

<table>
	<td>
    <table style="width:350px">
    <Tr> <b>R(x) Server to Client </b></Tr>
    <tr><td>Down-Link Rate:</td> <td> <input type="number" maxlength="6" size="6" name="downLinkRate" value = "20"> Mbps</td></tr>
    <tr><td>Delay:</td> <td> <input type="number" maxlength="3" size="3" name="delayRx" value = "0"> ms</td></tr>
    <tr><td>Jitter:</td> <td> <input type="number" maxlength="2" size="2" name="jitterRx" value = "20"> %</td></tr>
    <tr><td>Packet Loss:</td> <td> <input type="number" maxlength="2" size="2" name="lossRx" value = "0"> %</td></tr>
    <tr><td>Duplicate:</td> <td> <input type="number" maxlength="2" size="2" name="duplicateRx" value = "0"> %</td></tr>
    <tr><td>Corrupt Packets:</td> <td> <input type="number" maxlength="2" size="2"  name="corruptionRx" value = "0"> %</td></tr>
    <tr><td>Reorder:</td> <td> <input type="number" maxlength="2" size="2" name="reorderRx" value = "0"> %</td></tr>
	</table>
	</td>
	<td><img src="./images/space.png" ></img></td>
	<td><img src="./images/impGen_server-client.png"  height="200"></img></td>
	</table>
		
    <br>
    <table style="width:350px" border = "0">
	<TR><TD><input type="submit" name = "startthe" value="Set Parameters & Start"></TD></TR>
	<TR></TR>
	<TR> <TD><b>Load Profiles</b></TD></TR>
	
	<TR>
		<TD>Fast Network</TD>
		<TD><input type="submit" value="High Jitter"></TD>
		<TD><input type="submit" value="High Delay"></TD>
		<TD><input type="submit" value="The Crunch"></TD>
	</TR>
	<TR>
		<TD>Slow Network</TD>
		<TD><input type="submit" value="High Jitter"></TD>
		<TD><input type="submit" value="High Delay"></TD>
		<TD><input type="submit" value="The Crunch"></TD>
	</TR>
    </table>
</form>
</body>

</html> 

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor. 
 */
?>
