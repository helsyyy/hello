<?php
include "../config.php";

if($_POST["delete_person"]){

	$str="DELETE FROM `person` WHERE `id` = " . $_POST["id"];

	mysqli_query($connection,$str);

	echo '<script>location.replace("index.php#person");</script>'; exit;
}



if($_POST["save_person"]){

	//var_dump($_POST["name"]); die();

	$str="UPDATE `person` set name='" . $_POST["name"] ."', info='" . $_POST["info"] ."', status='" . $_POST["status"] ."', p_date='" . $_POST["p_date"] ."' WHERE id = " . $_POST["id"];

	mysqli_query($connection,$str);

	echo '<script>location.replace("index.php#person");</script>'; exit;
}



if($_POST["add_person"]){


	$str="INSERT INTO `person` (`id`, `name`, `info`, `info1`, `earnings`, `status`, `p_date`, `p_image`) VALUES (NULL, '" . $_POST["name"] ."', '" . $_POST["info"] ."', '" . $_POST["info1"] ."', '" . $_POST["earnings"] ."', '" . $_POST["status"] ."', '" . $_POST["p_date"] ."', NULL)";

	mysqli_query($connection,$str);

	echo '<script>location.replace("index.php#person");</script>'; exit;
}