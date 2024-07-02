<?php
session_start();

$con = mysqli_connect("localhost","root","","urmemories");

if(!$con){
    die('Connection Failed'. mysqli_connect_error());
}
