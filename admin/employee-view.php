<?php
include "admin-header.php"
?>
<head>
<title>Employee View - Rise Bright</title>
    <link rel="stylesheet" href="../css/details-view.css">
</head>
<body>
    <main>
        <h1>Employee View</h1>
        <div class="container">
            <table>
                <tr>
                    <td>Employee Id</td>
                    <td>Employee name</td>
                    <td>Mobile number</td>
                    <td>Email</td>
                    <td>Address</td>
                    <td>Salary</td>
                    <td>Position</td>
                    <td>Work Type</td>
                    <td>Employee information</td>
                    <td>Action</td>
                </tr>
            
           <?php
               
               $mysql_connection = new mysqli("127.0.0.1","root","","schooldb") ;

               if($mysql_connection -> connect_error)
               {
                   echo "<h2>not connected</h2>";
               }
               else{
       
                   $sql_to_select_data = "select * from employeedetails";

                   $result = $mysql_connection->query( $sql_to_select_data );
                   if($result->num_rows>0)
                   {
                     
                      while($row = $result->fetch_assoc())
                       {
                            ?>
                            
                                     <tr>
                                        <td><?= $row["empid"]?></td>
                                        <td><?= $row["empname"]?></td>
                                        <td><?= $row["empmobile"]?></td>
                                        <td><?= $row["empmail"]?></td>
                                        <td><?= $row["empaddress"]?></td>
                                        <td><?= $row["empsalary"]?></td>
                                        <td><?= $row["empposition"]?></td>
                                        <td><?= $row["empwork"]?></td>
                                        <td><?= $row["empinfo"]?></td>
                                        <td>
                                           <form action="employee-delete-db.php" method="post">
                                            <input type="hidden" name="empid" value="<?= $row["empid"]?>">
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