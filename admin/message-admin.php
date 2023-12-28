<?php
include "admin-header.php"
?>

<body>
    <main>
        <h1 class="text-center">Employee Registration</h1>
         <h2 class="text-center">
           <?php
            $message = $_GET["message"];
            echo $message;
           ?>
        </h2>
    </main> 
</body>