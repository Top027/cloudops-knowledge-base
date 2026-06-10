<?php

$result = $conn->query("SELECT * FROM projects ORDER BY id DESC");

?>

<h2>Projects</h2>

<table class="table table-bordered">

<tr>
<th>ID</th>
<th>Project Name</th>
<th>Description</th>
</tr>

<?php while($row = $result->fetch_assoc()){ ?>

<tr>
<td><?= $row['id'] ?></td>
<td><?= $row['project_name'] ?></td>
<td><?= $row['description'] ?></td>
</tr>

<?php } ?>

</table>
