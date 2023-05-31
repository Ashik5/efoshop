<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- jquery.min.js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap style -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="asset/css/bootstrap.min.css" />
    <link rel="stylesheet" href="asset/css/style.css" />
    <link rel="stylesheet" href="asset/css/main.css" />
    <link rel="stylesheet" href="asset/css/responsive.css" />
</head>

<body>
    <!-- new header adding end -->
    <div id="landingPage" class="header">
        <div class="container">
            <!-- <?php require('header-top.php'); ?> -->
            <div class="efoshop-menu">
                <div class="brand-logo col-lg-3">
                    <div class="logo_image">
                        <a href="index.php"><img src="img/logo (2).png" alt="" /></a>
                    </div>
                </div>
                <div class="search-bar col-lg-7">
                    <div class="navbar-collapse d-flex h-100">
                        <form class="form-inline mx-auto d-flex align-items-center header-serarch-box">
                            <input class="form-control w-100" type="search" placeholder="Search for products..." aria-label="Search" />
                        </form>
                        <div class="search_btn d-flex align-items-center">
                            <span><i class="fa-solid fa-magnifying-glass"></i></span>
                            <button id="search_btn" class="search_btn">Search</button>
                        </div>
                    </div>
                </div>
                <div class="card_items col-lg-2">
                    <div class="items d-flex align-items-center">
                        <div class="shop">
                            <a href="checkout.php">
                                <i class="fa-sharp fa-solid fa-cart-shopping"></i>
                            </a>
                        </div>
                        <div id="header-nav-ico" class="Search-icon searchI">
                                <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                        <div class="wishlist">
                            <a href="#">
                                <i class="fa-solid fa-bookmark"></i>
                            </a>
                        </div>
                        <div class="user">
                            <a href="#"><i class="fa-solid fa-user"></i></a>
                        </div>
                        <div class="bars">
                            <a href="#" class="bar-icons">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>