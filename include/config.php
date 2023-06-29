<?php

define("WEB_TITLE","Green Monument Bank"); // Change Bank Name
define("WEB_URL","dashboard.greenmonument.online"); // Change No "/" Ending splash
define("WEB_EMAIL","contact@greenmonument.online"); // Change Your Website Email

$web_url = WEB_URL;

function dbConnect(){
    $servername = "localhost";
    $username = "#";//DATABASE USERNAME
    $password = "#";//DATABASE PASSWORD
    $database = "#";//DATABASE NAME
    $dns = "mysql:host=$servername;dbname=$database";

    try {
        $conn = new PDO($dns, $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
//return dbConnect();

function inputValidation($value): string
{
    return trim(htmlspecialchars(htmlentities($value)));
}