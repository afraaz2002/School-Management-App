<?php
        $stuid= $_POST["stuid"];
  
        $mysql_connection = new mysqli("127.0.0.1","root","","schooldb") ;

        if($mysql_connection -> connect_error)
        {
            echo "<h3>not connected</h3>";
        }
        else{
            echo "<h3>Succesfully connected</h3>";

            $sql_to_delete_data = "delete from studentdetails where stuid=$stuid" ;

            if($mysql_connection->query($sql_to_delete_data) === TRUE)
            {
                 $msg="Successfully inserted a row !";
                 header("location:student-view.php");
            }
            else{
                 $msg="Insertion of a row is unsuccessfully!";
                 header("location:message-admin.php?message='".$msg."'");
            }
            $mysql_connection->close();
        }
?> 