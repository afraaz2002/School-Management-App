<?php
session_start();
?>

<?php

$empId=$_POST["employeeid"];
$empPass=$_POST["employeepass"];


$mysql_connection = new mysqli("127.0.0.1","root","","schooldb");

if($mysql_connection -> connect_error)
{
    echo "<h2>not connected</h2>";
}
else{
    $login_query = "SELECT empid,emppass from employeedetails where empid='".$empId."' and emppass='".$empPass."'";

    $result = $mysql_connection->query( $login_query );
    if($result->num_rows>0)
        {               
            $_SESSION["employee_id"]=$empId;
             header("location:employee.php");          
        }
    
    else 
    {
     $msg="Invalid Id and password!";
     header("location:message-employee.php?message='".$msg."'");
    }  
}

?>