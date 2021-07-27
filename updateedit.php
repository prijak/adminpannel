 <?php     

session_start();


require "connection.php";   
      
      $pid = $_POST['id'];
      $pname = $_POST['productname'];
      $stock = $_POST['Stock'];
      $price = $_POST['Price'];
      $discountedPrice = $_POST['DiscountedPrice'];
      $category = $_POST['Category'];
      $rating = $_POST['Rating'];
      $description = $_POST['Description'];
      $size = $_POST['Size'];
      $design = $_POST['Design'];
      $company = $_POST['Company'];
      $subCategory = $_POST['Sub-Category'];
      $null = "null";
      $t = time();


        $targetDir = "C:/MAMP/htdocs/adminpannel/src/"; 
    $allowTypes = array('jpg','png','jpeg','.webp'); 
     
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['files']['name']); 
    if(!empty($fileNames)){ 
        foreach($_FILES['files']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['files']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    $insertValuesSQL .= "".$fileName.","; 
                }else{ 
                    $errorUpload .= $_FILES['files']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['files']['name'][$key].' | '; 
            }
            
   
             
                
     
        } 
         
        // Error message 
        $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
        $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
        $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
       }
         $allimages = explode(',',$insertValuesSQL);

         foreach($allimages as $value) {

          if (trim($value) == "") { 
            continue;
            }else{

            $insert="INSERT INTO images (file_name,uploaded_on,pid) VALUES('$value','$t','$pid')"; 
            if($conn->query($insert) === TRUE){ 
                
                echo"Successful";

                $statusMsg = "Files are uploaded successfully.".$errorMsg; 

                $x++;
            }else{ 

             echo "Error: " . $insert . "<br>" . $conn->error;
                $statusMsg = "Sorry, there was an error uploading your file."; 
            } 
            }
              
        }
   

      
                $sql = " UPDATE products SET Product_name = '$pname', Price  = '$price',  DiscountedPrice  = '$discountedPrice',  Category  = '$category',  SubCategory  = '$subCategory',  Description  = '$description',  Size  = '$size',  Design  = '$design',  Company  = '$company' WHERE ( Product_ID  = '$pid')";
        


                  if ($conn->query($sql) === TRUE ) {

  echo("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Added!');
    window.location.href='editItems.php?pid=$pid';
    </script>");
 }else{
  echo "Error: " . $sql2 . "<br>" . $conn->error;
 }
      
      
    
    ?>