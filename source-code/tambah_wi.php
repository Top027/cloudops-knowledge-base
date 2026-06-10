<?php
include 'db.php';

if(isset($_POST['submit'])){

$title = $_POST['title'];
$category = $_POST['category'];
$content = $_POST['content'];

$image = $_FILES['image']['name'];

move_uploaded_file(
$_FILES['image']['tmp_name'],
"uploads/".$image
);

$sql = "INSERT INTO wi(title,category,content,image)
VALUES('$title','$category','$content','$image')";

if($conn->query($sql)){
header("Location: wi.php");
exit;
}

}
?>

<!DOCTYPE html>
<html>
<head>
<title>Tambah WI</title>

<style>

body{
font-family:Arial;
background:#f4f6f9;
}

.container{
width:800px;
margin:50px auto;
background:white;
padding:20px;
border-radius:10px;
box-shadow:0 0 10px #ddd;
}

input,
select,
textarea{

width:100%;
padding:10px;
margin-bottom:15px;
}

button{

background:#16a34a;
color:white;
border:none;
padding:10px 20px;
cursor:pointer;
border-radius:5px;
}

</style>

</head>
<body>

<div class="container">

<h2>Tambah Work Instruction</h2>

<form method="POST" enctype="multipart/form-data">

<label>Judul</label>
<input type="text" name="title" required>

<label>Kategori</label>

<select name="category">

<option>Linux</option>
<option>AWS</option>
<option>VMware</option>
<option>Kubernetes</option>
<option>Network</option>

</select>

<label>Isi WI</label>

<textarea
name="content"
rows="10"
required></textarea>

<button type="submit" name="submit">
<div class="mb-3">
<label>Screenshot</label>

<input
type="file"
name="image"
class="form-control">

</div>
Simpan
</button>

</form>

</div>

</body>
</html>
