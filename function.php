<?php

// mysqli connect
require('database/DBController.php');

// product class
require('database/Product.php');

// db object
$db = new  DBController();

// Product object
$product = new Product($db);

