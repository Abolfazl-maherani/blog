<?php
include('../config/database.php');

   if (isset($_GET['id'])){
        $q=$_GET['id'];
        $delete="DELETE FROM category_tbl WHERE id=$q";
        $connection->query($delete);
        header("location:../menu.php");
    }
