<?php
ob_start();
$timezone = date_default_timezone_set("America/New_York");

$con = mysqli_connect("localhost", "root", "password", "spotlitfy");

if(mysqli_connect_errno()) {
  echo "error connecting to db" . mysqli_connect_errno();
}