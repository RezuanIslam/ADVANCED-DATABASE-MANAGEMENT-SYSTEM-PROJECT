<?php

// Create connection to Oracle
$conn = oci_connect("scott", "tiger", "//localhost:1521/XE");

if (!$conn) {
  
$m = oci_error();
  
echo $m['message'], "\n";
 
exit;

}
else {
  
print "Connected to Oracle DB!";

}

// Close the Oracle connection

oci_close($conn);
?>
