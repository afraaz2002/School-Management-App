<?php
include "employee-header.php"
?>

<head>
<title>View Student Marks - Rise Bright</title>
    <link rel="stylesheet" href="../css/table-view.css">
</head>
<body>
    <main>
        <h1 class="text-center">Student Marks View</h1>
        <div class="container">

        <table>
                <tr>
                    <td>Student name</td>
                    <td>Student Id</td>
                    <td>Student Class</td>
                    <td>English Marks</td>
                    <td>Science Marks</td>
                    <td>Social Science Marks</td>
                    <td>Maths Marks</td>
                    <td>Language Marks</td>
                    <td>Total Marks</td>
                    <td>Grade</td>
                </tr>
                <?php
               
               $mysql_connection = new mysqli("127.0.0.1","root","","schooldb");

               if($mysql_connection -> connect_error)
               {
                   echo "<h2>not connected</h2>";
               }
               else{
       
                   $sql_to_select_data = "select * from studentmarks";

                   $result = $mysql_connection->query( $sql_to_select_data );
                   if($result->num_rows>0)
                   {
                     
                      while($row = $result->fetch_assoc())
                       {
                            ?>        
                                     <tr>
                                        <td><?= $row["stuname"]?></td>
                                        <td><?= $row["stuid"]?></td>
                                        <td><?= $row["stuclass"]?></td>
                                        <td><?= $row["engmark"]?></td>
                                        <td><?= $row["scimark"]?></td>
                                        <td><?= $row["socmark"]?></td>
                                        <td><?= $row["matmark"]?></td>
                                        <td><?= $row["lanmark"]?></td>
                                        <td><?= $row["totmark"]?></td>
                                        <td><?= $row["grade"]?></td>
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