          <?php
            session_start();
            require "connection.php";
            $Type = $_POST['type'];

            //////////////////top banner add////////////////////
            if ($Type == "addcop") {

                $MainHeading = $_POST['Heading'];
                $SubHeading = $_POST['subHeading'];
                $maxoff = $_POST['maxoff'];

                $sql = "INSERT INTO coupon (off, Code, MaxOff) VALUES ( '$SubHeading', '$MainHeading','$maxoff')";

                if ($conn->query($sql) === TRUE) {
                    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Added!');
    window.location.href='editcoupons.php';
    </script>");
                } else {
                    echo "Error: " . $sql . $sql2 . "<br>" . $conn->error;
                }





                //////////////////////////////// top banner delete //////////////////////////////

            } else if ($Type == "removecop") {

                $pid = $_POST['pid'];

                $sql = "DELETE FROM coupon WHERE ID='$pid'";

                if ($conn->query($sql) === TRUE) {
                    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Deleted!');
    window.location.href='coupon.php?coupounedit=removecop';
    </script>");
                } else {
                    echo "Error: " . $sql . $sql2 . "<br>" . $conn->error;
                }

                ///////////////////////////////// top Banner Edit////////////////////////
            } else if ($Type == "editcop") {

                $pid = $_POST['pid'];
                $MainHeading = $_POST['Heading'];
                $SubHeading = $_POST['subHeading'];
                $maxoff = $_POST['maxoff'];

                $sql = "UPDATE `coupon` SET `off` = '$SubHeading', `Code` = '$MainHeading', `MaxOff` ='$maxoff'  WHERE (ID = '$pid') ";

                if ($conn->query($sql) === TRUE) {
                    echo ("<script LANGUAGE='JavaScript'>
                     window.alert('Succesfully Updated!');
                    window.location.href='coupon.php?coupounedit=editcop';
                </script>");
                } else {
                    echo "Error: " . $sql .  "<br>" . $conn->error;
                }


                ///////////////////////// Middle Banner Edit /////////////////////////////////
            }





            ?>