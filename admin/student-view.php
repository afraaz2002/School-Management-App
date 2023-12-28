<?php
include "admin-header.php"
?>
<head>
<title>Student View - Rise Bright</title>
    <link rel="stylesheet" href="../css/details-view.css">
</head>
<body>
    <main>
        <h1>Student View</h1>
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
                    <td>Action</td>
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
                                        <td>
                                           <form action="student-delete-db.php" method="post">
                                            <input type="hidden" name="stuid" value="<?= $row["stuid"]?>">
                                            <button>Delete</button>
                                           </form> 
                                        </td>
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