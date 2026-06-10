<?php

$conn = new mysqli(
"172.31.37.186",
"portfolio",
"Password123!",
"portfolio"
);

if($conn->connect_error){
die("Koneksi gagal");
}

?>
