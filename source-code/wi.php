<?php

$conn = new mysqli(
"172.31.37.186",
"portfolio",
"Password123!",
"portfolio"
);

$result = $conn->query("SELECT * FROM wi ORDER BY id DESC");

?>

<!DOCTYPE html>
<html>
<head>

<title>Work Instruction</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="container mt-5">

<h2>Work Instruction</h2>
<a href="tambah_wi.php"
style="
background:#16a34a;
color:white;
padding:10px 15px;
text-decoration:none;
border-radius:5px;
display:inline-block;
margin-bottom:15px;">
+ Tambah WI
</a>

<a href="dashboard.php" class="btn btn-secondary mb-3">
Kembali Dashboard
</a>

<table class="table table-bordered">

<tr>
<th>ID</th>
<th>Title</th>
<th>Category</th>
<th>Date</th>
<th>Action</th>
</tr>

<?php while($row = $result->fetch_assoc()) { ?>

<tr>

<td><?= $row['id'] ?></td>

<td>
<a href="view.php?id=<?= $row['id'] ?>">
<?= $row['title'] ?>
</a>
</td>

<td><?= $row['category'] ?></td>

<td><?= $row['date'] ?></td>

<td>
<a href="edit_wi.php?id=<?= $row['id'] ?>">Edit</a> |

<a href="delete_wi.php?id=<?= $row['id'] ?>"
onclick="return confirm('Yakin hapus WI ini?')">
Delete
</a>

</td>

</tr>

<?php } ?>

</table>

</body>
</html>
