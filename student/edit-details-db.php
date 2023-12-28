<?php
                $stuid=$_POST["stuid"]; 
                $nstuname=$_POST["stuname"];
                $nstupass=$_POST["stupass"];
                $nstuaddress=$_POST["stuaddress"];
                $nstumobile=$_POST["stumobile"];
                $nstumail=$_POST["stumail"];
                
               $mysqlconnection = new mysqli("127.0.0.1","root","","schooldb");

               if($mysqlconnection->connect_error)
               {
                   echo "<h3>Check your db connection</h3>";
               }
               else
               {
                   
                   $sql_to_update_details = "update studentdetails set stuname='".$nstuname."' , stupass='".$nstupass."', stuaddress='".$nstuaddress."', stumobile='".$nstumobile."' , stumail='".$nstumail."' where stuid='".$stuid."' ";
                   
                   if ($mysqlconnection->query($sql_to_update_details) == TRUE) 
                   {
                       header("Location: student-profile.php");
                      //echo "welcome";
                   } 
                   else 
                   {
                       
                       $msg="SQL update Query Error...".$mysqlconnection->error;
                       header("Location: message.php?message='".$msg."'");
                       
                   }

                   $sql_to_update_in_marks = "update studentmarks set stuname='".$nstuname."' where stuid='".$stuid."'";
                   
                   if ($mysqlconnection->query( $sql_to_update_in_marks) == TRUE) 
                   {
                       header("Location: student-profile.php");
                      //echo "welcome";
                   } 
                   else 
                   {
                       
                       $msg="SQL update Query Error...".$mysqlconnection->error;
                       header("Location: message.php?message='".$msg."'");
                       
                   }
               
               }
           ?>