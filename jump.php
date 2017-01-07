<?php
/**
 * Created by PhpStorm.
 * User: DawnLight
 * Date: 2016/12/31
 * Time: 11:22
 */
require_once "config.php";
 
$shorturl=$_SERVER['REQUEST_URI'];
$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWD, DB_NAME);
if ($conn->connect_error) {
    die("Error: " . $conn->connect_error);
}
$conn->query("SET NAMES utf8");
$sql = "SELECT longurls FROM urls where shorturls='".$shorturl."' LIMIT 0, 30 ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
	$url = $row["longurls"];
    header("Location:$url");
} else {
    header("Location:/");
}
$conn->close();