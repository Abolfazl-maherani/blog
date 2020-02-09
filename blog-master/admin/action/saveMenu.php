<?php
include('../../config/database.php');
$name = $_POST['title'];
$description = $_POST['description'];
//$order=$_POST['order'];
$address = $_POST['address'];
if (isset($name, $description, $address)) {
    if ($name == '' && $address == '' && $description == '') {
        header("Location:../menu.php");
    }
    else if ($name != '' && $address != '' && $description != '') {
        $connection->query("INSERT INTO category_tbl(name,address,description)VALUES ('" . $name . "','" . $address . "','" . $description . "')");
        header("Location:../menu.php");
    }
    header("Location:../menu.php");
} 
else echo 'please enter complete item';
?>
