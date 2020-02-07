<?php
//username database
$username='admin';
//password database
$password='142536';
//host
$host='localhost';
//connect datebase
$connection=mysqli_connect($host,$username,$password,'blog_db');
//select
$squery='SELECT * FROM ';
mysqli_query($connection,'SET NAMES utf8');
