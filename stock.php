 <?php     

session_start();


require "connection.php";   
      
      $oof = $_GET['oof'];
      $bis = $_GET['bis'];


      if($oof != null){

       $sql = " UPDATE products SET status = FALSE WHERE ( Product_ID  = '$oof')";
        if($conn->query($sql) === TRUE){
  echo("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated!');
    window.location.href='editproduct.php';
    </script>");
 }else{
  echo "Error: " . $sql . "<br>" . $conn->error;
 }

        
      }else{
       
       $sql = " UPDATE products SET status = TRUE WHERE ( Product_ID  = '$bis')";
        if($conn->query($sql) === TRUE){
  echo("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Updated!');
    window.location.href='editproduct.php';
    </script>");
 }else{
  echo "Error: " . $sql . "<br>" . $conn->error;
 }
      }


      
      

?>