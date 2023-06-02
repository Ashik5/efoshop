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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="asset/css/bootstrap.min.css" />
    <link rel="stylesheet" href="asset/css/navbar.css" />
    <link rel="stylesheet" href="asset/css/style.css" />
    <link rel="stylesheet" href="asset/css/main.css" />


</head>
<style>
    main{
        margin-top:12rem;
    }
</style>
<body>
    <div class="efoshop-page flex-col-center">
        <!--------- header ------------->
        <div class="efoshop-header flex-col-center">
            <div class="efoshop-menubar">
                <img src="img/logo (2).png" />
                <div class="search-field flex-row-center">
                    <input type="text" placeholder="Search product"/>
                    <button>
                        <i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>
                        <span>Search</span>
                    </button>
                </div>
                <div class="menu-options">
                    <a class="search-toggle-btn" href="#"><i class="fa-solid fa-magnifying-glass fa-lg" style="color: #6e0085;"></i></a>
                    <a href="#"><i class="fa-solid fa-cart-shopping fa-lg" style="color: #6e0085;"></i></a>
                    <a href="#"><i class="fa-solid fa-heart fa-lg" style="color: #6e0085;"></i></a>
                    <a href="#"><i class="fa-solid fa-user fa-lg" style="color: #6e0085;"></i></a>
                    <a class="menu-bar" href="#"><i class="fa-solid fa-bars fa-lg" style="color: #6e0085;"></i></a>
                </div>
            </div>
            <div class="efoshop-mobile-searchbar">
                    <input type="text" placeholder="Search product"/>
                    <button class="search-submit">
                        <i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>
                        <span>Search</span>
                    </button>
            </div>
        </div>
        <div class="user-menu">
            <div class="user-menu-options">
                <a href="#">Login</a>
                <a href="#">Registration</a>
                <a href="#">Logout</a>
            </div>
        </div>
        <!------ main section ------------->
        <div class="efoshop-main-section">
