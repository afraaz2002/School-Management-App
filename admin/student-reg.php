<?php
include "admin-header.php"
?>

<head>
<title>Student Registration - Rise Bright</title>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
    <main>
        <h1>Student Registration Form</h1>
        <div class="container">
            <form action="student-reg-db.php" method="post">
                <div class="input-container fw500">
                    <div class="input-info">
                        <div class="input-items">
                            <label for="stuname">Student name:</label>
                            <input type="text" name="stuname" placeholder="Enter name" required>
                        </div>
                        <div class="input-items">
                        <label for="stumobile">Mobile number:</label>
                            <input type="number" name="stumobile" placeholder="Enter Mobile number" required>
                            
                        </div>
                    </div>
                    <div class="input-info">
                        <div class="input-items">
                            <label for="stupass">Password:</label>
                            <input type="text" name="stupass" placeholder="Enter Password" required>
                        </div>

                        <div class="input-items">
                            <label for="stumail">Email:</label>
                            <input type="email" name="stumail" placeholder="Enter Email" required>
                        </div>
                    </div>
                    <div class="input-info">
                       <div class="input-items">
                            <label for="stuaddress">Address:</label>
                            <input type="text" name="stuaddress" placeholder="Enter Address" required>
                        </div>
                        <div class="input-items">
                            <label for="stuclass">Class:</label>
                            <input type="text" name="stuclass" placeholder="Enter class" required>
                        </div>
                     </div>
    
                        <label for="stuinfo">Cover letter or additional information:</label>
    
                        <textarea name="stuinfo" placeholder="Enter text here..." ></textarea>
                        
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

</html>