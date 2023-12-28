<?php
include "page-header.php"

?>
<head>
<title>Employee Login - Rise Bright School</title>
<link rel="stylesheet" href="css/loginn.css">
    
</head>
<body>
    <main>
    <h1 class="text-center">Employee Login</h1>
    <form action="employee/check-employee-login.php" method="post">

    <div class="container">
        <div class="content">
        <div class="left-section">
            <img src="images/login.jpg" alt="children with book">
        </div>
        <div class="right-section">
            <h2>Sign in to continue</h2>
            <label for="employeeid">Enter your employee ID:</label>
            <input type="text" name="employeeid" placeholder="Enter ID" required>
            <label for="employeepass">Enter your password:</label>
            <input type="password" name="employeepass" placeholder="Enter Password" required>
            <button class="btn">Submit</button>
        </div>
    </div>
    </div>
    </form>
</main>
<footer>
    <p class="fw500 text-center" >Copyrights reserved &copy; Rise Bright 2023</p>
 </footer>
</body>
</html>