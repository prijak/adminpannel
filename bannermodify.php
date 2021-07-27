          
       <?php
        session_start();
        require "connection.php";
        $Type = $_POST['type'];

        //////////////////top banner add////////////////////
        if ($Type == "TopHomeBannerADD") {

            $MainHeading = $_POST['Heading'];
            $SubHeading = $_POST['subHeading'];
            $Image = '';

            $targetDir = "C:/MAMP/htdocs/adminpannel/src/";
            $allowTypes = array('jpg', 'png', 'jpeg', '.webp');

            $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
            $fileNames = array_filter($_FILES['files']['name']);
            if (!empty($fileNames)) {
                foreach ($_FILES['files']['name'] as $key => $val) {
                    // File upload path 
                    $fileName = basename($_FILES['files']['name'][$key]);
                    $targetFilePath = $targetDir . $fileName;

                    // Check whether file type is valid 
                    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                    if (in_array($fileType, $allowTypes)) {
                        // Upload file to server 
                        if (move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)) {
                            // Image db insert sql 
                            $insertValuesSQL .= "" . $fileName . ",";
                        } else {
                            $errorUpload .= $_FILES['files']['name'][$key] . ' | ';
                        }
                    } else {
                        $errorUploadType .= $_FILES['files']['name'][$key] . ' | ';
                    }
                }

                // Error message 
                $errorUpload = !empty($errorUpload) ? 'Upload Error: ' . trim($errorUpload, ' | ') : '';
                $errorUploadType = !empty($errorUploadType) ? 'File Type Error: ' . trim($errorUploadType, ' | ') : '';
                $errorMsg = !empty($errorUpload) ? '<br/>' . $errorUpload . '<br/>' . $errorUploadType : '<br/>' . $errorUploadType;
            }
            $allimages = explode(',', $insertValuesSQL);

            $Image = $allimages[0];




            $sql = "INSERT INTO banner (SubHeading, MainHeading, Image, Type, VlogLink) VALUES ( '$SubHeading', '$MainHeading', '$Image', 'TopHomeBanner', NULL)";

            if ($conn->query($sql) === TRUE) {
                echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Added!');
    window.location.href='banners.php';
    </script>");
            } else {
                echo "Error: " . $sql . $sql2 . "<br>" . $conn->error;
            }





            //////////////////////////////// top banner delete //////////////////////////////

        } else if ($Type == "TopHomeBannerDEL") {

            $pid = $_POST['pid'];

            $sql = "DELETE FROM banner WHERE ID='$pid'";

            if ($conn->query($sql) === TRUE) {
                echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Deleted!');
    window.location.href='editbanners.php?banneredit=removehometopbanner';
    </script>");
            } else {
                echo "Error: " . $sql . $sql2 . "<br>" . $conn->error;
            }

            ///////////////////////////////// top Banner Edit////////////////////////
        } else if ($Type == "TopHomeBannerEDT") {

            $pid = $_POST['pid'];
            $MainHeading = $_POST['Heading'];
            $SubHeading = $_POST['subHeading'];
            $Image = $_POST['Image'];

            $targetDir = "C:/MAMP/htdocs/adminpannel/src/";
            $allowTypes = array('jpg', 'png', 'jpeg', '.webp');

            $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
            $fileNames = array_filter($_FILES['files']['name']);
            if (!empty($fileNames)) {
                foreach ($_FILES['files']['name'] as $key => $val) {
                    // File upload path 
                    $fileName = basename($_FILES['files']['name'][$key]);
                    $targetFilePath = $targetDir . $fileName;

                    // Check whether file type is valid 
                    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                    if (in_array($fileType, $allowTypes)) {
                        // Upload file to server 
                        if (move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)) {
                            // Image db insert sql 
                            $insertValuesSQL .= "" . $fileName . ",";
                        } else {
                            $errorUpload .= $_FILES['files']['name'][$key] . ' | ';
                        }
                    } else {
                        $errorUploadType .= $_FILES['files']['name'][$key] . ' | ';
                    }
                }
            }

            // Error message 
            $errorUpload = !empty($errorUpload) ? 'Upload Error: ' . trim($errorUpload, ' | ') : '';
            $errorUploadType = !empty($errorUploadType) ? 'File Type Error: ' . trim($errorUploadType, ' | ') : '';
            $errorMsg = !empty($errorUpload) ? '<br/>' . $errorUpload . '<br/>' . $errorUploadType : '<br/>' . $errorUploadType;

            $allimages = explode(',', $insertValuesSQL);

            if ($insertValuesSQL == '') {
            } else {
                $Image = $allimages[0];
            }

            $sql = "UPDATE `banner` SET `SubHeading` = '$SubHeading', `MainHeading` = '$MainHeading', `Image` = '$Image' WHERE (ID = '$pid') ";

            if ($conn->query($sql) === TRUE) {
                echo ("<script LANGUAGE='JavaScript'>
                     window.alert('Succesfully Updated!');
                    window.location.href='editbanners.php?banneredit=edithometopbanner';
                </script>");
            } else {
                echo "Error: " . $sql .  "<br>" . $conn->error;
            }


            ///////////////////////// Middle Banner Edit /////////////////////////////////
        } else if ($Type == "MiddleHomeBannerEDT") {

            $pid = $_POST['pid'];
            $MainHeading = $_POST['Heading'];
            $SubHeading = $_POST['subHeading'];
            $Image = $_POST['Image'];

            $targetDir = "C:/MAMP/htdocs/adminpannel/src/";
            $allowTypes = array('jpg', 'png', 'jpeg', '.webp');

            $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
            $fileNames = array_filter($_FILES['files']['name']);
            if (!empty($fileNames)) {
                foreach ($_FILES['files']['name'] as $key => $val) {
                    // File upload path 
                    $fileName = basename($_FILES['files']['name'][$key]);
                    $targetFilePath = $targetDir . $fileName;

                    // Check whether file type is valid 
                    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                    if (in_array($fileType, $allowTypes)) {
                        // Upload file to server 
                        if (move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)) {
                            // Image db insert sql 
                            $insertValuesSQL .= "" . $fileName . ",";
                        } else {
                            $errorUpload .= $_FILES['files']['name'][$key] . ' | ';
                        }
                    } else {
                        $errorUploadType .= $_FILES['files']['name'][$key] . ' | ';
                    }
                }
            }

            // Error message 
            $errorUpload = !empty($errorUpload) ? 'Upload Error: ' . trim($errorUpload, ' | ') : '';
            $errorUploadType = !empty($errorUploadType) ? 'File Type Error: ' . trim($errorUploadType, ' | ') : '';
            $errorMsg = !empty($errorUpload) ? '<br/>' . $errorUpload . '<br/>' . $errorUploadType : '<br/>' . $errorUploadType;

            $allimages = explode(',', $insertValuesSQL);

            if ($insertValuesSQL == '') {
            } else {
                $Image = $allimages[0];
            }

            $sql = "UPDATE `banner` SET `SubHeading` = '$SubHeading', `MainHeading` = '$MainHeading', `Image` = '$Image' WHERE (ID = '$pid') ";

            if ($conn->query($sql) === TRUE) {
                echo ("<script LANGUAGE='JavaScript'>
                     window.alert('Succesfully Updated!');
                    window.location.href='editbanners.php?banneredit=edithomemiddlebanner';
                </script>");
            } else {
                echo "Error: " . $sql .  "<br>" . $conn->error;
            }


            ///////////////// vlog Add ////////////////////

        } else if ($Type == "VlogAdd") {

            $MainHeading = $_POST['Heading'];
            $SubHeading = $_POST['subHeading'];
            $Image = '';
            $Link = $_POST['link'];

            $targetDir = "C:/MAMP/htdocs/adminpannel/src/";
            $allowTypes = array('jpg', 'png', 'jpeg', '.webp');

            $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
            $fileNames = array_filter($_FILES['files']['name']);
            if (!empty($fileNames)) {
                foreach ($_FILES['files']['name'] as $key => $val) {
                    // File upload path 
                    $fileName = basename($_FILES['files']['name'][$key]);
                    $targetFilePath = $targetDir . $fileName;

                    // Check whether file type is valid 
                    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                    if (in_array($fileType, $allowTypes)) {
                        // Upload file to server 
                        if (move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)) {
                            // Image db insert sql 
                            $insertValuesSQL .= "" . $fileName . ",";
                        } else {
                            $errorUpload .= $_FILES['files']['name'][$key] . ' | ';
                        }
                    } else {
                        $errorUploadType .= $_FILES['files']['name'][$key] . ' | ';
                    }
                }

                // Error message 
                $errorUpload = !empty($errorUpload) ? 'Upload Error: ' . trim($errorUpload, ' | ') : '';
                $errorUploadType = !empty($errorUploadType) ? 'File Type Error: ' . trim($errorUploadType, ' | ') : '';
                $errorMsg = !empty($errorUpload) ? '<br/>' . $errorUpload . '<br/>' . $errorUploadType : '<br/>' . $errorUploadType;
            }
            $allimages = explode(',', $insertValuesSQL);

            $Image = $allimages[0];




            $sql = "INSERT INTO banner (SubHeading, MainHeading, Image, Type, VlogLink) VALUES ( '$SubHeading', '$MainHeading', '$Image', 'Vlog', '$Link')";

            if ($conn->query($sql) === TRUE) {
                echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Added!');
    window.location.href='banners.php';
    </script>");
            } else {
                echo "Error: " . $sql .  "<br>" . $conn->error;
            }





            //////////////////////////////// Vlogr delete //////////////////////////////

        } else if ($Type == "VlogDEL") {

            $pid = $_POST['pid'];

            $sql = "DELETE FROM banner WHERE ID='$pid'";

            if ($conn->query($sql) === TRUE) {
                echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Deleted!');
    window.location.href='editbanners.php?banneredit=removevloggerReview';
    </script>");
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }

            ///////////////////////////////// Vlog Edit////////////////////////
        } else if ($Type == "VlogEDT") {

            $pid = $_POST['pid'];
            $MainHeading = $_POST['Heading'];
            $SubHeading = $_POST['subHeading'];
            $Image = $_POST['Image'];
            $Link = $_POST['link'];

            $targetDir = "C:/MAMP/htdocs/adminpannel/src/";
            $allowTypes = array('jpg', 'png', 'jpeg', '.webp');

            $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
            $fileNames = array_filter($_FILES['files']['name']);
            if (!empty($fileNames)) {
                foreach ($_FILES['files']['name'] as $key => $val) {
                    // File upload path 
                    $fileName = basename($_FILES['files']['name'][$key]);
                    $targetFilePath = $targetDir . $fileName;

                    // Check whether file type is valid 
                    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                    if (in_array($fileType, $allowTypes)) {
                        // Upload file to server 
                        if (move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)) {
                            // Image db insert sql 
                            $insertValuesSQL .= "" . $fileName . ",";
                        } else {
                            $errorUpload .= $_FILES['files']['name'][$key] . ' | ';
                        }
                    } else {
                        $errorUploadType .= $_FILES['files']['name'][$key] . ' | ';
                    }
                }
            }

            // Error message 
            $errorUpload = !empty($errorUpload) ? 'Upload Error: ' . trim($errorUpload, ' | ') : '';
            $errorUploadType = !empty($errorUploadType) ? 'File Type Error: ' . trim($errorUploadType, ' | ') : '';
            $errorMsg = !empty($errorUpload) ? '<br/>' . $errorUpload . '<br/>' . $errorUploadType : '<br/>' . $errorUploadType;

            $allimages = explode(',', $insertValuesSQL);

            if ($insertValuesSQL == '') {
            } else {
                $Image = $allimages[0];
            }

            $sql = "UPDATE `banner` SET `SubHeading` = '$SubHeading', `MainHeading` = '$MainHeading', `Image` = '$Image', `VlogLink` = '$Link' WHERE (ID = '$pid') ";

            if ($conn->query($sql) === TRUE) {
                echo ("<script LANGUAGE='JavaScript'>
                     window.alert('Succesfully Updated!');
                    window.location.href='editbanners.php?banneredit=editvloggerreview';
                </script>");
            } else {
                echo "Error: " . $sql .  "<br>" . $conn->error;
            }

            ///////////////////////// product banner edit/////////////////
        } else if ($Type == "ProductEdit") {

            $pid = $_POST['pid'];
            $MainHeading = $_POST['Heading'];
            $SubHeading = $_POST['subHeading'];
            $Image = $_POST['Image'];

            $targetDir = "C:/MAMP/htdocs/adminpannel/src/";
            $allowTypes = array('jpg', 'png', 'jpeg', '.webp');

            $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
            $fileNames = array_filter($_FILES['files']['name']);
            if (!empty($fileNames)) {
                foreach ($_FILES['files']['name'] as $key => $val) {
                    // File upload path 
                    $fileName = basename($_FILES['files']['name'][$key]);
                    $targetFilePath = $targetDir . $fileName;

                    // Check whether file type is valid 
                    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
                    if (in_array($fileType, $allowTypes)) {
                        // Upload file to server 
                        if (move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)) {
                            // Image db insert sql 
                            $insertValuesSQL .= "" . $fileName . ",";
                        } else {
                            $errorUpload .= $_FILES['files']['name'][$key] . ' | ';
                        }
                    } else {
                        $errorUploadType .= $_FILES['files']['name'][$key] . ' | ';
                    }
                }
            }

            // Error message 
            $errorUpload = !empty($errorUpload) ? 'Upload Error: ' . trim($errorUpload, ' | ') : '';
            $errorUploadType = !empty($errorUploadType) ? 'File Type Error: ' . trim($errorUploadType, ' | ') : '';
            $errorMsg = !empty($errorUpload) ? '<br/>' . $errorUpload . '<br/>' . $errorUploadType : '<br/>' . $errorUploadType;

            $allimages = explode(',', $insertValuesSQL);

            if ($insertValuesSQL == '') {
            } else {
                $Image = $allimages[0];
            }

            $sql = "UPDATE `banner` SET `SubHeading` = '$SubHeading', `MainHeading` = '$MainHeading', `Image` = '$Image' WHERE (ID = '$pid') ";

            if ($conn->query($sql) === TRUE) {
                echo ("<script LANGUAGE='JavaScript'>
                     window.alert('Succesfully Updated!');
                    window.location.href='editbanners.php?banneredit=editproductsearchbanner';
                </script>");
            } else {
                echo "Error: " . $sql .  "<br>" . $conn->error;
            }
        }






        ?>