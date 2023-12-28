<?php

     $stuname = $_POST["stuname"];
     $stuid = $_POST["stuid"];
     $stuclass = $_POST["stuclass"];
     $engmark=$_POST["engmark"];
     $scimark=$_POST["scimark"];
     $socmark=$_POST["socmark"];
     $matmark=$_POST["matmark"];
     $lanmark=$_POST["lanmark"];

     $totmark=0;
     $grade="";

     $mysql_connection = new mysqli("127.0.0.1","root","","schooldb") ;

        if($mysql_connection -> connect_error)
        {
            echo "<h3>not connected</h3>";
        }
        else{
            echo "<h3>Succesfully connected</h3>";

            $sql_to_insert_data = "insert into studentmarks(stuname,stuid,stuclass,engmark,scimark,socmark,matmark,lanmark)values('".$stuname."','". $stuid."','".$stuclass."','".$engmark."','".$scimark."','".$socmark."','".$matmark."','".$lanmark."')";

            if($mysql_connection->query($sql_to_insert_data) === TRUE)
            {
                 $msg="Successfully inserted a row !";
                 header("location:message-employee.php?message='".$msg."'");
            }
            else{
                 $msg="Insertion of a row is unsuccessfully!";
                 header("location:message-employee.php?message='".$msg."'");
            }


            $totmark = $engmark + $scimark + $socmark + $matmark + $lanmark;

            $sql_to_update_totmarks = "update studentmarks set totmark='".$totmark."' where stuid='".$stuid."' ";
        
            if($mysql_connection->query($sql_to_update_totmarks) === TRUE)
            {
                 $msg="Successfully inserted a row !";
                 header("location:message-employee.php?message='".$msg."'");
            }
            else{
                 $msg="Insertion of a row is unsuccessfully!";
                 header("location:message-employee.php?message='".$msg."'");
            }
  
            if($totmark >= 450 && $totmark <= 500  ){
                $grade="O";
            }
            else if($totmark >= 400 && $totmark < 450){
                $grade="A";
            }
            else if($totmark >= 350 && $totmark < 400){
                $grade="B";
            }
            else if($totmark >= 300 && $totmark < 350){
                $grade="C";
            }
            else if($totmark >= 250 && $totmark < 300){
                $grade="D";
            }
            else if($totmark <250){
                $grade="F";
            }
            else {
                $grade="Invalid mark input";
            }

            $sql_to_update_grade = "update studentmarks set grade='".$grade."' where stuid='".$stuid."' ";

            if($mysql_connection->query($sql_to_update_grade) === TRUE)
            {
                 $msg="Successfully inserted a row !";
                 header("location:message-employee.php?message='".$msg."'");
            }
            else{
                 $msg="Insertion of a row is unsuccessfully!";
                 header("location:message-employee.php?message='".$msg."'");
            }
        }
        $mysql_connection->close();
?>