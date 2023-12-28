<?php
session_start();
?>

<?php

$stuId=$_POST["studentid"];
$stuPass=$_POST["studentpass"];


$mysql_connection = new mysqli("127.0.0.1","root","","schooldb");

if($mysql_connection -> connect_error)
{
    echo "<h2>not connected</h2>";
}
else{
    $login_query = "SELECT stuid,stupass from studentdetails where stuid='".$stuId."' and stupass='".$stuPass."'";

    $result = $mysql_connection->query( $login_query );
    if($result->num_rows>0)
        {               
            $_SESSION["student_id"]=$stuId;
             header("location:student.php");          
        }
    
    else 
    {
     $msg="Invalid Id and password!";
     header("location:message-student.php?message='".$msg."'");
    }  
}

?>