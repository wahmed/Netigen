<html>
<body>

<?php
print ('Set Parameters & Start');
if(isset($_POST['startthe'])) 
	{ 
		print ('<br> it works');
	}
	
	//create array of data to be posted
	//$_POST["upLinkRate"]
$post_data['upLinkRate'] = '77';


//traverse array and prepare data for posting (key1=value1)
foreach ( $post_data as $key => $value) {
    $post_items[] = $key . '=' . $value;
}

//create the final string to be posted using implode()
$post_string = implode ('&', $post_items);
 
//create cURL connection
$curl_connection = curl_init('writeimpare.php');
 
//set options
curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($curl_connection, CURLOPT_USERAGENT,
  "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)");
curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl_connection, CURLOPT_FOLLOWLOCATION, 1);
 
//set data to be posted
curl_setopt($curl_connection, CURLOPT_POSTFIELDS, $post_string);
 
//perform our request
$result = curl_exec($curl_connection);
 
//show information regarding the request
print_r(curl_getinfo($curl_connection));
echo curl_errno($curl_connection) . '-' .
                curl_error($curl_connection);
 
//close the connection
curl_close($curl_connection);
	
/*

else if(isset($_POST['submit']) { /* ...submit stuff...  }
* Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>
*/
?>


</body>
</html> 
