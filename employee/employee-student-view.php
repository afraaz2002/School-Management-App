<?php
include "employee-header.php"
?>

<head>
<title>Update student marks - Rise Bright</title>
    <link rel="stylesheet" href="../css/table-view.css">
</head>
<body>
    <main>
        <h1 class="text-center">Student View</h1>
        <div class="container">

        <table>
                <tr>
                    <td>Student Id</td>
                    <td>Student name</td>
                    <td>Mobile number</td>
                    <td>Email</td>
                    <td>Address</td>
                    <td>Class</td>
                    <td>Student information</td>
                </tr>
                <?php
               
               $mysql_connection = new mysqli("127.0.0.1","root","","schooldb");

               if($mysql_connection -> connect_error)
               {
                   echo "<h2>not connected</h2>";
               }
               else{
       
                   $sql_to_select_data = "select * from studentdetails";

                   $result = $mysql_connection->query( $sql_to_select_data );
                   if($result->num_rows>0)
                   {
                     
                      while($row = $result->fetch_assoc())
                       {
                            ?>        
                                     <tr>
                                        <td><?= $row["stuid"]?></td>
                                        <td><?= $row["stuname"]?></td>
                                        <td><?= $row["stumobile"]?></td>
                                        <td><?= $row["stumail"]?></td>
                                        <td><?= $row["stuaddress"]?></td>
                                        <td><?= $row["stuclass"]?></td>
                                        <td><?= $row["stuinfo"]?></td>
                                    </tr>
                          <?php
                       }
                   }
                   else {
                    $msg="There are no rows in the table!";
                    header("location:message.php?message='".$msg."'");
                   }   
               } 
           ?>
       </table>
        </div>
    </main>
</body>
</html>