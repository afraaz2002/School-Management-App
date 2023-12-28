<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index-utils.css">
    <link rel="stylesheet" href="../css/style.css">
    
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
                <li><a href="admin.php">Welcome! Admin</a></li>
                <li><a href="employee-reg.php">Employee Registration</a></li>
                <li><a href="employee-view.php">Employee View</a></li>
                <li><a href="student-reg.php">Student Registration</a></li>
                <li><a href="student-view.php">Students View</a></li>
                <li class="dropdown-menu"><a href="../index.php">logout</a></li>
            </ul>
        </nav>
    </header>