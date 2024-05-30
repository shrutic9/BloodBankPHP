<?php
session_start();
$host='host=127.0.0.1';
$port='port=5432';
$dbname='dbname=postgres';
$cred='user=postgres password=123789';
$db=pg_connect("$host $port $dbname $cred");
?>