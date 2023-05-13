<?php
    include_once 'lib/database.php';
    include_once 'helpers/format.php';

	spl_autoload_register(function($classname) {
		include_once 'classes/'.$classname.'.php';
	});

	$db = new Database();
	$fm = new Format();
	$product = new product();
    $category = new category();

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">

    <title>SellphoneS - Điện thoại, laptop, tablet, phụ kiện chính hãng</title>

    <meta name="description" content="Description">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">

    <link rel="icon" href="assets/img/favicon/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="assets/css/bootstrap-grid.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/slider.css">
    <link rel="preload" href="assets/fonts/source-sans-pro-v21-latin/source-sans-pro-v21-latin-regular.woff2" as="font"
        type="font/woff2" crossorigin>
    <link rel="preload" href="assets/fonts/source-sans-pro-v21-latin/source-sans-pro-v21-latin-700.woff2" as="font"
        type="font/woff2" crossorigin>
    <link rel="preload" href="assets/fonts/montserrat-v25-latin/montserrat-v25-latin-700.woff2" as="font"
        type="font/woff2" crossorigin>
    <link rel="preload" href="assets/fonts/montserrat-v25-latin/montserrat-v25-latin-600.woff2" as="font"
        type="font/woff2" crossorigin>

    <link rel="preload" href="assets/fonts/material-icons/material-icons.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="assets/fonts/material-icons/material-icons-outlined.woff2" as="font" type="font/woff2"
        crossorigin>

</head>

<body>

    <main class="main">

        <div class="main-inner">

            <!-- Begin mobile main menu -->
            <nav class="mmm">
                <div class="mmm-content">
                    <ul class="mmm-list">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="about-us.html">About us</a>
                        </li>
                        <li>
                            <a href="services.html">Services</a>
                        </li>
                        <li>
                            <a href="typography.html">Typography</a>
                        </li>
                        <li>
                            <a href="tabs-and-accordions.html">Tabs & Accordions</a>
                        </li>
                        <li>
                            <a href="news.html">News</a>
                        </li>
                        <li>
                            <a href="contacts.html">Contacts</a>
                        </li>
                    </ul>
                </div>
            </nav><!-- End mobile main menu -->
            <header class="header header-minimal">
                <nav class="header-fixed">
                    <div class="container">
                        <div class="row flex-nowrap align-items-center justify-content-between">
                            <div class="col-auto header-fixed-col logo-wrapper">
                                <a href="index.php" class="logo" title="SellphoneS">
                                    <img src="assets/img/logo.svg" alt="SellphoneS">
                                </a>
                            </div>
                            <div class="col-auto col-xl col-static header-fixed-col d-none d-xl-block">
                                <div class="row flex-nowrap align-items-center justify-content-end">
                                    <div class="col header-fixed-col d-none d-xl-block col-static">

                                        <!-- Begin main menu -->
                                        <nav class="main-mnu">

                                            <ul class="main-mnu-list">
                                                <li>
                                                    <a href="index.php" data-title="Home">
                                                        <span>Home</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="about-us.html" data-title="About us">
                                                        <span>About us</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="services.html" data-title="Services">
                                                        <span>Services</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="typography.html" data-title="Typography">
                                                        <span>Typography</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="tabs-and-accordions.html" data-title="Tabs & Accordions">
                                                        <span>Tabs & Accordions</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="news.html" data-title="News">
                                                        <span>News</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="contacts.html" data-title="Contacts">
                                                        <span>Contacts</span>
                                                    </a>
                                                </li>
                                                <p>
                                                    <form action="search?keyword=timkiem">
                                                        <input type="text" placeholder="Tìm kiếm sản phẩm..." name="tukhoa">
                                                        <input type="submit" name="timkiem" value="Tìm kiếm">
                                                    </form>
                                                </p>
                                            </ul>
                                        </nav><!-- End main menu -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto d-block d-xl-none header-fixed-col">
                                <div class="main-mnu-btn">
                                    <span class="bar bar-1"></span>
                                    <span class="bar bar-2"></span>
                                    <span class="bar bar-3"></span>
                                    <span class="bar bar-4"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>