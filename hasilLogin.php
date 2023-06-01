<html leng="en">
<meta charset="UTF-8">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>PENDAFTARAN VAKSIN COVID-19</title>
          <link rel="stylesheet" href="css/style.css">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
          <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>
<div class="wrapper">
            <div class="container text-white shadow-lg">
            <div class="img-covid text-center pb-4">
               <img src="img/virus.png" alt="">
          </div>
          <!-- MODUL 5 OOP LOGIN -->
          <?php
          include("userService.php");
          $user = new userService($_POST['email'], $_POST['password']);
               if($get_user = $user->login()) {
                    echo 'Selamat Datang';
                    echo ', Silahkan klik next untuk melanjutkan pengisian formulir!';
                    echo '<form class="form" action="index.php" method="post" id="form">
                            <input type="submit" value="> Next" name="Submit" class="btn-submit shadow">
                          </form>';
                 } else {
                         echo 'Invalid Login';
                         echo '<form class="form" action="login.php" method="post" id="form">
                         <input type="submit" value="< Return" name="Submit" class="btn-submit shadow">
                       </form>';
                         }?>

<script>
    document.getElementById("form").addEventListener("submit", function(event) {
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;

        // Lakukan validasi login di sini menggunakan PHP
        // Panggil skrip PHP yang memeriksa login (userService.php)

        // Jika login tidak valid, mencegah formulir disubmit
        if (!/* validasi login berhasil */) {
            event.preventDefault();
            alert("Invalid Login");
        }
    });
</script>
        </div>
</body>
</html>
