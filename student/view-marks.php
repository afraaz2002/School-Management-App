<?php
include "student-header.php"
?>

<head>
    <title>View marks - Rise Bright</title>
    <link rel="stylesheet" href="../css/view-marks.css">
</head>

<body>
<?php
                 $stuid=$_SESSION["student_id"];
                 $engmark="";
                 $scimark="";
                 $socmark="";
                 $matmark="";
                 $lanmark="";
                 $totmark="";
                 $grade="";


               $mysql_connection = new mysqli("127.0.0.1","root","","schooldb");

               if($mysql_connection -> connect_error)
               {
                   echo "<h2>not connected</h2>";
               }
               else{
       
                   $sql_to_select_marks = "select * from studentmarks where stuid='".$stuid."'";

                   $result = $mysql_connection->query( $sql_to_select_marks );
                   if($result->num_rows>0)
                   {
                     
                      while($row = $result->fetch_assoc())
                       {
                            $engmark=$row["engmark"];
                            $scimark=$row["scimark"];
                            $socmark=$row["socmark"];
                            $matmark=$row["matmark"];
                            $lanmark=$row["lanmark"];
                            $totmark=$row["totmark"];
                            $grade=$row["grade"];

                       }
                   }
                   else {
                    $msg="<h1 style='color:Red;margin-top:5%;text-align:center;'>Result is not updated by the teacher!</h1>";
                    header("location:message-student.php?message= $msg");
                   }   
               } 
           ?>
    <main>
        <h1 class="text-center">Your Marks</h1>
        <div class="container">
            <div class="content">
             <div class="col">
                <p>English Marks: <b><?=$engmark?></b></p>
                <p>Science Marks:<b><?=$scimark?></b></p>
                <p>Social Science Marks:<b><?=$socmark?></b></p>
             </div>
             <div class="border"></div>
             <div class="col">
                <p>Maths Marks:<b><?=$matmark?></b></p>
                <p>Language Marks:<b><?=$lanmark?></b></p>
                <p>Total Marks:<b><?=$totmark?></b></p>
             </div>
        
        </div>
          <p class="grade">Grade:<b><?=$grade?></b></p>
        </div>
      
    </main>
    
    <footer>
       <p class="fw500 text-center">Copyrights reserved &copy; Rise Bright 2023</p>
    </footer>
</body>

</html>