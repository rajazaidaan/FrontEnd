<?php 
include_once('koneksi.php');
$database = new database();
if(isset($_POST['register']))
{
    $username = $_POST['username'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $email = $_POST ['email'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST ['tanggal_lahir'];
    $alamat = $_POST ['alamat'];
    $status = $_POST ['status'];
    $hobi = $_POST ['hobi'];
    if($database->register($username,$email,$password,$tempat_lahir,$tanggal_lahir,$alamat,$status,$hobi))
    {
      header('location:login.php');
    }
}

$usernameErr = $emailErr = $passwordErr = $tempat_lahirErr = $tanggal_lahirErr = $alamatErr = $statusErr = $hobiErr = "";
$username = $email = $password = $tempat_lahir = $tanggal_lahir = $alamat = $status = $hobi = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $usernameErr = "Username tidak boleh kosong";
  } else {
    $username = test_input($_POST["username"]);
  }
  
  if (empty($_POST["password"])) {
    $emailErr = "password tidak boleh kosong";
  } else {
    $email = test_input($_POST["password"]);
  }
    
  if (empty($_POST["email"])) {
    $passwordErr = "email tidak boleh kosong";
  } else {
    $password = test_input($_POST["email"]);
  }

  if (empty($_POST["tempat_lahir"])) {
    $namaErr = "tempat lahir tidak boleh kosong";
  } else {
    $nama = test_input($_POST["tempat_lahir"]);
  }

  if (empty($_POST["tanggal_lahir"])) {
    $lahirErr = "tanggal lahir tidak boleh kosong";
  } else {
    $lahir = test_input($_POST["tanggal_lahir"]);
  }

  if (empty($_POST["alamat"])) {
    $genderErr = "alamat tidak boleh kosong";
  } else {
    $gender = test_input($_POST["alamat"]);
  }

  if (empty($_POST["status"])) {
    $agamaErr = "status tidak boleh kosong";
  } else {
    $agama = test_input($_POST["status"]);
  }

  if (empty($_POST["hobi"])) {
    $pekerjaanErr = "hobi tidak boleh kosong";
  } else {
    $pekerjaan = test_input($_POST["hobi"]);
  }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}    
 
?>
<!doctype html>
<html lang="en" class="h-100">
  <head>
    <title>Register Form</title>
  </head>
<style>

.error {color: #FF0000;}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=number], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}

button:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

a:link, a:visited {
  background-color: blue;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
}

a:hover, a:active {
  background-color: green;
}
</style>

<body>

  <div>
    <h1 class="mt-5">Registrasi</h1>
    <p class="lead">Silahkan Daftarkan Identitas Anda</p>
    <p><span class="error">* wajib diisi</span></p>
    <hr/>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="form">
      <label for="username">Username</label>
      <div>
        <span class="error">* <?php echo $usernameErr;?></span>
        <input type="text" class="form-control" id="username" name="username" placeholder="Username">
      </div>
    </div>

    <div class="form">
      <label for="password">password</label>
      <div>
        <span class="error">* <?php echo $passwordErr;?></span>  
        <input type="password" class="form-control" id="password" name="password" placeholder="password">
      </div>
    </div>

    <div class="form">
    <label for="email">email</label>
    <span class="error">* <?php echo $emailErr;?></span>
    <div>
      <input type="text" class="form-control" id="email" name="email" placeholder="email">
    </div>
  </div> 
 
    <div class="form">
      <label for="tempat_lahir">tempat lahir</label><span class="error">* <?php echo $tempat_lahirErr;?></span>
      <div>
        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="tempat_lahir">
      </div>
    </div>
 
    <div class="form">
      <label for="tanggal_lahir">tanggal lahir</label>
      <span class="error">* <?php echo $tanggal_lahirErr;?></span>
      <div>
        <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="tanggal_lahir">
      </div>
    </div>  

    <div class="form">
      <label for="alamat">alamat</label>
      <span class="error">* <?php echo $alamatErr;?></span>
      <div>
        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat">
      </div>
    </div>

    <div class="form">
      <label for="status">status</label>
      <span class="error">* <?php echo $statusErr;?></span>
      <div>
        <input type="text" class="form-control" id="status" name="status" placeholder="status">
      </div>
    </div>

    <div class="form">
      <label for="hobi">hobi</label>
      <span class="error">* <?php echo $hobiErr;?></span>
      <div>
        <input type="text" class="form-control" id="hobi" name="hobi" placeholder="hobi">
      </div>
    </div>
  
  <div class="form">
  <a href="login.php">Login</a>
  <button type="submit" name="register">Register</button>
  </div>

  
</form>
  </div>
</main>
 
<footer class="footer mt-auto py-3">
  <div class="container">
    <span class="text-muted">Mobile Legends BANG BANG</span>
  </div>
</footer>
</body>
</html>