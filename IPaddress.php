<?php
//first method // try this or second
echo 'User IP Address - '.$_SERVER['REMOTE_ADDR']; 
echo "<br><br>" ;
// second method
if (!empty($_SERVER['HTTP_CLIENT_IP']))   
  {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
  }

elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
  {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
  }
else
  {
    $ip_address = $_SERVER['REMOTE_ADDR'];
  }
echo "IP address = ";
echo $ip_address;

?>
