<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<html>
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
            <a class="navbar-brand" href="#">
                <img src="<?php echo base_url('assets/images/tanaman.png');?>" width="35" height="35" class="d-inline-block align-top" alt=""> Herbs.
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                  <a class="nav-item nav-link " href="index.php">Home <span class="sr-only">(current)</span></a>
                  <a class="nav-item nav-link" href="#kategori">Category</a>
                  <a class="nav-item nav-link" href="#tips">Tips</a>
                </div>
            </div>
        </div>
       </nav>
      
      <!-- header -->  
        <div class="container-fluid text-center">   
            <h1> Herbs.</h1> 
            <img src="<?php base_url()?>assets/images/plant5.png" width="380" height="150"  alt="">
            <h6> Informasi tentang herbal.</h6>
            <hr>
        </div>
   
          <!-- content 1 -->
          <section id="apa">
            <div class="container text-center">
                <div class="row  apa">
                    <div class="col-lg-4"><br>
                        <h1>Apa itu Herbal?</h1>
                    </div>
                    <div class="col-lg-8"> <br><br>
                        <p>Herbal adalah tanaman atau tumbuhan yang mempunyai kegunaan atau nilai lebih dalam pengobatan. Dengan kata lain, semua jenis tanaman yang mengandung bahan atau zat aktif yang berguna untuk pengobatan bisa digolongkan sebagai herbal.</p>   
                    </div> 
                    <div class="col-sm-1">
                        <br><br>
                    </div>
                </div> 
              </div>
            </section>

          <!-- content kategori --> 
          <section class="kategori" id="kategori">
                <div class="container-fluid">
                    <br>
                    <div class="row justify-content-center ">
                    <h2> Kategori Herbal</h2> 
                    </div>
                  <div class="row justify-content-center text-center">
                      <div class="col-m-4">
                        <a href="<?= base_url(); ?>Home/cullinary">
                          <img src="<?php echo base_url() ?>assets/images/c1.jpg" width="450" height="230"  alt="">
                        </a>
                          <h3>Cullinary Herbs </h3>
                      </div>
                      <div class="col-m-4">
                          <a href='aromatic.php'>
                          <img src="<?php echo base_url() ?>assets/images/c2.jpg" width="450" height="230"  alt="">
                          </a>
                           <h3>Aromatic Herbs </h3>
                      </div>
                      <div class="col-m-4">
                          <a href='medicinal.php'>
                          <img src="<?php echo base_url() ?>assets/images/c3.jpg" width="450" height="230"  alt="">
                          </a>
                            <h3>Medicinal Herbs </h3>
                      </div>

                  </div>
                </div>
            </section>

          <!-- content tips -->  
          <section id="tips">
            <div class="container-fluid justify-content-center ">
                <div class="row justify-content-center">
                    <div class="col-md-3"> 
                        <h1>Tips Merawat Tanaman Herbal</h1>
                    </div>
                    <div clas="col-md-9"> 
                        <div class="list-group">
                            <a href="https://www.pertanianku.com/tips-merawat-tanaman-obat-agar-bertahan-lama/" class="list-group-item list-group-item-action flex-column align-items-start ">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Tips Merawat Tanaman Obat Agar Bertahan Lama</h5>
                                </div>
                                    <p class="mb-1">Pada awalnya, tanaman obat merupakan tanaman liar yang tidak memerlukan pemeliharaan secara khusus...</p>
                                  <small>pertanianku.com</small>
                            </a>
                            <a href="https://www.fimela.com/beauty-health/read/3831209/tips-tips-merawat-tanaman-obat" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Tips-tips Merawat Tanaman Obat</h5>
                                </div>
                                    <p class="mb-1">Namun keragaman jenis tanaman obat membutuhkan perawatan yang berbeda beda. Hal tersebut karena...</p> 
                                    <small class="text-muted">fimela.com</small>
                            </a>
                            <a href="https://idea.grid.id/read/091661507/tidak-perlu-membeli-inilah-cara-mudah-menanam-tanaman-herbal-di-rumah?page=all" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                  <h5 class="mb-1">Tidak Perlu Membeli, Inilah Cara Mudah Menanam Tanaman Herbal di Rumah</h5>

                                </div>
                                    <p class="mb-1"> Menanam tanaman sendiri jauh lebih mudah dari yang kamu kira. Yang kamu butuhkan hanyalah beberapa...</p>
                                    <small class="text-muted">idea.grid.id</small>
                            </a>
                            <a href="https://bibitbunga.com/cara-menanam-rosemary-dari-stek-batang/" class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                  <h5 class="mb-1">Cara Merawat Tanaman Rosemary</h5>
                                </div>
                                    <p class="mb-1">Tanaman herbal ini bisa Anda letakkan pada pot kecil dalam ruangan rumah. Namun tidak salah juga jika Anda...</p>
                                    <small class="text-muted">bibitbunga.com</small>
                            </a>
                        </div>                             
                    </div>
                </div>
            </div>
          </section>

          <!---Content quote---->
          <section id="quote">
            <div class="container">
                <div clas="row justify-content-center">
                    <h4> " There are no incurable diseases — only the lack of will. There are no worthless herbs — only the lack of knowledge. " <br> — Avicenna</h4>
                </div>  
            </div>
          </section>     
      
      <!-- FOOTER -->
      <footer>
        <p style="text-align: center;">&copy; 2020 mumu</p>
      </footer>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>