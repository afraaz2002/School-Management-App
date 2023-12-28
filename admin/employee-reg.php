<?php
include "admin-header.php"
?>

<head>
<title>Employee Registration - Rise Bright</title>
    <link rel="stylesheet" href="../css/register.css">
</head>
<body>
    <main>
        <h1>Employee Registration Form</h1>
        <div class="container">
            <form action="employee-reg-db.php" method="post">
                <div class="input-container fw500">
                    <div class="input-info">
                        <div class="input-items">
                            <label for="empname">Employee name:</label>
                            <input type="text" name="empname" placeholder="Enter name" required>
                        </div>
                        <div class="input-items">
                        <label for="empphone">Mobile number:</label>
                            <input type="number" name="empmobile" placeholder="Enter Mobile number" required>
                            
                        </div>
                    </div>
                    <div class="input-info">
                        <div class="input-items">
                            <label for="emppass">Password:</label>
                            <input type="text" name="emppass" placeholder="Enter Password" required>
                        </div>

                        <div class="input-items">
                            <label for="empmail">Email:</label>
                            <input type="email" name="empmail" placeholder="Enter Email" required>
                        </div>
                    </div>
                    <div class="input-info">
                       <div class="input-items">
                            <label for="empaddress">Address:</label>
                            <input type="text" name="empaddress" placeholder="Enter Address" required>
                        </div>
                        <div class="input-items">
                            <label for="empsalary">Salary:</label>
                            <input type="text" name="empsalary" placeholder="Enter Salary" required>
                        </div>
                     </div>
                   <div class="input-info">
                        <div class="input-items">
                              <label for="empposition">Position:</label>
                              <input type="text" name="empposition" placeholder="Enter employee position" required>             
                        </div>
              
                       <div class="input-items">
                             <label for="empwork" class="radio-text">Work Type:
                                <select name="empwork" >
                                 <option>Select</option>
                                 <option>Permanent</option>
                                 <option>Temporary</option>
                                 <option>Other</option>
                                </select>
                               </label> 
                             </div>
                        </div>
    
                        <label for="empinfo">Cover Letter or additional information:</label>
    
                        <textarea name="empinfo" placeholder="Enter text here..."></textarea>
                        
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