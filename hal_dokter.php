<?php
include("koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">

    <!-- Bootstrap offline -->

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css"> 
	<link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap Online -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous">   
    
    <title>Poliklinik</title>   <!--Judul Halaman-->
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">POLIKLINIK</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="hal_dokter.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="pasien.php">Pasien</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="periksa.php">Periksa</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
            </li>
        </ul>
        </div>
    </div>
</nav>
<div>
    <h1>SELAMAT DATANG</h1>
    <center><h2>DOKTER</h2></center>
</div>
</body>
</html>