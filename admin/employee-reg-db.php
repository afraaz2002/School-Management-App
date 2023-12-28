<?php
        $empname= $_POST["empname"];
        $empmobile= $_POST["empmobile"];
        $emppass= $_POST["emppass"];
        $empmail=$_POST["empmail"];
        $empaddress= $_POST["empaddress"];
        $empsalary= $_POST["empsalary"];
        $empposition= $_POST["empposition"];
        $empwork= $_POST["empwork"];
        $empinfo= $_POST["empinfo"];

        echo "$empname<br>";
        echo "$empmobile<br>";
        echo "$emppass<br>";
        echo "$empmail<br>";
        echo "$empaddress<br>";
        echo "$empsalary<br>";
        echo "$empposition<br>";
        echo "$empwork<br>";
        echo "$empinfo<br>";

        $mysql_connection = new mysqli("127.0.0.1","root","","schooldb") ;

        if($mysql_connection -> connect_error)
        {
            echo "<h3>not connected</h3>";
        }
        else{
            echo "<h3>Succesfully connected</h3>";

            $sql_to_insert_data = "insert into employeedetails(empname,empmobile,emppass,empmail,empaddress,empsalary,empposition,empwork,empinfo)values('".$empname."','".$empmobile."','".$emppass."','".$empmail."','".$empaddress."','".$empsalary."','".$empposition."','".$empwork."','".$empinfo."')";

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