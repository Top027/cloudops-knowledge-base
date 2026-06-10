<?php

$conn = new mysqli(
"172.31.37.186",
"portfolio",
"Password123!",
"portfolio"
);

$id = $_GET['id'];

if(isset($_POST['update'])){

$title = $_POST['title'];
$category = $_POST['category'];
$content = $_POST['content'];

$conn->query("
UPDATE wi
SET
title='$title',
category='$category',
content='$content'
WHERE id=$id
");

header("Location: wi.php");
exit;
}

$data = $conn->query("
SELECT * FROM wi
WHERE id=$id
")->fetch_assoc();

?>

<!DOCTYPE html>
<html>
<head>
<title>Edit WI</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="container mt-5">

<h2>Edit Work Instruction</h2>

<form method="POST">

<div class="mb-3">
<label>Title</label>
<input
type="text"
name="title"
class="form-control"
value="<?= $data['title']; ?>">
</div>

<div class="mb-3">
<label>Category</label>
<input
type="text"
name="category"
class="form-control"
value="<?= $data['category']; ?>">
</div>

<div class="mb-3">
<label>Content</label>
<textarea
name="content"
class="form-control"
rows="10"><?= $data['content']; ?></textarea>
</div>

<button
type="submit"
name="update"
class="btn btn-primary">
Update
</button>

<a href="wi.php" class="btn btn-secondary">
Batal
</a>

</form>

</body>
</html>
