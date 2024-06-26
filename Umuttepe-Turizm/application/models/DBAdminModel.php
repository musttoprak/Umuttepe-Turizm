<?php

class DBAdminModel
{

	public function mysqlConn()
	{
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


	public function changePass($id,$oldPass,$newPass){
		$link_mysql = $this->mysqlConn();
		$count_query = "SELECT * FROM admin WHERE id = $id";
		$count_result = mysqli_query($link_mysql, $count_query);
		$result = mysqli_fetch_assoc($count_result);
		if ($result['password'] == $oldPass){
			$link_mysql = $this->mysqlConn();
			$count_query = "UPDATE admin SET password = '$newPass' WHERE id = $id";
			if (mysqli_query($link_mysql, $count_query)){
				$count_query = "SELECT * FROM admin WHERE id = $id";
				$count_result = mysqli_query($link_mysql, $count_query);
				$result = mysqli_fetch_assoc($count_result);
				return $result;
			}
		}
		return false;
	}
	public function updateProfil($id,$name,$surname,$email,$tel){
		$link_mysql = $this->mysqlConn();
		$count_query = "UPDATE admin SET name = '$name',surname = '$surname',email = '$email',tel = '$tel' WHERE id = $id";

		return mysqli_query($link_mysql, $count_query);
	}
	public function getProfil($email,$pass){
		$link_mysql = $this->mysqlConn();
		$count_query = "SELECT * FROM admin WHERE email = '$email' AND password = '$pass'";
		$count_result = mysqli_query($link_mysql, $count_query);
		return mysqli_fetch_assoc($count_result);
	}

	public function getBildirim(){
		$link_mysql = $this->mysqlConn();
		$count_query = "SELECT * FROM contact ";
		$count_result = mysqli_query($link_mysql, $count_query);
		$contacts = array();
		while ($row = mysqli_fetch_assoc($count_result)) {
			$contacts[] = $row;
		}
		return $contacts;
	}

	public function addRoute($fromCityId,$toCityId,$departureTime,$arrivalTime,$price,$busPlateCode){
		$link_mysql = $this->mysqlConn();
		$count_query = "INSERT INTO routes (from_city_id,to_city_id,departure_time,arrival_time,price,bus_plate_code) VALUES ($fromCityId,$toCityId,'$departureTime','$arrivalTime',$price,'$busPlateCode')";

		return mysqli_query($link_mysql, $count_query);
	}

	public function updateRoute($id, $fromCityId, $toCityId, $departureTime, $arrivalTime, $price, $busPlateCode)
	{
		$link_mysql = $this->mysqlConn();
		$count_query = "UPDATE routes SET from_city_id = $fromCityId,to_city_id = $toCityId,departure_time = '$departureTime',arrival_time = '$arrivalTime', price= $price,bus_plate_code = '$busPlateCode' WHERE id = $id";

		return mysqli_query($link_mysql, $count_query);
	}


	public function getRoutes()
	{
		$link_mysql = $this->mysqlConn();

		$count_query = "SELECT r.*,fromCity.name as from_city_name,toCity.name as to_city_name FROM routes as r INNER JOIN cities as fromCity on fromCity.id = r.from_city_id INNER JOIN cities as toCity on toCity.id = r.to_city_id";
		$count_result = mysqli_query($link_mysql, $count_query);
		$routes = array();
		while ($row = mysqli_fetch_assoc($count_result)) {
			$routes[] = $row;
		}
		return $routes;
	}

	public function getCities()
	{
		$link_mysql = $this->mysqlConn();

		$count_query = "SELECT * FROM cities";
		$count_result = mysqli_query($link_mysql, $count_query);
		$cities = array();
		while ($row = mysqli_fetch_assoc($count_result)) {
			$cities[] = $row;
		}
		return $cities;
	}

	public function addTarife($name, $sale)
	{
		$link_mysql = $this->mysqlConn();
		$count_query = "INSERT INTO tarife (name,sale) VALUES ('$name',$sale)";

		return mysqli_query($link_mysql, $count_query);
	}

	public function addCity($name, $plate_code)
	{
		$link_mysql = $this->mysqlConn();
		$count_query = "INSERT INTO cities (name,plate_code) VALUES ('$name',$plate_code)";

		return mysqli_query($link_mysql, $count_query);
	}

	public function deleteTarife($id)
	{
		$link_mysql = $this->mysqlConn();
		$count_query = "DELETE FROM tarife WHERE id = $id";

		return mysqli_query($link_mysql, $count_query);
	}

	public function deleteCity($id)
	{
		$link_mysql = $this->mysqlConn();
		$count_query = "DELETE FROM cities WHERE id = $id";

		return mysqli_query($link_mysql, $count_query);
	}

	public function updateTarife($id, $name, $sale)
	{
		$link_mysql = $this->mysqlConn();
		$count_query = "UPDATE tarife SET name = '$name', sale= $sale WHERE id = $id";

		return mysqli_query($link_mysql, $count_query);
	}

	public function getTarifeler()
	{
		$link_mysql = $this->mysqlConn();

		$count_query = "SELECT * FROM tarife";
		$count_result = mysqli_query($link_mysql, $count_query);
		$tarifeler = array();
		while ($row = mysqli_fetch_assoc($count_result)) {
			$tarifeler[] = $row;
		}
		return $tarifeler;
	}

	public function getAccounts()
	{
		$link_mysql = $this->mysqlConn();

		$count_query = "SELECT * FROM account";
		$count_result = mysqli_query($link_mysql, $count_query);
		$accounts = array();
		while ($row = mysqli_fetch_assoc($count_result)) {
			$accounts[] = $row;
		}
		return $accounts;
	}

	public function getMainData()
	{
		$link_mysql = $this->mysqlConn();
		$data = array();

		$count_query = "SELECT COUNT(*) AS ticket_count FROM tickets WHERE DATE(created_at) = CURDATE();";
		$count_result = mysqli_query($link_mysql, $count_query);
		$row = mysqli_fetch_assoc($count_result);
		$data['todayTicketCount'] = $row['ticket_count'];

		$count_query = "SELECT COUNT(*) as count FROM tickets";
		$count_result = mysqli_query($link_mysql, $count_query);
		$row = mysqli_fetch_assoc($count_result);
		$data['ticketCount'] = $row['count'];

		$count_query = "SELECT COUNT(*) as count FROM tickets where status = 3";
		$count_result = mysqli_query($link_mysql, $count_query);
		$row = mysqli_fetch_assoc($count_result);
		$data['rezerveCount'] = $row['count'];

		$count_query = "SELECT COUNT(*) as count FROM bus_routes";
		$count_result = mysqli_query($link_mysql, $count_query);
		$row = mysqli_fetch_assoc($count_result);
		$data['seferCount'] = $row['count'];

		$count_query = "SELECT COUNT(*) as count FROM cities";
		$count_result = mysqli_query($link_mysql, $count_query);
		$row = mysqli_fetch_assoc($count_result);
		$data['sehirCount'] = $row['count'];

		$count_query = "SELECT COUNT(*) as count FROM tickets where status = 5";
		$count_result = mysqli_query($link_mysql, $count_query);
		$row = mysqli_fetch_assoc($count_result);
		$data['ticketIptalCount'] = $row['count'];

		$count_query = "SELECT SUM(price) AS total_price FROM tickets;";
		$count_result = mysqli_query($link_mysql, $count_query);
		$row = mysqli_fetch_assoc($count_result);
		$data['toplamGelir'] = $row['total_price'];


		$count_query = "SELECT
							SUM(CASE WHEN DAYOFWEEK(created_at) = 1 THEN 1 ELSE 0 END) AS Pazartesi,
							SUM(CASE WHEN DAYOFWEEK(created_at) = 2 THEN 1 ELSE 0 END) AS Salı,
							SUM(CASE WHEN DAYOFWEEK(created_at) = 3 THEN 1 ELSE 0 END) AS Çarşamba,
							SUM(CASE WHEN DAYOFWEEK(created_at) = 4 THEN 1 ELSE 0 END) AS Perşembe,
							SUM(CASE WHEN DAYOFWEEK(created_at) = 5 THEN 1 ELSE 0 END) AS Cuma,
							SUM(CASE WHEN DAYOFWEEK(created_at) = 6 THEN 1 ELSE 0 END) AS Cumartesi,
							SUM(CASE WHEN DAYOFWEEK(created_at) = 7 THEN 1 ELSE 0 END) AS Pazar
						FROM
							tickets
						WHERE
							YEARWEEK(created_at) = YEARWEEK(NOW());";
		$count_result = mysqli_query($link_mysql, $count_query);
		$haftalikAnaliz = array();
		while ($row = mysqli_fetch_assoc($count_result)) {
			$haftalikAnaliz[] = $row;
		}
		$data['haftalıkAnaliz'] = $haftalikAnaliz;


		$count_query = "SELECT CONCAT_WS('-', c1.name, c2.name) AS route,COUNT(*) AS ticket_count
							FROM
								tickets AS t
							INNER JOIN
								bus_routes AS br ON t.bus_route_id = br.id
							INNER JOIN
								routes AS r ON br.routes_id = r.id
							INNER JOIN
								cities AS c1 ON r.from_city_id = c1.id
							INNER JOIN
								cities AS c2 ON r.to_city_id = c2.id
							GROUP BY
								br.routes_id
							ORDER BY
								ticket_count DESC
							LIMIT
								7;";
		$count_result = mysqli_query($link_mysql, $count_query);
		$topSeferler = array();
		while ($row = mysqli_fetch_assoc($count_result)) {
			$topSeferler[] = $row;
		}
		$data['topSeferler'] = $topSeferler;

		return $data;
	}


}

