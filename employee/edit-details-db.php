<?php
                $empid=$_POST["empid"]; 
                $nempname=$_POST["empname"];
                $nemppass=$_POST["emppass"];
                $nempaddress=$_POST["empaddress"];
                $nempmobile=$_POST["empmobile"];
                $nempmail=$_POST["empmail"];
                
               $mysqlconnection = new mysqli("127.0.0.1","root","","schooldb");

               if($mysqlconnection->connect_error)
               {
                   echo "<h3>Check your db connection</h3>";
               }
               else
               {
                   
                   $sql_to_update_data = "update employeedetails set empname='".$nempname."' , emppass='".$nemppass."', empaddress='".$nempaddress."', empmobile='".$nempmobile."' , empmail='".$nempmail."' where empid='".$empid."' ";
                   
                   if ($mysqlconnection->query($sql_to_update_data) == TRUE) 
                   {
                       header("Location: employee-profile.php");
                      //echo "welcome";
                   } 
                   else 
                   {
                       
                       $msg="SQL update Query Error...".$mysqlconnection->error;
                       header("Location: message.php?message='".$msg."'");
                       
                   }
               
               }
           ?>