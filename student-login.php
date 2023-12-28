<?php
include "page-header.php"
?>
<head>
<title>Student Login - Rise Bright School</title>
<link rel="stylesheet" href="css/loginn.css">

</head>
<body>
    <main>
    <h1 class="text-center">Student Login</h1>
    <form action="student/check-student-login.php" method="post">

    <div class="container">
        <div class="content">
        <div class="left-section">
            <img src="images/login.jpg" alt="children with book">
        </div>
        <div class="right-section">
            <h2>Sign in to continue</h2>
            <label for="studentid">Enter your student ID:</label>
            <input type="text" name="studentid" placeholder="Enter ID" required>
            <label for="studentpass">Enter your password:</label>
            <input type="password" name="studentpass" placeholder="Enter Password" required>
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