<?php
include "student-header.php"
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

     $stuid=$_POST["stuid"];

?>
    <main>
        <h1>Edit Profile</h1>
        <div class="container">
            <form action="edit-details-db.php" method="post">
                <div class="input-container fw500">
         
                        <input type="hidden" name="stuid" value=<?= $stuid ?>>        

                        <div class="input-items">
                            <label for="stuname">Enter name:</label>
                            <input type="text" name="stuname" placeholder="Enter name" required>
                        </div>

                        
                        <div class="input-items">
                            <label for="stupass">Password:</label>
                            <input type="text" name="stupass" placeholder="Enter Password" required>
                        </div>

                        
                        <div class="input-items">
                            <label for="stuaddress">Address:</label>
                            <input type="text" name="stuaddress" placeholder="Enter address" required>
                        </div>

                        <div class="input-items">
                        <label for="stumobile">Enter number:</label>
                            <input type="number" name="stumobile" placeholder="Enter Mobile number" required>
                        </div>

                        <div class="input-items">
                            <label for="stumail">Email:</label>
                            <input type="email" name="stumail" placeholder="Enter Email" required>
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
