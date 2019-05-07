<?php
   require_once('./dbconnector.php');
   if (isset($_POST['them'])) {
        //them
    $id=$_POST['id'];
    $name=$_POST['name'];
    $job=$_POST['job'];
    $address=$_POST['address'];
    $salary=$_POST['salary'];
    $sql="Insert Into staff1 (name, job, address, salary) values(".$ID.",'".$name."','".$job."','".$address."','".$salary."')";
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);
    header('location:index.php');
    } 
    else{
    $id=$_GET['id'];
    $sql="DELETE FROM staff1 WHERE id = $id";
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);
    echo($return);    
    header('location:index.php'); 
    }
?>