<?php

// require MySQL Connection
require ('database/DBController.php');


//require Login Class
require ('database/Login.php');


//require Register Class
require ('database/Register.php');

// require Product Class
require ('database/Product.php');

// require Cart Class
require ('database/Cart.php');


// DBController object
$db = new DBController();
// Login object
$login= new Login($db);

// register object
$register= new Register($db);


// Product object
$product = new Product($db);
$product_shuffle = $product->getData();

// Cart object
$Cart = new Cart($db );
