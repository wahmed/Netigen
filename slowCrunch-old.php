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
	<body background="./images/background3.jpg">
<title>Sky Research, Network Impairment Generator</title>
</head>

<body>
	<img src="./images/skycolored.png" ></img>
	<br>
	<b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PDD Research, Network Impairment Generator</b>
	<!--<img src="./images/space.png" ></img>-->
	
<!-- writeimpare-->

<form action="writeimpare.php" method="post">
	
	<table>
	<td>
    <table style="width:350px">
	
    <Tr> <b>T(x) Client to server </b></Tr>
    <tr style="color: #fff; background: Red;"><td>Up-Link Rate:</td> <td> <input type="number" maxlength="6" size="6" name="upLinkRate" value = "1"> Mbps</td></tr>
    <tr style="color: #fff; background: #FF7519;"><td>Delay:</td> <td> <input type="number" maxlength="3" size="3" name="delayTx" value = "5"> ms</td></tr>
    <tr style="color: #fff; background: #FF7519;"><td>Jitter:</td> <td> <input type="number" maxlength="2" size="2" name="jitterTx" value = "15"> %</td></tr>
    <tr style="color: #fff; background: #FF7519;"><td>Packet Loss:</td> <td> <input type="number" maxlength="2" size="2" name="lossTx" value = "10"> %</td></tr>
    <tr><td>Duplicate:</td> <td> <input type="number" maxlength="2" size="2" name="duplicateTx" value = "0"> %</td></tr>
    <tr style="color: #fff; background: #FF7519;"><td>Corrupt Packets:</td> <td> <input type="number" maxlength="2" size="2"  name="corruptionTx" value = "5"> %</td></tr>
    <tr style="color: #fff; background: #FF7519;"><td>Reorder:</td> <td> <input type="number" maxlength="2" size="2" name="reorderTx" value = "5"> %</td></tr>
    
    
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
    <tr style="color: #fff; background: Red;"><td>Down-Link Rate:</td> <td> <input type="number" maxlength="6" size="6" name="downLinkRate" value = "6"> Mbps</td></tr>
    <tr style="color: #fff; background: #FF7519;"><td>Delay:</td> <td> <input type="number" maxlength="3" size="3" name="delayRx" value = "5"> ms</td></tr>
    <tr style="color: #fff; background: #FF7519;"><td>Jitter:</td> <td> <input type="number" maxlength="2" size="2" name="jitterRx" value = "20"> %</td></tr>
    <tr style="color: #fff; background: #FF7519;"><td>Packet Loss:</td> <td> <input type="number" maxlength="2" size="2" name="lossRx" value = "10"> %</td></tr>
    <tr><td>Duplicate:</td> <td> <input type="number" maxlength="2" size="2" name="duplicateRx" value = "0"> %</td></tr>
    <tr style="color: #fff; background: #FF7519;"><td>Corrupt Packets:</td> <td> <input type="number" maxlength="2" size="2"  name="corruptionRx" value = "5"> %</td></tr>
    <tr style="color: #fff; background: #FF7519;"><td>Reorder:</td> <td> <input type="number" maxlength="2" size="2" name="reorderRx" value = "5"> %</td></tr>
	</table>
	</td>
	<td><img src="./images/space.png" ></img></td>
	<td><img src="./images/impGen_server-client.png"  height="200"></img></td>
	</table>
		
    <br>
    <table style="width:350px" border = "0">
	<TR>		
		<TD></img><input type="submit" name = "startthe" value="Start Impairments"></TD></form> 
		<TD><img src="./images/arrows1.rotated.resized.gif"></TD>
		<TD><form method="get" action="/netimp/index.php"><button type="submit">Reset</button></form></TD>
	</TR>	
	<TR></TR>
	<TR> <TD><b>Load Profiles</b></TD></TR>
	
	<TR>
		<TD style="color: #fff; background: Black;">Fast Network</TD>
		<TD> <form method="get" action="/netimp/fastJitter.php"><button type="submit">High Jitter</button></form></TD>
		<TD> <form method="get" action="/netimp/fastDelay.php"><button type="submit">High Delay</button></form></TD>
		<TD> <form method="get" action="/netimp/fastCrunch.php"><button type="submit">The Crunch</button></form></TD>		
	</TR>
	<TR> </TR>
	<TR>
		<TD style="color: #fff; background: Red;">Slow Network</TD>
		<TD> <form method="get" action="/netimp/slowJitter.php"><button type="submit">High Jitter</button></form></TD>
		<TD> <form method="get" action="/netimp/slowDelay.php"><button type="submit">High Delay</button></form></TD>
		<TD> <form method="get" action="/netimp/slowCrunch.php"><button type="submit">The Crunch</button></form></TD>	
	</TR>
    </table>

</body>
</html> 

<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor. 
 */
?>
