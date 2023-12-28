<?php

        $stuname= $_POST["stuname"];
        $stumobile= $_POST["stumobile"];
        $stupass= $_POST["stupass"];
        $stumail=$_POST["stumail"];
        $stuaddress= $_POST["stuaddress"];
        $stuclass= $_POST["stuclass"];
        $stuinfo= $_POST["stuinfo"];

        echo "$stuname<br>";
        echo "$stumobile<br>";
        echo "$stupass<br>";
        echo "$stumail<br>";
        echo "$stuaddress<br>";
        echo "$stuclass<br>";
        echo "$stuinfo<br>";

        $mysql_connection = new mysqli("127.0.0.1","root","","schooldb") ;

        if($mysql_connection -> connect_error)
        {
            echo "<h3>not connected</h3>";
        }
        else{
            echo "<h3>Succesfully connected</h3>";

            $sql_to_insert_data = "insert into studentdetails(stuname,stumobile,stupass,stumail,stuaddress,stuclass,stuinfo)values('".$stuname."','".$stumobile."','".$stupass."','".$stumail."','".$stuaddress."','".$stuclass."','".$stuinfo."')";

            if($mysql_connection->query($sql_to_insert_data) === TRUE)
            {
                 $msg="Successfully inserted a row !";
                 header("location:message-admin.php?message='".$msg."'");
            }
            else{
                 $msg="Insertion of a row is unsuccessfully!";
                 header("location:message-admin.php?message='".$msg."'");
            }
            $mysql_connection->close();
        }

        ?>