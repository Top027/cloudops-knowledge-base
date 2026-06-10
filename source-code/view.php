<?php
include 'db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM wi WHERE id=$id";
$result = $conn->query($sql);

$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<title><?php echo $row['title']; ?></title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="container mt-5">

<a href="wi.php" class="btn btn-secondary mb-3">
← Kembali
</a>

<h2><?php echo $row['title']; ?></h2>

<hr>

<p>
Kategori:
<b><?php echo $row['category']; ?></b>
</p>

<hr>

<div class="card p-4">

<?php echo nl2br($row['content']); ?>

</div>

<?php if(!empty($row['image'])) { ?>

<hr>

<h4>Screenshot</h4>

<img src="uploads/<?php echo $row['image']; ?>"
class="img-fluid border rounded">

<?php } ?>

</body>
</html>
