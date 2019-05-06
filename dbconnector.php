<?php 
class DBconnector{
    var $servername = "ec2-50-19-114-27.compute-1.amazonaws.com";
    var $username = "zbxafommugsiji";
    var $password = "52e2db1075d40972685033b59adc908729b0eb84afba35fc2b7de9b20d5f96ab";
    var $dbname = "dg2p13mgriarb";
    var $port = "5432";
    var $conn;
           public function runQuery($sql)
           {
			$conn = pg_connect("host=".$this->servername." port=".$this->port." dbname=".$this->dbname." user=".$this->username." password=".$this->password."") or die("Connection failed: ".pg_last_error());
            //chay cau truy van
            $result = pg_query($conn, $sql);
            //doc het cau truy van, tra ve mot mang
            $rows = pg_fetch_all($result);
            //dong ket noi   
            $conn=pg_close($conn);
            return $rows;     
           }
           public function execStatement($sql)
           {
            $conn = pg_connect("host=".$this->servername." port=".$this->port." dbname=".$this->dbname." user=".$this->username." password=".$this->password."") or die("Connection failed: ".pg_last_error());
            //chay cau truy van
            $result = pg_query($conn, $sql);
            //dong ket noi   
            $conn=pg_close($conn);
            return $result;   
           }
} ?>