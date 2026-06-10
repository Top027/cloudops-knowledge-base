<?php

$result = $conn->query("SELECT * FROM karyawan ORDER BY id DESC");

?>

<h2>Karyawan</h2>

<table class="table table-bordered">

<tr>
<th>ID</th>
<th>Nama</th>
<th>Devisi</th>
<th>Jabatan</th>
</tr>

<?php while($row = $result->fetch_assoc()){ ?>

<tr>

<td><?= $row['id'] ?></td>

<td><?= $row['nama'] ?></td>

<td><?= $row['devisi'] ?></td>

<td><?= $row['jabatan'] ?></td>

</tr>

<?php } ?>

</table>
