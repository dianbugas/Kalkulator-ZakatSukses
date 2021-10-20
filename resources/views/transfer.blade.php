<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Kalkulator Zakat</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
	<!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

    <link rel="icon" href="https://zakatsukses.org/wp-content/uploads/2019/06/cropped-ZS-Bulet-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://zakatsukses.org/wp-content/uploads/2019/06/cropped-ZS-Bulet-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="https://zakatsukses.org/wp-content/uploads/2019/06/cropped-ZS-Bulet-180x180.png" />
</head>
<body>
    <div class="container">
	<div class="home">
		<div class="text-center">
			<a href="https://zakatsukses.org/"><img src="{{asset('assets/img/logo.png')}}" class="image-logo" width="150px"></a>
		</div>
		<div class="judul-form-transaksi text-center mt-2">
			<p>Form Donasi</p>
        </div>
        <div class="judul-form-p text-center">
			<p>Donasi semudah Anda belanja Online</p>
		</div>
			<div class="row">
				<div class="col-lg-12 mt-4">
                    <div class="judul-form-jumlah text-center">
                        <p>Jumlah Donasi</p>
                    </div>
                </div>
                <div class="col-lg-12 mt-4">
                    <div class="transaksi-uang text-center">
                        @if($method == "POST")
                            <p class="uang-trasfer">Rp. {{$data['nominal']}}</p>
                        @else
                            <p>Rp. 0</p>
                        @endif
                    </div>
                </div>
                <div class="col-lg-12 mt-4">
                    <div class="rekening-transaksi text-center">
                        @if($method == "POST")
                            <p>{{$data['bank']}}</p>
                        @endif
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="rekening-transaksi-no text-center">
                        @if(($method == "POST") && ($data['bank'] == "Bank Bjb"))
                            <p>0095 3670 11100</p>
                        @elseif(($method == "POST") && ($data['bank'] == "Bank DKI"))
                            <p>705 0911 1111</p>
                        @elseif(($method == "POST") && ($data['bank'] == "Bank Mega Syariah"))
                            <p>100 0136 124</p>
                        @elseif(($method == "POST") && ($data['bank'] == "Bank Muamalat"))
                            <p>339 0111 111</p>
                        @elseif(($method == "POST") && ($data['bank'] == "BRI Syariah"))
                            <p>100 5856 333</p>
                        @elseif(($method == "POST") && ($data['bank'] == "BNI Syariah"))
                            <p>828 111 1111</p>
                        @elseif(($method == "POST") && ($data['bank'] == "Mandiri Syariah"))
                            <p>703 9797 498</p>
                        @endif
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="rekening-transaksi-no text-center">
                        <p>An. Yayasan Zakat Sukses</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="col"></div>
                    <div class="col-12">
                        <div class="card text-center card-keterangan mt-3">
                            <div class="card-body">
                            <p class="card-contact">Untuk kemudahan konsultasi dan konfirmasi <br> hubungi contact center kami di +62 822 1162 7700 atau email contact@zakatsukses.org</p>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
    </div>
    <footer class="mt-5">
        <img src="{{asset('assets/img/bolakiri.png')}}" width="200" class="float-left img-responsive">
        <img src="{{asset('assets/img/bolakanan.png')}}" width="184" class="float-right img-responsive">
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="{{asset('assets/js/accounting.js')}}"></script>
    <script src="{{asset('assets/js/hitung-zakat.js')}}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</body>
</html>
