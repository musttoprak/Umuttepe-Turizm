<?php
class DBConnectionModel {
	public function __construct() {
		// constructor
	}

	public function mysqlConn() {
		$db = 'umuttepe_turizm';
		$server = "localhost";
		$username = "root";
		$password = "";
		$link_mysql = mysqli_connect($server, $username, $password, $db);
		if (mysqli_connect_errno()) {
			die(print_r("Bağlantı Hatası: " . mysqli_connect_errno(), true));
		}
		mysqli_query($link_mysql, "SET NAMES 'utf8'");
		mysqli_query($link_mysql, "SET CHARACTER SET 'utf8_turkish_ci'");
		mysqli_query($link_mysql, "COLLATE 'utf8_turkish_ci'");
		return $link_mysql;
	}

	public function getUserInfo($id) {
		$link_mysql = $this->mysqlConn();

		$query = "SELECT * FROM account WHERE id=$id AND isActive = 1";
		$result = mysqli_query($link_mysql, $query);

		$data = mysqli_fetch_assoc($result);
		mysqli_close($link_mysql);

		return $data;
	}

	public function checkLogin($email, $password) {
		$link_mysql = $this->mysqlConn();

		$email = mysqli_real_escape_string($link_mysql, $email);
		$password = mysqli_real_escape_string($link_mysql, $password);

		$query = "SELECT id, email, fullName FROM account WHERE email = '$email' AND password = '$password' AND isActive = 1";
		$result = mysqli_query($link_mysql, $query);

		if ($result && mysqli_num_rows($result) == 1) {
			return mysqli_fetch_assoc($result);
		} else {
			return false;
		}

		mysqli_close($link_mysql);
	}


	public function updateUserPassword($id, $newPassword) {
		$link_mysql = $this->mysqlConn();

		$query = "UPDATE account SET password = '$newPassword' WHERE id = $id";
		$result = mysqli_query($link_mysql, $query);

		if ($result) {
			return true;
		} else {
			return false;
		}
		mysqli_close($link_mysql);
	}


	public function deleteAccount($id){
		$link_mysql = $this->mysqlConn();

		$query = "UPDATE account SET isActive = 0 WHERE id = $id";
		$result = mysqli_query($link_mysql, $query);

		if ($result) {
			return true;
		} else {
			return false;
		}
		mysqli_close($link_mysql);
	}
}
