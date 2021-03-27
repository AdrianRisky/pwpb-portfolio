<?php
include 'koneksi.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@100&display=swap" rel="stylesheet">

    <!-- Style -->
    <link rel="stylesheet" href="css/body.css">

    <title>Portofolio</title>
    
  </head>
  <body>

    <?php

        $sql = "SELECT * FROM profil";
        $query = mysqli_query($connect,$sql);

        while($profil = mysqli_fetch_array($query)){


      ?>
    
    <div id="home"></div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top p-3" style="background-color: #ffd700;">
      <div class="container-sm">
        <a href="https://youtube.com/c/FrostGold" class="nav-link  active me-4 fs-5 fw-bold" style="color: black;"><?php echo $profil['nama'] ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse-sm navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link  active me-4 fw-boldder" aria-current="page" href="#home"><b>HOME</b></a>
            <a class="nav-link  active me-4 fw-boldder" href="#about"><b>ABOUT</b></a>
            <a class="nav-link  active me-4 fw-boldder" href="#gallery"><b>GALLERY</b></a>
            <a class="nav-link  active me-4 fw-boldder" href="#contact"><b>CONTACT</b></a>
            <a class="nav-link  active me-4 fw-boldder" href="admin.php"><b>ADMIN</b></a>
          </div>
        </div>
      </div>
    </nav>


    <!-- Home -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffd700" fill-opacity="1" d="M0,320L7.7,282.7C15.5,245,31,171,46,117.3C61.9,64,77,32,93,58.7C108.4,85,124,171,139,176C154.8,181,170,107,186,80C201.3,53,217,75,232,80C247.7,85,263,75,279,69.3C294.2,64,310,64,325,85.3C340.6,107,356,149,372,176C387.1,203,403,213,418,213.3C433.5,213,449,203,465,218.7C480,235,495,277,511,293.3C526.5,309,542,299,557,288C572.9,277,588,267,604,250.7C619.4,235,635,213,650,197.3C665.8,181,681,171,697,192C712.3,213,728,267,743,288C758.7,309,774,299,790,282.7C805.2,267,821,245,836,245.3C851.6,245,867,267,883,277.3C898.1,288,914,288,929,261.3C944.5,235,960,181,975,144C991,107,1006,85,1022,96C1037.4,107,1053,149,1068,170.7C1083.9,192,1099,192,1115,197.3C1130.3,203,1146,213,1161,218.7C1176.8,224,1192,224,1208,234.7C1223.2,245,1239,267,1254,250.7C1269.7,235,1285,181,1301,165.3C1316.1,149,1332,171,1347,186.7C1362.6,203,1378,213,1394,197.3C1409,181,1425,139,1432,117.3L1440,96L1440,0L1432.3,0C1424.5,0,1409,0,1394,0C1378.1,0,1363,0,1347,0C1331.6,0,1316,0,1301,0C1285.2,0,1270,0,1254,0C1238.7,0,1223,0,1208,0C1192.3,0,1177,0,1161,0C1145.8,0,1130,0,1115,0C1099.4,0,1084,0,1068,0C1052.9,0,1037,0,1022,0C1006.5,0,991,0,975,0C960,0,945,0,929,0C913.5,0,898,0,883,0C867.1,0,852,0,836,0C820.6,0,805,0,790,0C774.2,0,759,0,743,0C727.7,0,712,0,697,0C681.3,0,666,0,650,0C634.8,0,619,0,604,0C588.4,0,573,0,557,0C541.9,0,526,0,511,0C495.5,0,480,0,465,0C449,0,434,0,418,0C402.6,0,387,0,372,0C356.1,0,341,0,325,0C309.7,0,294,0,279,0C263.2,0,248,0,232,0C216.8,0,201,0,186,0C170.3,0,155,0,139,0C123.9,0,108,0,93,0C77.4,0,62,0,46,0C31,0,15,0,8,0L0,0Z"></path></svg>
      <div class="container-sm text-black text-center">
      
        <img class="img-thumbnail rounded-circle shadow" src="<?php echo $profil['gambar'] ?>" alt="Adrian Risky" width="250px" height="250px" style="margin-top: 50px;">
        <p class="lead text-center mt-1 fw-bold fs-2"><?php echo $profil['nama'] ?></p>

       <?php
        echo "<a class='btn btn-outline-light me-1' name='edita' href='formprofil.php?id=".$profil['id']."'>Edit Profil</a> ";
       ?>

        
      </div>
    </div>
    <?php
        }
        ?>

    <!-- Waves -->
    <<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffd700" fill-opacity="1" d="M0,288L17.1,282.7C34.3,277,69,267,103,240C137.1,213,171,171,206,154.7C240,139,274,149,309,144C342.9,139,377,117,411,133.3C445.7,149,480,203,514,202.7C548.6,203,583,149,617,106.7C651.4,64,686,32,720,26.7C754.3,21,789,43,823,58.7C857.1,75,891,85,926,122.7C960,160,994,224,1029,240C1062.9,256,1097,224,1131,218.7C1165.7,213,1200,235,1234,208C1268.6,181,1303,107,1337,96C1371.4,85,1406,139,1423,165.3L1440,192L1440,0L1422.9,0C1405.7,0,1371,0,1337,0C1302.9,0,1269,0,1234,0C1200,0,1166,0,1131,0C1097.1,0,1063,0,1029,0C994.3,0,960,0,926,0C891.4,0,857,0,823,0C788.6,0,754,0,720,0C685.7,0,651,0,617,0C582.9,0,549,0,514,0C480,0,446,0,411,0C377.1,0,343,0,309,0C274.3,0,240,0,206,0C171.4,0,137,0,103,0C68.6,0,34,0,17,0L0,0Z"></path></svg>


    <?php

        $sql = "SELECT * FROM about";
        $query = mysqli_query($connect,$sql);

        while($about = mysqli_fetch_array($query)){


      ?>
    <!-- About -->
    <div class="container-sm" style="margin-top: px;">
      <h1 class="text-center fw-bold mb-5 display-5">About</h1>
      <div class="col-sm justify-content text-center fs-5">
        <p class="col-sm"><?php echo $about['about'] ?></p>
      </div>
    </div>

    <?php } ?>
    
    

    <!-- Waves 2 -->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffd700" fill-opacity="1" d="M0,224L30,208C60,192,120,160,180,165.3C240,171,300,213,360,208C420,203,480,149,540,160C600,171,660,245,720,234.7C780,224,840,128,900,112C960,96,1020,160,1080,192C1140,224,1200,224,1260,224C1320,224,1380,224,1410,224L1440,224L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>



    <!-- Gallery -->
    <span id="gallery"></span>
   <section class="pb-5">
    <h1 class="text-center fw-bold mb-5 display-5 text-light">Gallery</h1>
     <div class="container-sm ">
       <div class="row text-center">

       <div class="card-group justify-content-evenly">
       <?php               
            $id = mysqli_query($connect,'SELECT * FROM gallery ORDER BY gallery.id');
            while ($isi = mysqli_fetch_array($id)){
                $idp = $isi['id'];
        ?>
         <div class="col-md-4 mb-5">
          <div class="card shadow-sm" style="width: 98%;">
            <img src="<?php echo $isi['gambar'] ?>" style="height:230px;" class="card-img-top" alt="">
            <div class="card-body" style="height: 200px;">
              <h5 class="card-title fw-bold text-center"><?php echo $isi['judul'] ?></h5>
              <p class="card-text"><?php echo $isi['isi'] ?></p>
            </div>
          </div>
         </div>
        <?php 
            } 
        ?>
       </div>
       </div>
     </div>
   </section>


   <!-- Waves 3 -->
   <<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffd700" fill-opacity="1" d="M0,288L17.1,282.7C34.3,277,69,267,103,240C137.1,213,171,171,206,154.7C240,139,274,149,309,144C342.9,139,377,117,411,133.3C445.7,149,480,203,514,202.7C548.6,203,583,149,617,106.7C651.4,64,686,32,720,26.7C754.3,21,789,43,823,58.7C857.1,75,891,85,926,122.7C960,160,994,224,1029,240C1062.9,256,1097,224,1131,218.7C1165.7,213,1200,235,1234,208C1268.6,181,1303,107,1337,96C1371.4,85,1406,139,1423,165.3L1440,192L1440,0L1422.9,0C1405.7,0,1371,0,1337,0C1302.9,0,1269,0,1234,0C1200,0,1166,0,1131,0C1097.1,0,1063,0,1029,0C994.3,0,960,0,926,0C891.4,0,857,0,823,0C788.6,0,754,0,720,0C685.7,0,651,0,617,0C582.9,0,549,0,514,0C480,0,446,0,411,0C377.1,0,343,0,309,0C274.3,0,240,0,206,0C171.4,0,137,0,103,0C68.6,0,34,0,17,0L0,0Z"></path></svg>

   <!-- Contact -->
   <br id="contact"><br><br><br>
   <div class="container-sm">
    <h1 class="text-center mb-5"><b>Contact</b></h1>
    <form action="contact.php" method="POST">
      
      <input type="hidden" name="id">

      <div class="form-group mb-3">
        <label for="name">Nama</label>
        <input id="name" class="form-control" type="text" name="nama" placeholder="Masukkan Nama">
      </div>
      <div class="form-group mb-3">
        <label for="email">Alamat Email</label>
        <input id="email" class="form-control" type="email" name="email" placeholder="name@example.com">
      </div>
      <div class="form-group mb-3">
        <label for="comment">Komentar</label>
        <textarea id="comment" class="form-control" name="komentar" rows="3" placeholder="Komentar disini"></textarea>
      </div>

      <button class="btn btn-outline-primary" type="submit" name="simpan" style="width: 100%;">Kirim</button>

    </form>
   </div>



   <!-- Footer -->
   <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffd700" fill-opacity="1" d="M0,224L30,208C60,192,120,160,180,165.3C240,171,300,213,360,208C420,203,480,149,540,160C600,171,660,245,720,234.7C780,224,840,128,900,112C960,96,1020,160,1080,192C1140,224,1200,224,1260,224C1320,224,1380,224,1410,224L1440,224L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
   <footer class="footer position-relative text-center pb-3" style="background-color: ##ffd700;">
     <div class="text-center fw-bolder text-light">
       <h4>Created by © Adrian Ganteng</h4>
     </div>
   </footer>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>