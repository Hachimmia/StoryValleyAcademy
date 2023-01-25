<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle;?></title>
    <link href="assets/images/logo.png" rel="icon">
    <link rel="stylesheet" href="./css/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
</head>

<body id="body" class="d-flex flex-column h-100">

    <!---------Navbar---------->
    <section id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="logo">
                <h1><a href="index.html"><img src="assets/images/logoAcademy.png" alt="logo" class="img-fluid"></a></h1>
            </div>
            <div class="navbar">
                <ul>
                    <li><a class="nav-link<?php if (str_contains($pageTitle, "Home")) echo " active";?>" href="index.php">Home</a></li>
                    <li><a class="nav-link<?php if (str_contains($pageTitle, "Stories")) echo " active";?>" href="stories.php">Stories</a></li>
                    <li><a class="nav-link<?php if (str_contains($pageTitle, "Lesson")) echo " active";?>" href="#">Lesson packs</a></li>
                    <li><a class="nav-link" href="login.html"><i class="bi bi-person-fill"></i>Login</a></li>
                    <li><a class="nav-link" href="register.html"><i class="bi bi-person-plus-fill"></i>Register</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!---------End Navbar---------->