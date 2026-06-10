<?php

$conn = new mysqli(
"172.xx.xx.xx(ip si databse)",
"portfolio",
"Password database anda",
"portfolio"
);

if($conn->connect_error){
die("Koneksi gagal");
}

?>
