

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container">
<form action="proses.php?aksi=tambah" method="post">
  <div class="mb-3">
    <label for="exampleInputtext1" class="form-label">Kode Barang</label>
    <input type="text" class="form-control" name="kode_barang" id="exampleInputtext1" aria-describedby="textHelp">
    
  </div>

  <div class="mb-3">
    <label for="exampleInputtext1" class="form-label">Nama Barang</label>
    <input type="text" class="form-control" name="nama_barang" id="exampleInputtext1" aria-describedby="textHelp">
    
  </div>

  <div class="mb-3">
    <label for="exampleInputtext1" class="form-label">Harga</label>
    <input type="text" class="form-control" name="harga" id="exampleInputtext1" aria-describedby="textHelp">
    
  </div>

  <div class="mb-3">
    <label for="exampleInputtext1" class="form-label">Satuan</label>
    <input type="text" class="form-control" name="satuan" id="exampleInputtext1" aria-describedby="textHelp">
    
  </div>

  <div class="mb-3">
    <label for="exampleInputtext1" class="form-label">Jenis Barang</label>
    <input type="text" class="form-control" name="jenis_barang" id="exampleInputtext1" aria-describedby="textHelp">
    
  </div>

  <div class="mb-3">
    <label for="exampleInputtext1" class="form-label">Stok</label>
    <input type="text" class="form-control" name="stok" id="exampleInputtext1" aria-describedby="textHelp">
    
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>