<?php
session_start();
//checking the connection to the database
$conn = mysqli_connect("localhost",'root','','user');
if (!$conn) {
    die("Connection Failed :-".mysqli_connect_error());
}