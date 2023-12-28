<?php
include "employee-header.php"
?>

<head>
<title>My Profile - Rise Bright</title>
    <link rel="stylesheet" href="../css/profile.css">
</head>

<body>
<?php
                $empid=$_SESSION["employee_id"]; 
                $empname="";
                $emppass="";
                $empmobile="";
                $empmail="";
                $empaddress="";
                $empposition="";
                $empwork="";
                

               $mysql_connection = new mysqli("127.0.0.1","root","","schooldb");

               if($mysql_connection -> connect_error)
               {
                   echo "<h2>not connected</h2>";
               }
               else{
       
                   $sql_to_select_data = "SELECT * from employeedetails where empid='".$empid."'";

                   $result = $mysql_connection->query( $sql_to_select_data );
                   if($result->num_rows>0)
                   {
                     
                      while($row = $result->fetch_assoc())
                       {         
                                  $empname=$row["empname"];
                                  $emppass=$row["emppass"];
                                  $empmobile=$row["empmobile"];
                                  $empmail=$row["empmail"];
                                  $empaddress=$row["empaddress"];
                                  $empposition=$row["empposition"];
                                  $empwork=$row["empwork"];
                       }
                   }
                   else {
                    $msg="There are no rows in the table!";
                    header("location:message.php?message='".$msg."'");
                   }   
               } 
           ?>
    <main>
        <h1 class="text-center">My Profile</h1>
        <div class="container">
            <div class="container-left">
                <img src="../images/profile/profile.jpg" alt="person" style="opacity:0.9";>
            </div>
            <div class="border"></div>
            <div class="container-right fw500"  >
               <h2><?= $empname ?></h2>
               <p><b>Current position</b>: <?= $empposition ?></p>
                <p> <b>Mobile Number</b>: <?= $empmobile ?></p>
                <p><b>Email</b>: <?= $empmail ?></p>
                <p><b>Address</b>: <?= $empaddress ?></p>
                <p><b>Work Type</b>:<?= $empwork ?></p>

                <div class="btn" >
            <form action="edit-profile.php" method="post">
                <input type="hidden" value=<?= $empid ?> name="empid">
                <input type="hidden" value=<?= $emppass ?> name="emppass">
                <input type="hidden" value=<?= $empname ?> name="empname">
                <input type="hidden" value=<?= $empposition ?> name="empposition">
                <input type="hidden" value=<?= $empmobile ?> name="empmobile">
                <input type="hidden" value=<?= $empmail ?> name="empmail">
                <input type="hidden" value=<?= $empaddress ?> name="empaddress">
                <input type="hidden" value=<?= $empwork?> name="empwork">
                
            <button class="edit">Edit Profile</button>
            </form>
            </div>
                
            </div>
       
        </div>
    </main>
    <footer>
        <p class="fw500 text-center">Copyrights reserved &copy; Rise Bright 2023</p>
    </footer>
</body>
</html>
