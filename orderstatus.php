<?php

session_start();


require "connection.php";

$wtd = $_POST['whattodo'];
$oid = $_POST['oid'];



if ($wtd == "Delete") {
    $sql = "DELETE FROM orderdetails WHERE OrderId='$oid'";
    $sql2 = "DELETE FROM orders WHERE OrderId ='$oid'";


    if ($conn->query($sql) === TRUE && $conn->query($sql2) === TRUE) {


        echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Deleted!');
    window.location.href='orders.php';
    </script>");;
    } else {

        echo "Error: " . $sql . $sql2 . "<br>" . $conn->error;
    }
} else {

    $sql = "UPDATE orderdetails SET status = '$wtd' WHERE `orderdetails`.`OrderId` = $oid ";


    if ($conn->query($sql) === TRUE ) {


        echo ("<script LANGUAGE='JavaScript'>
            window.alert('Succesfully Updated!');
            window.location.href='orders.php';
            </script>");
    } else {

        echo "Error: " . $sql . $sql2 . "<br>" . $conn->error;
    }
}
