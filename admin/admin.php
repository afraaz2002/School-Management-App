<?php
include "admin-header.php"
?>

<head>
    <title>Rise Bright admin - School of Excellence</title>
</head>

<body>
<main>
        
        <div class="slider">
            <img src="../images/banner/banner.jpg" alt="School website baner" width="100%">
        </div>
        <?php 
        $admin_name=$_SESSION["admin_name"]; 
        ?>
        <h1 class="text-center" style="margin-top: 1rem;"><?= "Welcome $admin_name !" ?> </h1> 
        <section class="intro">
            <h2 class="text-center ">School of Excellence</h2>
            <p>At Rise Bright we believe each student has the capacity to grow and succeed in their life . We train
                students according to the real life scenario which helps students overcome their difficulties and shine
                in their future. We have all kind of facilities such as swimming pool, play ground, classroom
                facilitated with drinking water, health kits, etc. We give importance not only to academics but also the
                student's physical health by having various sports facilities in our school such as basketball court,
                indoor games such as table tennis,etc</p>
        </section>
        <div class="container">
            <div class="content">
                <section class="facilities text-center">
                    <h2>Daily physical education</h2>
                    <img src="../images/home page/img3.jpg" alt="physical education">
                    <p class="content-para">We instruct students to perform daily exercises in the morning to make them
                        fresh and energetic</p>
                </section>
                <section class="facilities text-center">
                    <h2>Quality Science labs</h2>
                    <img src="../images/home page/lab.jpg" alt="Science lab">
                    <p class="content-para">We have quality assured labs with safety measures for the students to learn
                        and experiment</p>
                </section>
                <section class="facilities text-center" >
                    <h2>Indoor Sports</h2>
                    <img src="../images/home page/img1.jpg" alt="children playing">
                    <p class="content-para">We have a seperate area of indoor sports such as table tennis, basketball,
                       badminton and much more!</p>
                </section>
                <section class="facilities text-center">
                    <h2>Swimming Pool</h2>
                    <img src="../images/home page/pool.jpg" alt="swimming">
                    <p class="content-para">Swimming pool with regular cleaning available for both junior and senior
                        students every week</p>
                </section>
            </div>
        </div>

    </main>
    </body>
    <footer>
       <p class="fw500 text-center">Copyrights reserved &copy; Rise Bright 2023</p>
    </footer>
</body>

</html>