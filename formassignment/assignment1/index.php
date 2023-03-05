<?php
if(isset($_GET["submit"])){
$name = $_GET['name'];
$email = $_GET['email'];

echo "<h3> Name: $name <br> Email: $email </h3>";
}