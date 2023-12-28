<?php
include "page-header.php"
?>
<head>
<title>Admin Login - Rise Bright School</title>
<link rel="stylesheet" href="css/loginn.css">

</head>
<body>
    <main>
    <h1 class="text-center">Admin Login</h1>
    <form action="admin/check-admin-login.php" method="post">
    <div class="container">
        <div class="content">
        <div class="left-section">
            <img src="images/login.jpg" alt="children with book">
        </div>
        <div class="right-section">
            <h2>Sign in to continue</h2>
            <label for="adminid">Enter your admin ID:</label>
            <input type="text" name="adminid" placeholder="Enter ID" required>
            <label for="adminpass">Enter your password:</label>
            <input type="password" name="adminpass" placeholder="Enter Password" required>
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