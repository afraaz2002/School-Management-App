<?php
include "employee-header.php"
?>

<head>
<title>Edit Profile - Rise Bright</title>
    <link rel="stylesheet" href="../css/register.css">
    <style>
        .container{
               width:50%;
        }
    </style>
</head>

<body>

<?php

     $empid=$_POST["empid"];
     $empname=$_POST["empname"];
     $emppass=$_POST["emppass"];
     $empmobile=$_POST["empmobile"];
     $empmail=$_POST["empmail"];
     $empaddress=$_POST["empaddress"];
     $empposition=$_POST["empposition"];
    $empwork=$_POST["empwork"];
?>
    <main>
        <h1>Edit Profile</h1>
        <div class="container">
            <form action="edit-details-db.php" method="post">
                <div class="input-container fw500">
         
                        <input type="hidden" name="empid" value=<?= $empid ?>>        

                        <div class="input-items">
                            <label for="empname">Enter name:</label>
                            <input type="text" name="empname" placeholder="Enter name" value=<?= $empname ?> required>
                        </div>

                        
                        <div class="input-items">
                            <label for="emppass">Password:</label>
                            <input type="text" name="emppass" placeholder="Enter Password" value=<?= $emppass ?> required>
                        </div>

                        
                        <div class="input-items">
                            <label for="empaddress">Address:</label>
                            <input type="text" name="empaddress" placeholder="Enter address" value=<?= $empaddress ?> required>
                        </div>

                        <div class="input-items">
                        <label for="empmobile">Enter number:</label>
                            <input type="number" name="empmobile" placeholder="Enter Mobile number" value=<?= $empmobile ?> required>
                        </div>

                        <div class="input-items">
                            <label for="empmail">Email:</label>
                            <input type="email" name="empmail" placeholder="Enter Email" value=<?=$empmail?> required>
                        </div>
      
                        <button class="btn">Submit</button>

                </div>
        </div>
        </form>
     </div>
    </main>
    <footer>
       <p class="fw500 text-center">Copyrights reserved &copy; Rise Bright 2023</p>
    </footer>
</body>
