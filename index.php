<html leng="en">
     <head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>PENDAFTARAN VAKSIN COVID-19</title>
          <link rel="stylesheet" href="css/style.css">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
          <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
     <head>
     
     <body>
          <header>
          </header>

          <div class="wrapper">
               <div class="container shadow-lg">
               <div class="img-covid text-center pb-4">
               <img src="img/virus.png" alt="">
          </div>
                    <h2 class="container-header text-center fw-bold text-white">Formulir Pendaftaran Vaksin COVID-19</h2>
                    <form class="form text-white" action="hasil.php" method="post" id="form">
                         <div class="form-group form-book">
                              <label class="text-white fw-normal" for="nama">Nama Anda</label>
                              <input type="text" id="title" name="nama" required>
                         </div>
                         <div class="form-group form-book">
                              <label class="text-white fw-normal" for="asal">Asal Anda</label>
                              <input type="text" id="title" name="asal" required>
                         </div>
                         <br>
                         <div class="form-group form-book">
                              <label class="text-white fw-normal" for="jk">Riwayat Kesehatan</label>
                              <select class="form-select" aria-label="Default select example" name="jk" id="jk">
                                   <option selected>Pilih Riwayat Kesehatan</option>
                                   <option value="laki">Tidak pernah / sudah lama terkena covid</option>
                                   <option value="perempuan">Baru saja terkena covid</option>
                              </select>
                         </div>
                         <br>
                         <div class="form-group form-book">
                              <label class="text-white fw-normal" for="vaksinasi">Lokasi Vaksinasi</label>
                              <div class="form-check">
                                   <input class="form-check-input" type="checkbox" name="check1" value="RSND" id="flexCheckDefault">
                                   <label class="form-check-label text-white fw-normal">
                                        RSND
                                   </label>
                              </div>
                              <div class="form-check">
                                   <input class="form-check-input" type="checkbox" name="check2" value="banyumanik" id="flexCheckDefault">
                                   <label class="form-check-label text-white fw-normal">
                                        RS Banyumanik
                                   </label>
                              </div>
                              <div class="form-check">
                                   <input class="form-check-input" type="checkbox" name="check3" value="semarang" id="flexCheckDefault">
                                   <label class="form-check-label text-white fw-normal">
                                        RS Semarang
                                   </label>
                              </div>
                              <div class="form-check mb-4">
                                   <input class="form-check-input" type="checkbox" name="check4" value="ungaran" id="flexCheckDefault">
                                   <label class="form-check-label text-white fw-normal">
                                        RS Ungaran
                                   </label>
                              </div>
                              <?php
                         $queue = new SplQueue();
                         $queue->enqueue('Ardo,');
                         $queue->enqueue('Budi,');
                         $queue->enqueue('Salman,');
                         $queue->enqueue('Khila,');
                         $queue->enqueue('Nanda');

                         print("Daftar Antrian[" . sizeof($queue) . "]: ");
                         for ($i = 0; $i < sizeof($queue); $i++) {
                         print($queue[$i] . " ");
                         } ?>
                         </div>
                         <input type="submit" value="Submit" name="Submit" class="btn-submit shadow">
                    </form>
               </div>
          </div>
     </body>
</html>