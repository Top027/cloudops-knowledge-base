<?php

$conn = new mysqli(
"172.31.37.186",
"portfolio",
"Password123!",
"portfolio"
);

$wi = $conn->query("SELECT COUNT(*) total FROM wi")->fetch_assoc()['total'];
$karyawan = $conn->query("SELECT COUNT(*) total FROM karyawan")->fetch_assoc()['total'];
$projects = $conn->query("SELECT COUNT(*) total FROM projects")->fetch_assoc()['total'];

?>

<!DOCTYPE html>
<html>
<head>

<title>CloudOps Knowledge Base</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f4f6f9;
}

.sidebar{
height:100vh;
background:#0d6efd;
padding-top:20px;
}

.sidebar a{
display:block;
color:white;
padding:15px;
text-decoration:none;
font-weight:bold;
}

.sidebar a:hover{
background:#0b5ed7;
}

.card-box{
background:white;
padding:25px;
border-radius:10px;
box-shadow:0 2px 10px rgba(0,0,0,0.1);
text-align:center;
}

</style>

</head>

<body>

<div class="container-fluid">

<div class="row">

<div class="col-md-2 sidebar">

<h4 class="text-center text-white">
CloudOps
</h4>

<hr class="text-white">

<a href="dashboard.php?page=dashboard">
🏠 Dashboard
</a>

<a href="dashboard.php?page=wi">
📚 Work Instruction
</a>

<a href="dashboard.php?page=karyawan">
👥 Karyawan
</a>

<a href="dashboard.php?page=projects">
📁 Projects
</a>

<a href="login.php">🚪 Logout</a>

</div>

<div class="col-md-10 p-4">

<?php

$page = $_GET['page'] ?? 'dashboard';

if($page == 'wi'){

include 'pages/wi_content.php';

}elseif($page == 'karyawan'){

include 'pages/karyawan_content.php';

}elseif($page == 'projects'){

include 'pages/project_content.php';

}else{

?>

<h2>CloudOps Dashboard</h2>

<div class="row mt-4">

<div class="col-md-4">

<div class="card-box">

<h1><?= $wi ?></h1>

<p>Total Work Instruction</p>

</div>

</div>

<div class="col-md-4">

<div class="card-box">

<h1><?= $karyawan ?></h1>

<p>Total Karyawan</p>

</div>

</div>

<div class="col-md-4">

<div class="card-box">

<h1><?= $projects ?></h1>

<p>Total Projects</p>

</div>

</div>

</div>

</div>

</div>

</div>

<?php } ?>

</body>
</html>
