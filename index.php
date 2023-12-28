<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rise Bright - School of Excellence</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index-utils.css">
    <style>
        @media (max-width:850px) {
        .dropdown-menu {
           position: static;
        }   
    }
    </style>
</head>

<body>
    <header>
        <div class="logo margin-center">
            <h1 class="text-center margin-center fw600">Rise Bright School</h1>
            <p class="text-center margin-center fw300">A Great Place For Education</p>
        </div>
        <nav>
            <ul class="nav-list">
                <li><a href="index.php">Home</a></li>
                <li><a href="gallery.php">Our Gallery</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                <li class="dropdown-menu"><a href="#">Login</a>
                    <div class="dropdown" >
                        <ul >
                        <a href="admin-login.php">Admin Login</a>
                        <a href="employee-login.php">Employee Login</a>
                        <a href="student-login.php">Student Login</a>
                    </ul>
                    </div>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="slider">
            <img src="images/banner/banner.jpg" alt="School website baner" width="100%">
        </div>
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
                <section class="facilities">
                    <h2>Physical education</h2>
                    <img src="images/home page/img3.jpg" alt="physical education">
                    <p class="content-para">We instruct students to perform daily exercises in the morning to make them
                        fresh and energetic</p>
                </section>
                <section class="facilities">
                    <h2>Quality Science labs</h2>
                    <img src="images/home page/lab.jpg" alt="Science lab">
                    <p class="content-para">We have quality assured labs with safety measures for the students to learn
                        and experiment</p>
                </section>
                <section class="facilities" >
                    <h2>Indoor Sports</h2>
                    <img src="images/home page/img1.jpg" alt="children playing">
                    <p class="content-para">We have a seperate area of indoor sports such as table tennis, basketball,
                       badminton </p>
                </section>
                <section class="facilities ">
                    <h2>Swimming Pool</h2>
                    <img src="images/home page/pool.jpg" alt="swimming">
                    <p class="content-para">Swimming pool with regular cleaning available for both junior and senior
                        students every week</p>
                </section>
            </div>
        </div>
    </main>
    <footer>
       <p class="fw500 text-center">Copyrights reserved &copy; Rise Bright 2023</p>
    </footer>
</body>

</html>