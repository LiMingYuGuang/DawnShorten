<?php
require_once "config.php";
 
if (isset($_REQUEST["jump"])) {
    if(isset($_REQUEST["url"])) {
        $shorturl=$_REQUEST["url"];
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
        $conn->close();
        exit;
        }
    }
}

if (isset($_REQUEST["shorten"])) {
    if(isset($_REQUEST["passwd"])) {
        $passwd = $_REQUEST["passwd"];
        if ($passwd == SHORTEN_PASSWD) {
            if (isset($_REQUEST["long"]) && isset($_REQUEST["short"])) {
                $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWD, DB_NAME);
                if ($conn->connect_error) {
                    die("Error: " . $conn->connect_error);
                }
		        $longurl = $_REQUEST["long"];
		        $shorturl = $_REQUEST["short"];
		        $conn->query("SET NAMES utf8");
		        $sql = "insert into urls values('".$shorturl."','".$longurl."');";
		        $result = $conn->query($sql);
		        $ok="https://go.lim-light.com/".$shorturl;
		        $conn->close();
		        header("Location:index.php?ok=$ok");
                exit;
            }
        }
    }
}

if (isset($_REQUEST["reduce"])) {
    if (isset($_REQUEST["short"])) {
        $shorturl=$_REQUEST['short'];
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
            header("Location:index.php?longurl=$url");
        }
        $conn->close();
        exit;
    }
}

require_once("s.php");
