<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="scss/main.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container">
          <a class="navbar-brand" href="#"><i class="fas fa-utensils"></i>Restaurant</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#menu">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#cara">Pricing</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#order">Order</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#spesialis">Spesialis</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="container">
        <div class="row layer-1">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 kiri">
                <h1>Food <span>Made</span> With <span>Love</span></h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsam qui praesentium, voluptatem unde vel odit eos officia, tenetur dolor doloremque quo hic recusandae quia molestias necessitatibus, eius sunt eaque molestiae.</p>
                <a href="#order"><button>Order Now</button></a>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 kanan">
                <img src="img/image-layer-1.png">
            </div>
        </div>
      </div>

      <div class="container">
        <div class="row layer-2">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 kiri">
              <img src="image/koki.png" alt="">
              <a href=""><img src="image/tutupnya.png" class="tutupnya"></a>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 kanan">
                <h1>MENU <span>ANDALAN</span></h1>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias dolor quasi cum, nihil pariatur consequatur deserunt rerum porro tempore unde blanditiis vero sunt numquam reprehenderit facilis ad nostrum consectetur repudiandae, earum debitis totam! Sint temporibus et sapiente assumenda quia consequuntur!</p>
            </div>
        </div>
      </div>

      <div class="row layer-3">
        <div class="bg-layer-3">
          <img id="dinding" src="image/dinding.png" alt="">
          <img id="lantai" src="image/lantai.png" alt="">
          <img id="manusia" src="image/layer-3.png" width="10px">
          <img id="ngepel" src="image/mengepel.png" alt="">
        </div>
      </div>

      <div class="bg-layer-4" id="menu">
        <video autoplay>
          <source src="Food Background Music _ No Copyright Music For YouTube Vlog Videos _ Cooking Music Royalty Free.mp4" type="video/webm" />
        </video>
          <div class="row layer-4">
            <h1>MENU <span>KAMI</span></h1>
            <div class="row menu-layer-4">
              <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 menu">
                <img id="menu-1" src="image/saji-tertutup.png">
                <div class="btn-1"><button id="btn-1">BUKA</button></div>
                <h1>Pizza</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              </div>
              <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 menu">
                <img id="menu-2" src="image/saji-tertutup.png">
                <div class="btn-1"><button id="btn-2">BUKA</button></div>
                <h1>Kentang</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              </div>
              <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 menu">
                <img id="menu-3" src="image/saji-tertutup.png">
                <div class="btn-1"><button id="btn-3">BUKA</button></div>
                <h1>Ayam Bakar</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              </div>
              <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 menu">
                <img id="menu-4" src="image/saji-tertutup.png">
                <div class="btn-1"><button id="btn-4">BUKA</button></div>
                <h1>Mie Aceh Kw</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
              </div>
            </div>
          </div>
      </div>

      <div class="bg-layer-5" id="cara">
        <div class="container">
          <div class="row layer-5">
            <h1>CARA <span>MEMESAN</span></h1>
            <div class="row cara">
              <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                <img src="img/step-1.jpg" alt="">
                <h1>Pilih Makanan Favoritmu</h1>
              </div>
              <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                <img src="img/step-2.jpg" alt="">
                <h1>Pengiriman Gratis Dan Cepat</h1>
              </div>
              <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                <img src="img/step-3.jpg" alt="">
                <h1>Metode Pembayaran Mudah</h1>
              </div>
              <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                <img src="img/step-4.jpg" alt="">
                <h1>Dan Akhirnya, Nikmati Makananmu</h1>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container" id="spesialis">>
        <div class="row layer-6">
          <h1><span>Spesialisasi</span> Kami</h1>
          <div class="row komponen-layer-6">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 box">
              <img class="image" src="img/p-1.jpg" alt="">
              <div class="content">
                <img src="img/s-1.png" alt="">
                  <h3>Tasty Burger</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 box">
              <img class="image" src="img/pizza.jpg" alt="">
              <div class="content">
                  <img src="img/s-2.png" alt="">
                  <h3>Tasty Pizza</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 box">
              <img class="image" src="img/p-6.jpg" alt="">
              <div class="content">
                  <img src="img/s-3.png" alt="">
                  <h3>Tasty Ice</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 box">
              <img class="image" src="img/p-5.jpg" alt="">
              <div class="content">
                  <img src="img/s-4.png" alt="">
                  <h3>Tasty Drink</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 box">
              <img class="image" src="img/p-2.jpg" alt="">
              <div class="content">
                  <img src="img/s-5.png" alt="">
                  <h3>Tasty Cake</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
              </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 box">
              <img class="image" src="img/kopi.jpg" alt="">
              <div class="content">
                  <img src="img/s-6.png" alt="">
                  <h3>Tasty Coffee</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa tenetur voluptates aperiam tempore libero labore aut.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <?php
      include 'koneksi.php';
    ?>

      <div id="order" class="container" id="order">>
        <div class="row layer-7">
          <h1>Tambahkan <span>Data</span> Anda</h1>
          <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-5 img-order">
            <img src="img/img-order.jpg" alt="">
          </div>
        <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-12 bg-order">
          <div class="box">
            <div class="box-content">
              <form action="" method="POST">
                <div class="form-group">
                  <label>Id</label>
                  <input type="text" name="id" id="input-id" placeholder="Masukan id" class="input-control" required>
                  
                </div>
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" id="input-nama" placeholder="Masukan Nama" class="input-control" required>
                  
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" id="input-alamat" placeholder="Masukan Alamat" class="input-control" required>
                  
                </div>

                <div class="form-group">
                  <label>Telepon</label>
                  <input type="text" name="tlp" id="input-tlp" placeholder="Masukan No Telepon" class="input-control" required>
                  
                </div>

                <div class="form-group">
                  <label>Pesanan Anda</label>
                  <input type="text" name="pesanan" id="input-pesanan" placeholder="Tambahkan Pesanan" class="input-control" required>
                  
                </div>

                
                <div class="form-group">
                  <label>Jenis Pembayaran</label>
                  <select name="jenis" class="input-control" required>
                    <option value="">Pilih</option>
                    <option value="COD" id="input-jenis">COD</option>
                    <option value="TRANSFER" id="input-jenis">TRANSFER</option>
                  </select>
                  
                </div>
                <div class="button">
                  <input type="submit" name="submit" value="simpan" class="btn btn-blue" >
                </div>
              </form>

              <?php
                if(isset($_POST['submit'])){

                  $id = addslashes($_POST['id']);
                  $nama = addslashes($_POST['nama']);
                  $alamat = addslashes($_POST['alamat']);
                  $tlp = addslashes($_POST['tlp']);
                  $jenis = $_POST['jenis'];
                  $pesanan = $_POST['pesanan'];


                  $cek = mysqli_query($conn, "SELECT id FROM data_pembeli WHERE id='". $id ."' ");

                  if(mysqli_num_rows($cek)>0){
                    echo '<div class="alert alert-error">id sudah digunakan</div>';
                  }else{

                    $simpan	= mysqli_query($conn, "INSERT INTO data_pembeli (id, nama, alamat, tlp, jenis, pesanan) VALUES ('".$id."', '".$nama."', '".$alamat."', '".$tlp."', '".$jenis."', '".$pesanan."')");

                    if($simpan){
                      echo '<div class="alert alert-success">Berhasil Disimpan, Pesanan anda sedang di proses</div>';
                    }else {
                      echo 'gagal simpan' .mysqli_error($conn);
                    }
                  }

                  

                }
              ?>
            </div>
          </div>
        </div>
      </div>
      </div>

      <div class="bg-layer-8">
        <div class="container">
          <div class="row layer-8">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4 col-sm-8 col-xs-12 satu">
              <a class="navbar-brand" href="#"><i class="fas fa-utensils"></i>Restaurant</a>
              <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Similique harum ea, nobis expedita rem numquam?</p>
              <div class="medsos">
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-youtube"></i>
                <i class="fa-brands fa-tiktok"></i>
                <i class="fa-brands fa-facebook"></i>
              </div>
            </div>
            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-4 dua">
              <h1>ABOUT</h1>
              <p>About us</p>
              <p>Our Services</p>
              <p>Get Directions</p>
              <p>Review</p>
              <p>Contact Us</p>
            </div>
            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2 col-sm-4 dua">
              <h1>Help Center</h1>
              <p>Support</p>
              <p>FAQs</p>
              <p>Guest Feedback</p>
              <p>Offers</p>
              <p>Privacy Policy</p>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-6 dua">
              <h1>Reach Us</h1>
              <p>Jl. Wr.Supratman gang 8, denpasar, bali, indonesia</p>
              <p>+62 851 0065 9999</p>
              <p>info@Restaurant000.com</p>
            </div>
            <hr>
            <div class="copyright">
              <small> Copyright &copy; 2022 - Dwi Elya, All Rights Reserved.</small>
            </div>
          </div>
        </div>
        </div>
      </div>
    

    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>