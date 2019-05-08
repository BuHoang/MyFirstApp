<?php

$connection = pg_connect("host=ec2-50-19-114-27.compute-1.amazonaws.com port=5432 dbname=dg2p13mgriarb user=zbxafommugsiji password=52e2db1075d40972685033b59adc908729b0eb84afba35fc2b7de9b20d5f96ab");  
 if(!$connection) {
     die("Database connection failed");
 }
 ?>
