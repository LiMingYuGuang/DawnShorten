<?php
/**
 * Created by PhpStorm.
 * User: DawnLight
 * Date: 2016/12/31
 * Time: 11:10
 */
require_once "config.php";

if (isset($_REQUEST["passwd"])) {
    $passwd = $_REQUEST["passwd"];
    if ($passwd == SHORTER_PASSWD) {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWD, DB_NAME);
        if ($conn->connect_error) {
            die("Error: " . $conn->connect_error);
        }
		$longurl = $_REQUEST["longurl"];
		$shorturl = "/".$_REQUEST["shorturl"];
		$conn->query("SET NAMES utf8");
		$sql = "insert into urls values('".$shorturl."','".$longurl."');";
		$result = $conn->query($sql);
		$ok="https://go.lim-light.com/".$_REQUEST["shorturl"];
		$conn->close();
		header("Location:index.php?ok=$ok");
    } else {
        header("Location:/");
    }
} else {
    header("Location:/");
}
