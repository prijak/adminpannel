<?php     

session_start();


require "connection.php";   

$tablename = $_POST['frontItemtoedit'];
$newpid = $_POST['PID'];
$oldpid = $_POST['oldpid'];


$sql="UPDATE $tablename SET pid =$newpid  WHERE  pid  = $oldpid";


      
    if ( $conn->query($sql) === TRUE  ) {


    echo ("<script LANGUAGE='JavaScript'>
  window.alert('Updated Successfully!');
  window.location.href='frontitemsedit.php?wtd=$tablename';
  </script>");

;
}
        
else {

echo "Error: " . $sql .  "<br>" . $conn->error;

          
      }


?>