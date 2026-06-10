<?php

$conn = new mysqli(
"172.31.37.186",
"portfolio",
"Password123!",
"portfolio"
);

$id = $_GET['id'];

$conn->query("DELETE FROM wi WHERE id=$id");

header("Location: wi.php");

?>
