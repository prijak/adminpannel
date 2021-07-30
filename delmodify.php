<?php
            session_start();
            require "connection.php";
            $Type = $_POST['type'];

            //////////////////top banner add////////////////////
            if ($Type == "addcop") {

                $MainHeading = $_POST['Heading'];
                $SubHeading = $_POST['subHeading'];
               

                $sql = "INSERT INTO delivery (Charge, Location ) VALUES ( '$SubHeading', '$MainHeading')";

                if ($conn->query($sql) === TRUE) {
                    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Added!');
    window.location.href='editdelivery.php';
    </script>");
                } else {
                    echo "Error: " . $sql .  "<br>" . $conn->error;
                }





                //////////////////////////////// top banner delete //////////////////////////////

            } else if ($Type == "removecop") {

                $pid = $_POST['pid'];

                $sql = "DELETE FROM delivery WHERE ID='$pid'";

                if ($conn->query($sql) === TRUE) {
                    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Succesfully Deleted!');
    window.location.href='delivery.php?deledit=removedel';
    </script>");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                ///////////////////////////////// top Banner Edit////////////////////////
            } else if ($Type == "editcop") {

                $pid = $_POST['pid'];
                $MainHeading = $_POST['Heading'];
                $SubHeading = $_POST['subHeading'];
                $maxoff = $_POST['maxoff'];

                $sql = "UPDATE `delivery` SET `Charge` = '$SubHeading', `Location` = '$MainHeading' WHERE (ID = '$pid') ";

                if ($conn->query($sql) === TRUE) {
                    echo ("<script LANGUAGE='JavaScript'>
                     window.alert('Succesfully Updated!');
                    window.location.href='delivery.php?deledit=editdel';
                </script>");
                } else {
                    echo "Error: " . $sql .  "<br>" . $conn->error;
                }


                ///////////////////////// Middle Banner Edit /////////////////////////////////
            }





            ?>