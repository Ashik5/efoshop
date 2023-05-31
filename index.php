<?php
require('header.php');
require_once('header-bottom.php');
echo '<main>';
// top Selling product
require_once('products-top-sale.php');

// catagories
require_once('categories.php');

// flash Sale
require_once('products-flash-sale.php');

// Just For You
require_once('products-recommended.php');
echo '</main>';
require_once('footer.php'); 
?>