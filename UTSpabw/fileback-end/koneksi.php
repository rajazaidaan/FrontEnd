<?php 
class database{
	var $host = "localhost";
	var $username = "root";
	var $password = "";
    var $email = "";
    var $tempat_lahir = "";
    var $tanggal_lahir = "";
    var $alamat = "";
    var $status = "";
    var $hobi = "";
	var $database = "profile";
	var $koneksi;
 
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
	}
 
 
	function register($username,$password,$email,$tempat_lahir,$tanggal_lahir,$status,$alamat,$hobi)
	{	
		$insert = mysqli_query($this->koneksi,"insert into registrasi values ('','$username','$email','$password','$tempat_lahir','$tanggal_lahir','$alamat','$status','$hobi')");
		return $insert;
	}
 
	function login($username,$password,$remember)
	{
		$query = mysqli_query($this->koneksi,"select * from registrasi where username='$username'");
		$data_user = $query->fetch_array();
		if(password_verify($password,$data_user['password']))
		{
			
			if($remember)
			{
				setcookie('username', $username, time() + (60 * 60 * 24 * 5), '/');
				setcookie('nama', $data_user['nama'], time() + (60 * 60 * 24 * 5), '/');
			}
			$_SESSION['username'] = $username;
			$_SESSION['nama'] = $data_user['nama'];
			$_SESSION['is_login'] = TRUE;
			return TRUE;
		}
	}
 
	function relogin($username)
	{
		$query = mysqli_query($this->koneksi,"select * from registrasi where username='$username'");
		$data_user = $query->fetch_array();
		$_SESSION['username'] = $username;
		$_SESSION['nama'] = $data_user['nama'];
		$_SESSION['is_login'] = TRUE;
	}
} 
 
 
?>