<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
		  integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
		  crossorigin="anonymous" referrerpolicy="no-referrer"/>
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
		  integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
		  crossorigin="anonymous" referrerpolicy="no-referrer"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


	<title>Document</title>
	<style>
		.form-control {
			padding: 15px;
		}

		.kutular {
			box-shadow: 5px 7px #888888;
			border: 2px solid teal;
			border-radius: 10px;
			padding: 16px;
			margin-bottom: 15px;

		}

		.l-radio {
			padding: 6px;
			border-radius: 50px;
			display: inline-flex;
			cursor: pointer;
			transition: background 0.2s ease;
			margin: 8px 0;
			-webkit-tap-highlight-color: transparent;
		}

		.l-radio:hover,
		.l-radio:focus-within {
			background: rgba(159, 159, 159, 0.1);
		}

		.l-radio input {
			vertical-align: middle;
			width: 20px;
			height: 20px;
			border-radius: 10px;
			background: none;
			border: 0;
			box-shadow: inset 0 0 0 1px #9F9F9F;
			box-shadow: inset 0 0 0 1.5px #9F9F9F;
			appearance: none;
			padding: 0;
			margin: 0;
			transition: box-shadow 150ms cubic-bezier(0.95, 0.15, 0.5, 1.25);
			pointer-events: none;
		}

		.l-radio input:focus {
			outline: none;
		}

		.l-radio input:checked {
			box-shadow: inset 0 0 0 6px darkgreen;
		}

		.l-radio span {
			vertical-align: middle;
			display: inline-block;
			line-height: 20px;
			padding: 0 8px;
		}

		.month {
			width: 100%;
			border: 1px solid grey;
			border-radius: 5px;
			padding: 6px;
			margin-right: 5px;
		}

		strong {
			font-size: 18px;
		}

		.sefer-p {
			margin-left: 5px;
			font-size: 18px;
		}

		.sefer-footer {
			background-color: #000000;
			height: 30%;
		}

		.sefer-kutu {
			border-top-left-radius: 10px;
			border-top-right-radius: 10px;
		}

		.sefer-suresi {
			background-color: gray;
			border: 1px solid teal;
			border-bottom-left-radius: 10px;
			border-bottom-right-radius: 10px;
		}

		.custom-buttonrez {
			margin-top: 5px;
			width: 100%;
			padding: 20px;
			background-color: gray;
			/* Yeşil renk */
			color: white;
			padding: 10px;
			border: none;
			border-radius: 5px;
			display: flex;
			justify-content: space-between;
			align-items: center;
			transition: transform 0.3s, box-shadow 0.3s;
		}

		.custom-buttonrez:hover {
			transform: scale(1.05);
			background-color: steelblue;
		}

		.custom-buttonrez i {
			margin-right: 10px;

		}

		.custom-buttonrez span {
			flex-grow: 1;
			text-align: center;

		}

		.custom-buttonrez .right-arrow-icon {
			margin-left: 10px;
		}

		.custom-button {
			margin-top: 5px;
			width: 100%;
			padding: 20px;
			background-color: #4CAF50;
			/* Yeşil renk */
			color: white;
			padding: 10px;
			border: none;
			border-radius: 5px;
			display: flex;
			justify-content: space-between;
			align-items: center;
			transition: transform 0.3s, box-shadow 0.3s;
		}

		.custom-button:hover {
			transform: scale(1.05);
			/* Büyüklük oranını artırır */


		}

		.custom-button i {
			margin-right: 10px;

		}

		.custom-button span {
			flex-grow: 1;
			text-align: center;

		}

		.custom-button .right-arrow-icon {
			margin-left: 10px;
		}

		.bus-seat.active {
			margin-right: 5px;
			width: 40px;
			height: 40px;
			background: url(https://i.imgur.com/lXv7u3Y.png);
			color: white;
			background-repeat: no-repeat;
			/* Tekrar etme */
			background-size: cover;
			display: flex;
			align-items: center;
			justify-content: center;
		}


		.bus-seat.active span {
			color: white;
		}

		.bus-row {
			width: 100%;

		}

		.modal-confirm {
			color: #636363;

			margin: auto;
			position: fixed;
			top: 20%;
			/* Sayfanın yüzde 40'ında başlat */
			left: 40%;

			z-index: 9999;
			/* Modal pencerenin diğer elemanların üzerine gelmesi için */
		}

		.modal-confirm .modal-content {
			padding: 20px;
			border-radius: 5px;
			border: none;
		}

		.modal-confirm .modal-header {
			border-bottom: none;
			position: relative;
		}

		.modal-confirm h4 {
			text-align: center;
			font-size: 26px;
			margin: 30px 0 -15px;
		}

		.modal-confirm .form-control,
		.modal-confirm .btn {
			min-height: 40px;
			border-radius: 3px;
		}

		.modal-confirm .close {
			position: absolute;
			top: -5px;
			right: -5px;
		}

		.modal-confirm .modal-footer {
			border: none;
			text-align: center;
			border-radius: 5px;
			font-size: 13px;
		}

		.modal-confirm .icon-box {
			color: #fff;
			position: absolute;
			margin: 0 auto;
			left: 0;
			right: 0;
			top: -70px;
			width: 95px;
			height: 95px;
			border-radius: 50%;
			z-index: 9;
			background: #ef513a;
			padding: 15px;
			text-align: center;
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
		}

		.modal-confirm .icon-box i {
			font-size: 56px;
			position: relative;
			top: 4px;
		}

		.modal-confirm .btn {
			color: #fff;
			border-radius: 4px;
			background: #ef513a;
			text-decoration: none;
			transition: all 0.4s;
			line-height: normal;
			border: none;
		}

		.modal-confirm .btn:hover,
		.modal-confirm .btn:focus {
			background: #da2c12;
			outline: none;
		}


		@media (max-width: 768px) {
			.otobus {
				overflow-x: auto;
				/* Sağa doğru kaydırma için */
				white-space: nowrap;
				/* Satır atlamayı engelle */
				width: 100%;
				/* Genişliği 100% olarak ayarla */
			}

			.modal-confirm {
				color: #636363;
				margin: auto;
				position: fixed;
				top: 20%;
				/* Sayfanın yüzde 40'ında başlat */
				left: 0%;
				width: 100%;
				z-index: 9999;
				/* Modal pencerenin diğer elemanların üzerine gelmesi için */
			}


		}
	</style>
</head>

<body>
<div class="container" style="margin-top: 130px;">
	<div class="row">
		<div class="col-lg-4">
			<!-- SEFER BİLGİLERİ KUTUSU  -->
			<div class="kutular" style="padding: 6px; !important">
				<div class="row" style="padding: 10px;">
					<div class="col-lg-6 col-sm-12 ">
						<div style="display:flex; flex-direction:row;">
							<i class="fa-solid fa-bus"
							   style="color: #071327; font-size: 20px; margin-top:5px; margin-right:5px;"></i>
							<h4 style="margin-top:3px;">Gidiş-Sefer Bilgileri</h4>

						</div>

					</div>
					<div class="col-lg-6 col-sm-12">
						<img src="assets/img/umuttepelogo6.png" alt="kartlar" style="width: 100%; height:100%;">
					</div>
				</div>
				<div style="display:flex; flex-direction:row; padding-left: 10px; padding-right: 10px;">
					<label for="kalkis"><Strong>Kalkış : </Strong> </label>
					<p id="kalkis" class="sefer-p" style="margin-left: 6px;">
						<?= $data['busRoute']['from_city_name'] ?>
					</p>
				</div>
				<div style="display:flex; flex-direction:row; padding-left: 10px; padding-right: 10px;">
					<label for="kalkis"><Strong>Varış : </Strong> </label>
					<p id="kalkis" class="sefer-p" style="margin-left: 6px;">
						<?= $data['busRoute']['to_city_name'] ?>
					</p>
				</div>
				<div style="display:flex; flex-direction:row; padding-left: 10px; padding-right: 10px;">
					<label for="kalkis"><Strong>Firma : </Strong> </label>
					<p id="kalkis" class="sefer-p" style="margin-left: 6px;">Umuttepe Turizm</p>
				</div>
				<div style="display:flex; flex-direction:row; padding-left: 10px; padding-right: 10px;">
					<label for="kalkis"><Strong>Tarih : </Strong> </label>
					<p id="kalkis" class="sefer-p" style="margin-left: 6px;">
						<?php
						function tarihFormat($gTarih)
						{
							$datetime = new DateTime($gTarih);
							$aylar = array(
								'01' => 'Ocak',
								'02' => 'Şubat',
								'03' => 'Mart',
								'04' => 'Nisan',
								'05' => 'Mayıs',
								'06' => 'Haziran',
								'07' => 'Temmuz',
								'08' => 'Ağustos',
								'09' => 'Eylül',
								'10' => 'Ekim',
								'11' => 'Kasım',
								'12' => 'Aralık'
							);
							$gunler = array(
								'Pazartesi',
								'Salı',
								'Çarşamba',
								'Perşembe',
								'Cuma',
								'Cumartesi',
								'Pazar'
							);

							$tarih = $datetime->format('d') . ' ' . $aylar[$datetime->format('m')] . ' ' . $datetime->format('Y');
							$gun = $gunler[date('N', strtotime($gTarih)) - 1];

							return $tarih . ', ' . $gun;
						}

						echo tarihFormat($data['busRoute']['departure_date']);
						?>
					</p>
				</div>
				<div style="display:flex; flex-direction:row; padding-left: 10px; padding-right: 10px;">
					<label for="kalkis"><Strong>Saat : </Strong> </label>
					<p id="kalkis" class="sefer-p" style="margin-left: 6px;">
						<?php
						$departure_time = strtotime($data['busRoute']['departure_time']);
						$formatted_time = date('H:i', $departure_time); // Saat ve dakika formatını alır
						echo $formatted_time; // Biçimlendirilmiş saat bilgisini yazdırır
						?>
					</p>
				</div>

				<div style="display:flex; flex-direction:row; padding-left: 10px; padding-right: 10px;">
					<label for="kalkis"><Strong>Koltuk : </Strong> </label>
					<p id="kalkis" class="sefer-p" style="margin-left: 6px;">
						<?php
						foreach ($data['seatNumbers'] as $number) {
						$parts = explode('-', $number);
						?>
					<div class="aisle">
						<div class="bus-row">
							<div class="bus-seat active">
										<span>
											<?php echo $parts[0]; ?>
										</span>
							</div>
						</div>
					</div>

					<?php } ?>

					</p>
				</div>
				<div style="display: flex; flex-direction: row; justify-content: start; align-items: center;">

					<i class="fa-regular fa-clock" style="color: #000000; font-size:20px; margin-left:7px;margin-right:7px;"></i>
					<strong>Tahmini Sefer Süresi : </strong>
					<p class="sefer-p" style="margin-left: 6px;">
						<?php
						$departure_time_str = $data['busRoute']['departure_date'] . ' ' . $data['busRoute']['departure_time'];
						$arrival_time_str = $data['busRoute']['departure_date'] . ' ' . $data['busRoute']['arrival_time'];

						$departure_timestamp = strtotime($departure_time_str);
						$arrival_timestamp = strtotime($arrival_time_str);

						if ($arrival_timestamp < $departure_timestamp) {
							$arrival_timestamp = strtotime('+1 day', $arrival_timestamp);
						}

						$sefer_suresi_saniye = $arrival_timestamp - $departure_timestamp;

						$sefer_suresi_saat = $sefer_suresi_saniye / 3600;
						echo $sefer_suresi_saat . " saat ";
						?>
					</p>
				</div>
				<hr>
				<div style="display: flex; flex-direction: row; justify-content: start; align-items: center; padding-left: 10px; padding-right: 10px;">
					<strong style="font-size: medium">İptal Koşulları</strong>
					<i class="fa-solid fa-circle-exclamation"
					   style="color: #000000; font-size: 16px; margin-left:7px;"></i>
				</div>
				<div style="padding-left: 10px; padding-right: 10px;">
					<p style="font-size: small">Biletinizi yolculuğunuzdan 6 saat öncesine kadar ücretsiz iptal edebilirsiniz.</p>
				</div>
			</div>
			<?php
			if (isset($data['id2'])) {
				?>
				<div class="kutular" style="padding: 6px; !important">
					<div class="row" style="padding: 10px;">
						<div class="col-lg-6 col-sm-12 ">
							<div style="display:flex; flex-direction:row;">
								<i class="fa-solid fa-bus"
								   style="color: #071327; font-size: 20px; margin-top:5px; margin-right:5px;"></i>
								<h4 style="margin-top:3px;">Dönüş-Sefer Bilgileri</h4>

							</div>

						</div>
						<div class="col-lg-6 col-sm-12">
							<img src="assets/img/umuttepelogo6.png" alt="kartlar" style="width: 100%; height:100%;">
						</div>
					</div>
					<div style="display:flex; flex-direction:row; padding-left: 10px; padding-right: 10px;">
						<label for="kalkis"><Strong>Kalkış : </Strong> </label>
						<p id="kalkis" class="sefer-p" style="margin-left: 6px;">
							<?= $data['busRoute2']['from_city_name'] ?>
						</p>
					</div>
					<div style="display:flex; flex-direction:row; padding-left: 10px; padding-right: 10px;">
						<label for="kalkis"><Strong>Varış : </Strong> </label>
						<p id="kalkis" class="sefer-p" style="margin-left: 6px;">
							<?= $data['busRoute2']['to_city_name'] ?>
						</p>
					</div>
					<div style="display:flex; flex-direction:row; padding-left: 10px; padding-right: 10px;">
						<label for="kalkis"><Strong>Firma : </Strong> </label>
						<p id="kalkis" class="sefer-p" style="margin-left: 6px;">Umuttepe Turizm</p>
					</div>
					<div style="display:flex; flex-direction:row; padding-left: 10px; padding-right: 10px;">
						<label for="kalkis"><Strong>Tarih : </Strong> </label>
						<p id="kalkis" class="sefer-p" style="margin-left: 6px;">
							<?php
							echo tarihFormat($data['busRoute2']['departure_date']);
							?>
						</p>
					</div>
					<div style="display:flex; flex-direction:row; padding-left: 10px; padding-right: 10px;">
						<label for="kalkis"><Strong>Saat : </Strong> </label>
						<p id="kalkis" class="sefer-p" style="margin-left: 6px;">
							<?php
							$departure_time = strtotime($data['busRoute2']['departure_time']);
							$formatted_time = date('H:i', $departure_time); // Saat ve dakika formatını alır
							echo $formatted_time; // Biçimlendirilmiş saat bilgisini yazdırır
							?>
						</p>
					</div>

					<div style="display:flex; flex-direction:row; padding-left: 10px; padding-right: 10px;">
						<label for="kalkis"><Strong>Koltuk : </Strong> </label>
						<p id="kalkis" class="sefer-p" style="margin-left: 6px;">
							<?php
							foreach ($data['seatNumbers2'] as $number) {
							$parts = explode('-', $number);
							?>
						<div class="aisle">
							<div class="bus-row">
								<div class="bus-seat active">
										<span>
											<?php echo $parts[0]; ?>
										</span>
								</div>
							</div>
						</div>

						<?php } ?>

						</p>
					</div>
					<div style="display: flex; flex-direction: row; justify-content: start; align-items: center;">
						<i class="fa-regular fa-clock" style="color: #000000; font-size:20px; margin:7px;"></i>
						<strong>Tahmini Sefer Süresi : </strong>
						<p class="sefer-p" style="margin-left: 6px;">
							<?php
							$departure_time_str = $data['busRoute']['departure_date'] . ' ' . $data['busRoute']['departure_time'];
							$arrival_time_str = $data['busRoute']['departure_date'] . ' ' . $data['busRoute']['arrival_time'];

							$departure_timestamp = strtotime($departure_time_str);
							$arrival_timestamp = strtotime($arrival_time_str);

							if ($arrival_timestamp < $departure_timestamp) {
								$arrival_timestamp = strtotime('+1 day', $arrival_timestamp);
							}

							$sefer_suresi_saniye = $arrival_timestamp - $departure_timestamp;

							$sefer_suresi_saat = $sefer_suresi_saniye / 3600;
							echo $sefer_suresi_saat . " saat ";
							?>
						</p>
					</div>
					<hr>
					<div style="display: flex; flex-direction: row; justify-content: start; align-items: center; padding-left: 10px; padding-right: 10px;">
						<strong style="font-size: medium">İptal Koşulları</strong>
						<i class="fa-solid fa-circle-exclamation"
						   style="color: #000000; font-size: 16px; margin-left:7px;"></i>
					</div>
					<div style="padding-left: 10px; padding-right: 10px;">
						<p style="font-size: small">Biletinizi yolculuğunuzdan 6 saat öncesine kadar ücretsiz iptal edebilirsiniz.</p>
					</div>
				</div>
				<?php
			}
			?>
			<!-- SEFER BİLGİLERİ KUTUSU END  -->
		</div>
		<div class="col-lg-8">
			<form method="post" action="buying">
				<!-- İLETİŞİM BİLGİLERİ KUTUSU -->
				<div class="kutular">
					<div style="display:flex; flex-direction:row">
						<i class="fa-solid fa-address-card"
						   style="color: #071327; font-size: 15px; margin-top:5px; margin-right:5px;"></i>
						<h6 style="margin-top:3px;">İletişim Bilgileri</h6>
					</div>

					<div class="row">
						<div class="col-lg-6 col-sm-12 form-group">
							<label for="account-fn">E-Posta Adresi</label>
							<input class="form-control" type="text" id="account-fn" name="contactFullName" required>
						</div>
						<div class="col-lg-6 col-sm-12 form-group">
							<label for="account-fn">Telefon Numaranız</label>
							<input class="form-control" type="text" id="account-fn" name="contactTel"
								   placeholder="(5xx) xxx xx xx " required>
						</div>

					</div>
					<p>Online bilet bilgileriniz e-posta ve SMS yoluyla iletilecek.</p>
					<hr>
					<div style="display:flex; flex-direction:row">
						<input type="checkbox" style="margin-right: 4px;">
						<p>Seyahat bilgilendirmeleri, fırsat ve kampanyalardan <b>Rıza Metni</b> kapsamında haberdar
							olmak istiyorum.</p>
					</div>
				</div>
				<!-- İLETİŞİM BİLGİLERİ KUTUSU END -->

				<!-- GİDİŞ YOLCU BİLGİLERİ KUTUSU -->
				<div class="kutular">
					<div style="display:flex; flex-direction:row">
						<i class="fa-solid fa-user"
						   style="color: #071327; font-size: 15px; margin-top:5px; margin-right:5px;"></i>
						<h6 style="margin-top:3px;">Yolcu Bilgileri </h6>
					</div>
					<?php
					for ($i = 0; $i < count($data['seatNumbers']); $i++) {
						$number = $data['seatNumbers'][$i];
						$number2 = isset($data['seatNumbers2']) ? $data['seatNumbers2'][$i] : "";
						$parts = explode('-', $number);
						$parts2 = explode('-', $number2);
						?>
						<div class="row">
							<div class="col-lg-6 col-sm-12">
								<h6>(Gidiş koltuk: <?php echo $parts[0]; ?> <?= $parts2[0] != "" ? "Dönüş koltuk: $parts2[0])" : ")" ?></h6>
							</div>
							<div class="col-lg-6 col-sm-12" style="text-align: right;">
								<p id="kisifiyat<?= $number ?>" style="margin-top: 5px; color:grey; font-size:16px;">
									<?php
									$seatNumbers = $data['seat_numbers'];
									$totalprice = $data['totalPrice1'];
									$seatNumberArray = explode(',', $seatNumbers);
									$numberOfSeats = count($seatNumberArray);
									$personprice = ($totalprice / $numberOfSeats) * (isset($data['seatNumbers2']) ? 2 : 1);
									?>
									<?= $personprice ?> TL
								</p>

							</div>

						</div>

						<div class="row">
							<input type="hidden" name="passengerName<?= $number ?>">
							<div class="col-lg-6 col-sm-12 form-group">
								<label for="account-fn">Ad</label>
								<input class="form-control" type="text" id="account-fn"
									   name="passengerName<?= $number ?>" required>
							</div>
							<div class="col-lg-6 col-sm-12 form-group">
								<label for="account-fn">Soyad</label>
								<input class="form-control" type="text" id="account-fn"
									   name="passengerSurname<?= $number ?>" placeholder="" required>
							</div>
							<div class="col-lg-6 col-sm-12 form-group">
								<label for="account-fn">T.C. Kimlik No</label>
								<input class="form-control" type="text" id="account-fn" name="passengerTc<?= $number ?>"
									   required>
							</div>

							<div class="col-lg-6 col-sm-12 form-group">
								<label for="passengerBirthdayGidis<?= $number ?>"> Doğum Tarihi </label>
								<input class="passengerBirthdayGidis form-control" type="date"
									   id="passengerBirthdayGidis<?= $number ?>"
									   name="passengerBirthdayGidis<?= $number ?>"
									   value="">
							</div>
							<div class="col-lg-6 col-sm-12 form-group">
								<label for="passengerTarife<?= $number ?>">Tarife</label>
								<input type="hidden" name="tarifeler" value="<?= htmlspecialchars(json_encode($data['tarifeler'])) ?>">
								<select data-content="passengerTarife<?= $number ?>" id="passengerTarife" name="<?= $number ?>"
										class="month form-control"
										onchange="kontrolEt()">
									<?php
									foreach ($data['tarifeler'] as $tarife) {
										?>
										<option value="<?= $tarife['id'] ?>"><?= $tarife['name'] ?></option>
										<?php
									}
									?>
								</select>
							</div>

							<!--Error Dialog-->
							<div id="myModal" class="modal col-lg-12 col-md-12 col-sm-12">
								<div class="modal-dialog modal-confirm">
									<div class="modal-content">
										<div class="modal-header">
											<div class="icon-box">
												<i class="material-icons">&#xE5CD;</i>
											</div>
											<h4 class="modal-title">HATA!</h4>
										</div>
										<div class="modal-body">
											<p style="font-size: 17px;" class="text-center">Seçtiğiniz tarife ile
												yaşınız uyuşmuyor.</p>
										</div>
										<div class="modal-footer">
											<button class="btn btn-danger btn-block" data-dismiss="modal">Kapat</button>
										</div>
									</div>
								</div>
							</div>
							<!--Error Dialog End-->

														<!--Error Dialog-->
														<div id="myModaldtarihi" class="modal col-lg-12 col-md-12 col-sm-12">
								<div class="modal-dialog modal-confirm">
									<div class="modal-content">
										<div class="modal-header">
											<div class="icon-box">
												<i class="material-icons">&#xE5CD;</i>
											</div>
											<h4 class="modal-title">HATA!</h4>
										</div>
										<div class="modal-body">
											<p style="font-size: 17px;" class="text-center">Lütfen Doğum Tarihinizi Seçiniz.</p>
										</div>
										<div class="modal-footer">
											<button class="btn btn-danger btn-block" data-dismiss="modal">Kapat</button>
										</div>
									</div>
								</div>
							</div>
							<!--Error Dialog End-->

							<div class="col-lg-6 col-sm-12 form-group">
								<label for="cinsiyet">Cinsiyet</label>
								<div id="cinsiyet">
									<label for="f-option<?= $number ?>" class="l-radio">
										<input type="radio" id="f-option<?= $number ?>"
											   name="passengeSelector<?= $number ?>" tabindex="1" checked>
										<span><?= strtoupper($parts[1]) ?></span>
									</label>
								</div>
							</div>

						</div>
						<p>Servis rezervasyonu için biletinizi aldıktan sonra otobüs firması ile görüşebilirsiniz.</p>
						<hr>

					<?php } ?>
				</div>
				<!-- GİDİŞ YOLCU BİLGİLERİ KUTUSU END -->

				<!-- ÖDEME BİLGİLERİ KUTUSU -->
				<div class="kutular">
					<div class="row">
						<div class="col-lg-6 col-sm-12 ">
							<div style="display:flex; flex-direction:row;">
								<i class="fa-solid fa-credit-card"
								   style="color: #071327; font-size: 15px; margin-top:5px; margin-right:5px;"></i>
								<h6 style="margin-top:3px; margin-right: 10px;">Ödeme Bilgileri</h6>

							</div>

						</div>
						<div class="col-lg-6 col-sm-12" style="justify-content: space-around;">
							<img src="https://s3.eu-central-1.amazonaws.com/static.obilet.com/images/web/cards-782.png"
								 alt="kartlar" style="width: 100%; height:100%;">
						</div>
					</div>


					<p style="margin-top: 5px; color:black;">Lütfen Kart bilgilerinizi giriniz.</p>
					<div class="row">
						<div class="col-lg-6 col-sm-12 form-group">
							<label for="account-fn">Kart Numarası</label>
							<input class="form-control" type="text" id="account-fn" name="cartNo"
								   placeholder="XXXX XXXX XXXX XXXX" required>
						</div>
						<div class="col-lg-6 col-sm-12 form-group">
							<label for="account-fn">Ad - Soyad</label>
							<input class="form-control" type="text" id="account-fn" name="cartFullName" required>
						</div>
						<div class="col-lg-6 col-sm-12 form-group">
							<label for="aylar">Son Kullanma Tarihi</label>
							<div style="display: flex; flex-direction:row">
								<select id="aylar" name="aylar" class="month">
									<option value="Ay Seçiniz" selected>Ay Seçiniz</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
								</select>
								<select id="yıllar" name="yıllar" class="month">
									<option value="Yıl Seçiniz" selected>Yıl Seçiniz</option>
									<option value="2024">2024</option>
									<option value="2025">2025</option>
									<option value="2026">2026</option>
									<option value="2027">2027</option>
									<option value="2028">2028</option>
									<option value="2029">2029</option>
									<option value="2030">2030</option>
									<option value="2031">2031</option>
									<option value="2032">2032</option>
									<option value="2033">2033</option>
									<option value="2034">2034</option>
									<option value="2035">2035</option>
								</select>
							</div>
						</div>
						<div class="col-lg-6 col-sm-12 form-group">
							<label for="account-fn">CVC</label>
							<input class="form-control" type="text" id="account-fn" name="cartCvc" placeholder="XXX"
								   required>
						</div>
					</div>
					<hr>
					<div style="display:flex; flex-direction:row">
						<input type="checkbox" style="margin-right: 4px;">
						<p>Kart Bilgilerimi Kaydet.</p>
					</div>
					<div style="display:flex; ">
						<input type="checkbox" style="margin-right: 4px; ">
						<p><b> Ön Bilgilendirme Formu'nu , Mesafeli Satış Sözleşmesi'ni </b> okudum ve onaylıyorum.
							Kişisel verilerin işlenmesine ilişkin <b> Aydınlatma Metni’ni ve Çerez Politikası
								Metni'ni
							</b> okudum. <b> Kullanım Koşulları’nı </b> kabul ediyorum.</p>
					</div>
					<div style="display:flex; flex-direction:row">
						<i class="fa-solid fa-shield-halved" style="color: darkgreen; font-size:25px; "></i>
						<p style="font-size: 15px; color:grey; margin-left:5px;">Umuttepe Turizm üzerinden yapılan
							işlemler güvenlik sertifikalarıyla korunmaktadır.</p>
					</div>
					<input type="hidden" name="id" value="<?= $data['id'] ?>">
					<?php echo isset($data['id2']) ? "<input type='hidden' name='id2' value='" . $data['id2'] . "'>	" : ""; ?>
					<input type="hidden" name="seatNumbers" value="<?= $data['seat_numbers'] ?>">
					<?php echo isset($data['id2']) ? "<input type='hidden' name='seatNumbers2' value='" . $data['seat_numbers2'] . "'>" : ""; ?>
					<input type="hidden" name="totalPrice" id="totalprice"
						   value="<?= $data['totalPrice1'] ?>">
					<?php echo isset($data['id2']) ? "<input type='hidden' name='totalPrice2' value='" . $data['totalPrice2'] . "'>" : ""; ?>
					<input type="hidden" name="operation" value="paying">
					<div class="row">
						<div class="col-lg-6 col-sm-12">
							<button class="custom-button" type="submit" name="buying" value="2">
								<i class="fas fa-shield-alt"></i>
								<div style="display: flex; flex-direction:column">
										<span id="totalpricee"> <strong>
										<?= $data['totalPrice1'] + (isset($data['id2']) ? $data['totalPrice2'] : 0) ?> TL </strong>
											  </span>
									<p style="color: white;">Güvenli ödeme yap </p>
								</div>

								<i class="fas fa-chevron-right right-arrow-icon"></i>
							</button>
						</div>
						<div class="col-lg-6 col-sm-12">
							<button class="custom-buttonrez" type="submit" name="buying" value="3">
								<i style="visibility: hidden;" class="fas fa-shield-alt"></i>
								<div style="display: flex; flex-direction:column">
										<span> <strong id="totalpricerez">
												<?= $data['totalPrice1'] + (isset($data['id2']) ? $data['totalPrice2'] : 0) ?> TL
											</strong> </span>
									<p>Rezervasyon Yap </p>
								</div>
								<i class="fas fa-chevron-right right-arrow-icon"></i>
							</button>
						</div>
					</div>
				</div>
				<!-- ÖDEME BİLGİLERİ KUTUSU END -->
			</form>
		</div>
	</div>
</div>
<script src="assets/js/buying.js"></script>
</body>
</html>
