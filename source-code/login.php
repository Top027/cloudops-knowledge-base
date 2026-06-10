<?php

$conn = new mysqli(
"172.31.37.186",
"portfolio",
"Password123!",
"portfolio"
);

if(isset($_POST['login'])){

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users
WHERE username='$username'
AND password='$password'";

$result = $conn->query($sql);

if($result->num_rows > 0){

echo "<script>
alert('Login Berhasil');
window.location='dashboard.php';
</script>";

}else{

echo "<script>
alert('Username atau Password Salah');
</script>";

}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login CloudOps</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="container mt-5">

<h2>CloudOps Knowledge Base Login</h2>

<form method="POST">

<div class="mb-3">
<label>Username</label>
<input type="text" name="username" class="form-control">
</div>

<div class="mb-3">
<label>Password</label>
<input type="password" name="password" class="form-control">
</div>

<button type="submit" name="login" class="btn btn-primary">
Login
</button>

</form>

</body>
</html>
