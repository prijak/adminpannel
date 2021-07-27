 <?php     

session_start();


require "connection.php";   

$pid = $_POST['pid'];

 $sql="DELETE FROM products WHERE Product_ID='$pid'";
  $sql2="DELETE FROM images WHERE pid='$pid'";

        
      if ( $conn->query($sql) === TRUE && $conn->query($sql2) === TRUE ) {


      echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Deleted!');
    window.location.href='removeproduct.php';
    </script>");

;
}
          
 else {

  echo "Error: " . $sql . $sql2 . "<br>" . $conn->error;

            
        }


?>