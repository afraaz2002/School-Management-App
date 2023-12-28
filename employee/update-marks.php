<?php
include "employee-header.php"
?>

<head>
<title>Update student marks - Rise Bright</title>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
    <main>
        <h1 class="text-center">Update Student Marks</h1>
        <div class="container">
            <form action="update-marks-db.php" method="post">
                <div class="input-container fw500">
                    <div class="input-info">
                        <div class="input-items">
                            <label for="stuname">Student name:</label>
                            <select name="stuname">
                                <option>Select</option>

                                <?php
                                        $mysql_connection = new mysqli("127.0.0.1","root","","schooldb") ;

                                        if($mysql_connection -> connect_error)
                                        {
                                            echo "<h2>not connected</h2>";
                                        }
                                        else{
                                
                                            $sql_to_select_student_name = "select stuname from studentdetails";
                         
                                            $result = $mysql_connection->query( $sql_to_select_student_name );
                                            if($result->num_rows>0)
                                            {
                                               while($row = $result->fetch_assoc())
                                                {
                                                    ?>
                                                    <option><?= $row["stuname"] ?> </option>

                                                    <?php
                                                } 
                                            }
                                        }
                                ?>

                            </select>
                        </div>
                        <div class="input-items">
                        <label for="stuid">Student Id:</label>
                        <select name="stuid">
                                <option>Select</option>

                                <?php
                                        $mysql_connection = new mysqli("127.0.0.1","root","","schooldb") ;

                                        if($mysql_connection -> connect_error)
                                        {
                                            echo "<h2>not connected</h2>";
                                        }
                                        else{
                                
                                            $sql_to_select_student_id = "select stuid from studentdetails";
                         
                                            $result = $mysql_connection->query( $sql_to_select_student_id );
                                            if($result->num_rows>0)
                                            {
                                               while($row = $result->fetch_assoc())
                                                {
                                                    ?>
                                                    <option><?= $row["stuid"] ?> </option>

                                                    <?php
                                                } 
                                            }
                                        }
                                ?>

                            </select>
                            
                        </div>
                    </div>
                    <div class="input-info">
                        <div class="input-items">
                            <label for="stuclass">Class:</label>
                            <input type="number" name="stuclass" placeholder="Enter class" required>
                        </div>

                        <div class="input-items">
                            <label for="engmark">Marks in English :</label>
                            <input type="number" name="engmark" placeholder="Enter marks" required>
                        </div>
                    </div>
                    <div class="input-info">
                       <div class="input-items">
                            <label for="scimark">Marks in Science :</label>
                            <input type="number" name="scimark" placeholder="Enter marks" required>
                        </div>
                        <div class="input-items">
                            <label for="socmark">Marks in Social Science :</label>
                            <input type="number" name="socmark" placeholder="Enter marks" required>
                        </div>
                     </div>
                     <div class="input-info">
                       <div class="input-items">
                            <label for="matmark">Marks in maths :</label>
                            <input type="number" name="matmark" placeholder="Enter marks" required>
                        </div>
                        <div class="input-items">
                            <label for="lanmark">Marks in language :</label>
                            <input type="number" name="lanmark" placeholder="Enter marks" required>
                        </div>
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

</html>