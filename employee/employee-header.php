<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/index-utils.css">
    <style>
        @media (max-width:1280px) {
        .dropdown-menu {
           position: static;
        }   
    }
    </style>
</head>

<body>
    <header>
        <nav>
            <ul class="nav-list">
                <li><a href="employee.php">Welcome! Employee</a></li>
                <li><a href="employee-profile.php">My Profile</a></li>
                <li><a href="employee-student-view.php">Students View</a></li>
                <li><a href="update-marks.php">Update student marks</a></li>
                <li><a href="view-student-marks.php">View student marks</a></li>
                <li class="dropdown-menu"><a href="../index.php">logout</a></li>
            </ul>
        </nav>
    </header>