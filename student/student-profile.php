<?php
include "student-header.php"
?>

<head>
<title>My Profile - Rise Bright</title>
    <link rel="stylesheet" href="../css/profile.css">
</head>

<body>
<?php
                $stuid=$_SESSION["student_id"]; 
                $stuname="";
                $stumobile="";
                $stumail="";
                $stuaddress="";
                $stuclass="";

               $mysql_connection = new mysqli("127.0.0.1","root","","schooldb");

               if($mysql_connection -> connect_error)
               {
                   echo "<h2>not connected</h2>";
               }
               else{
       
                   $sql_to_select_data = "SELECT * from studentdetails where stuid='".$stuid."'";

                   $result = $mysql_connection->query( $sql_to_select_data );
                   if($result->num_rows>0)
                   {
                     
                      while($row = $result->fetch_assoc())
                       {         
                                  $stuname=$row["stuname"];
                                  $stumobile=$row["stumobile"];
                                  $stumail=$row["stumail"];
                                  $stuaddress=$row["stuaddress"];
                                  $stuclass=$row["stuclass"];
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
            <div class="container-left" >
                <img src="../images/profile/profile.jpg" alt="person" style="opacity:0.9" >
            </div>
            <div class="border"></div>

            <div class="container-right fw500" >       
                <h2><?= $stuname?></h2>
                <p><b>Class:</b><?= $stuclass?></p>
                <p> <b>Mobile Number</b>: <?=$stumobile?></p>
                <p><b>Email</b>: <?=$stumail?></p>
                <p><b>Address</b>: <?=$stuaddress?></p>

                <div class="btn" >
            <form action="edit-profile.php" method="post">
                <input type="hidden" value=<?= $stuid ?> name="stuid">
            <button class="edit">Edit Profile</button>
            </form>
            </div>
            </div>

              

            </div>
        </div>
    </main>
    <footer>
        <p class="fw500 text-center">Copyrights reserved &copy; Rise Bright 2023</p>
    </footer>
</body>
</html>
