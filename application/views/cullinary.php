<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      
    <!-- My Font -->  
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Baloo+Tammudu+2|Caveat|Caveat+Brush|Fugaz+One|Josefin+Sans|Rozha+One|Source+Code+Pro|Spartan|Tajawal&display=swap" rel="stylesheet">

    <!-- My CSS --> 
    <link rel="stylesheet" href="<?php base_url()?>assets/style.css" type="text/css">
      
    <title>i love plants!</title>
  </head>
  <body>
     <!-- Navbar -->  
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container"> 
            <a class="navbar-brand" href="index.php">
                <img src="tanaman.png" width="35" height="35" class="d-inline-block align-top" alt=""> Herbs. 
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                  <a class="nav-item nav-link " href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="cullinary.html">Cullinary</a>
                      <a class="dropdown-item" href="aromatic.html">Aromatic</a>
                      <a class="dropdown-item" href="medicinal.html">Medicinal</a>
                    </div>
                  </li> 
                </div>
            </div>
         </div>
       </nav>
      
<!---- judul ----->
    <section class="kategori">
        <div class="container">
            <div class="row justify-content-center">
                <h2>Cullinary Herbs</h2>
            </div>
        </div>
    </section>
      
<!---- isi ----->
    <section>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-m-4">
                    <div class="card" style="width: 28rem;">
                      <img class="card-img-top" src="parsley.webp" width="470" height="280" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Parsley</h5>
                        <p class="card-text">Kaya Antioksidan, Dapat Mencegah Batu Ginjal, Kaya Vitamin C, Melawan Kanker, Mengatur Siklus Menstruasi, dan Kontrol Gula Darah. </p>
                        <a href="https://id.wikipedia.org/wiki/Peterseli" class="btn btn-sm btn-outline-secondary">Info</a>
                      </div>
                    </div>
                </div>
                <div class="col-m-4">
                    <div class="card" style="width: 28rem;">
                      <img class="card-img-top" src="oregano.jpg" width="470" height="280" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Oregano</h5>
                        <p class="card-text">Meningkatkan kekebalan tubuh, Detoksifikasi Tubuh,Meningkatkan Energi, Memperlancar pencernaan dan Menyehatkan Tulang dan Jantung, </p>
                        <a href="http://www.satuharapan.com/read-detail/read/oregano-berpotensi-antimikroba" class="btn btn-sm btn-outline-secondary">Info</a>
                      </div>
                    </div>
                </div>
                <div class="col-m-4">
                    <div class="card" style="width: 28rem;">
                      <img class="card-img-top" src="chives.webp" width="470" height="280" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Chives</h5>
                        <p class="card-text">Sebagai penangkal kanker, anti bakteri,  menjaga kesehatan rambut, menjaga kesehatan kulit, sebagai obat hipertensi,  mencegah kolesterol jahat dalam tubuh   </p>
                        <a href="https://id.wikipedia.org/wiki/Bawang_daun" class="btn btn-sm btn-outline-secondary">Info</a>
                      </div>
                    </div>
                </div>
                <div class="col-m-4">
                    <div class="card" style="width: 28rem;">
                      <img class="card-img-top" src="mint.jpg" width="470" height="280" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Pappermint</h5>
                        <p class="card-text">Menjaga kesehatan gigi, Meringankan kram menstruasi, Mengatasi gangguan pencernaan, Meredakan sakit kepala, Meningkatkan fungsi otak.</p>
                        <a href="https://en.m.wikipedia.org/wiki/Peppermint" class="btn btn-sm btn-outline-secondary">Info</a>
                      </div>
                    </div>
                </div>
                <div class="col-m-4">
                    <div class="card" style="width: 28rem;">
                      <img class="card-img-top" src="Rosemary_1.jpg" width="470" height="280" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Rosemary</h5>
                        <p class="card-text">Melawan radikal bebas, Meningkatkan daya ingat dan konsentrasi, Membantu melindungi otak,Melindungi kesehatan mata, Memperbaiki kesehatan pencernaan,</p>
                        <a href="https://id.wikipedia.org/wiki/Rosmarin" class="btn btn-sm btn-outline-secondary">Info</a>
                      </div>
                    </div>
                </div>
                <div class="col-m-4">
                    <div class="card" style="width: 28rem;">
                      <img class="card-img-top" src="sage.webp" width="470" height="280" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title">Sage</h5>
                        <p class="card-text">Mengatasi Peradangan, Pengobatan Alzheimer, Meminimalisir Gejala Menopause, Mengendalikan Gula Darah dan Kolesterol, Merawat Kesehatan Tulang.</p>
                        <a href="https://en.m.wikipedia.org/wiki/Salvia_officinalis" class="btn btn-sm btn-outline-secondary">Info</a>
                      </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
      
   
  <!-- FOOTER -->
      <footer>
        <p style="text-align: center;">&copy; 2020  mumu</p>
      </footer>    
      
        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>