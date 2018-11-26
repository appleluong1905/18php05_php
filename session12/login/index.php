<?php include "header.php";?>
<?php include 'controller/frontend_controller.php';?>
<a href="index.php">Home</a>
<a href="index.php?controller=products&action=listProduct">Products</a>
<a href="index.php?controller=news&action=listNews">News</a>
<a href="index.php?controller=users&action=listUsers">Users</a>
<?php 
	$xuly = new FrontEndController();
	$xuly->xulyYeucau();
?>