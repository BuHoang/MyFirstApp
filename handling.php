<?php
   require_once('./dbconnector.php');
   if (isset($_POST['them'])) {
        //them
    $Staffname=$_POST['Staff Name'];
    $Position=$_POST['Position'];
    $Address=$_POST['Address'];
    $Moneyreceivedeachmonth=$_POST['Money received each month'];
    $sql="Insert Into ATNstaff (Staff Name, Position, Address, Money received each month) values('".$Staffname."','".$Position."','".$Address."','".$Moneyreceivedeachmonth."')";
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);
    header('location:index.php');
    } 
    else{
    $id=$_GET['ID'];
    $sql="DELETE FROM ATNstaff WHERE ID = $ID";
    $cn = new DBConnector();
    $return = $cn->execStatement($sql);    
    header('location:index.php'); 
    }
?>