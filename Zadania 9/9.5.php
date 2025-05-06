<?php
$plik = "ip_list.txt";
$allowed_ips=array_map('trim',file($plik));
$user_ip = $_SERVER['REMOTE_ADDR'];

if(in_array($user_ip, $allowed_ips)) {
    include("strona_pierwsza.php");
}
else{
    include("strona_druga.php");
}