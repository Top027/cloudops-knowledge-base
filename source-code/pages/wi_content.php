<?php

$result = $conn->query("SELECT * FROM wi ORDER BY id DESC");

?>

<h2>Work Instruction</h2>

<a href="tambah_wi.php" class="btn btn-success mb-3">
+ Tambah WI
</a>

<table class="table table-bordered">

<tr>
<th>ID</th>
<th>Title</th>
<th>Category</th>
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

<td>
<a href="edit_wi.php?id=<?= $row['id'] ?>">Edit</a> |
<a href="delete_wi.php?id=<?= $row['id'] ?>"
onclick="return confirm('Yakin hapus?')">
Delete
</a>
</td>

</tr>

<?php } ?>

</table>
