<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="style.css" />
    <script src="https://kit.fontawesome.com/d394af271e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Hello, world!</title>
  </head>
  <body>
    <!--Agrey horizontal navbar that becomes vertical on small screens -->
    <div class="navbar navbar-expand-lg navbar-dark bg-secondary" style="background: rgba(42, 44, 57, 0.9)">
      <!-- Links -->
      <div class="container">
        <a class="navbar-brand"  href="<?= base_url();?>"><i>SPARE <span style="color: #ffc107;">PART</span></a></i>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse"  id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active"  href="<?= base_url();?>"> Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="<?= base_url('barang'); ?>"> Tambah Barang </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#gallery"> Transaksi </a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="login">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>