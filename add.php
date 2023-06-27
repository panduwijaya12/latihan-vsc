<?php
include "data.php";

if(isset($_POST['submit'])){
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $alamat = $_POST['alamat'];

  $sql = "INSERT INTO `data`(`id`, `nama`, `email`, `alamat`) VALUES (NULL,'$nama','$email','$alamat')";

  $result = mysqli_query($conn, $sql);

  if($result) {
    header("Location: table.php?msg=New record created successfully");
    exit();
  } else {
    echo "Failed: " . mysqli_error($conn); 
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   <title>Data diri</title>
   <style>
     body {
         background-color: #BEDAC7;
      }
        .navbar-brand {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            font-size: 25px;
        }
        .navbar-nav {
            margin-left: auto;
        }
    </style>
</head>
<body>
  </-- navbar --/>
   <nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
      <a class="navbar-brand mx-auto">Manipulating Data!</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="table.php">Cencel</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  </-- form --/>
  <div class="container">
    <div class="row justify-content-center mt-5<div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-lg-6">
        <div class="text-center mb-4">
          <h3>Add New Data</h3>
          <p class="text-muted">Complete the form below to add a new data</p>
        </div> 

        <form action="" method="post">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" class="form-control" id="nama" name="nama" placeholder="Albert">
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email:</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="name@example.com">
          </div>

          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat:</label>
            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="JL.example">
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-success" name="submit">submit</button>
          </div>
        </form>
      </div>
    </div>
  </div> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>