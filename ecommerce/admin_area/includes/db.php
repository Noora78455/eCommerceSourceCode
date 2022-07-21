<?php 
// After uploading to online server, change this connection accordingly

//$con = mysqli_connect("localhost","root","","ecommerce");

$sslcert    = "ssl/DigiCertGlobalRootCA.crt.pem(1)";
//$con = mysqli_connect("localhost","root","","ecommerce");
$con = mysqli_init(); mysqli_ssl_set($con,NULL,NULL, "$sslcert", NULL, NULL); 
mysqli_real_connect($conn, "mydbserveur.mysql.database.azure.com", "nourrad", "pass@1234", "db", 3306, MYSQLI_CLIENT_SSL);

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


?>
