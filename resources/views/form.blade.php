<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Form Donasi</title>
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
    <div class="home">
        <div class="text-center">
            <a href="https://zakatsukses.org/"><img src="{{asset('assets/img/logo.png')}}" class="image-logo" width="150px"></a>
        </div>
        <div class="judul-form text-center">
            <p>Data Donasi</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mt-5">
                    <form action="/send-wa" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="nama_lengkap" class="col-sm-4 col-form-label nama-lengkap">Nama Lengkap</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control form-nama" name="nama_lengkap" placeholder="Nama Lengkap Anda" autofocus autocomplete="off" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label email">Email</label>
                            <div class="col-sm-8">
                                <input type="email" class="form-control form-email" name="email" placeholder="Email" required autocomplete="off">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-sm-4 col-form-label phone">Phone</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">+62</span>
                                    </div>
                                    <input type="text" class="form-control" name="phone" id="phone" maxlength="12" required autocomplete="off">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="akad_donasi" class="col-sm-4 col-form-label akad-donasi">Akad Donasi</label>
                            <div class="col-sm-8">
                                @if($method == "GET")
                                <select name="akad" class="form-control">
                                    <option value="Zakat Penghasilan">Zakat Penghasilan</option>
                                    <option value="Zakat Tabungan">Zakat Tabungan</option>
                                    <option value="Zakat Perdagangan">Zakat Perdagangan</option>
                                    <option value="Zakat Perak">Zakat Perak</option>
                                    <option value="Zakat Emas">Zakat Emas</option>
                                    <option value="Zakat Pertanian">Zakat Pertanian</option>
                                </select>
                                @endif
                                @if($method == "POST" && $data['zakat']=='penghasilan')
                                <input type="text" name="akad" class="form-control" value="Zakat Pengahasilan" readonly />
                                @endif
                                @if($method == "POST" && $data['zakat']=='tabungan')
                                <input type="text" name="akad" class="form-control" value="Zakat Tabungan" readonly />
                                @endif
                                @if($method == "POST" && $data['zakat']=='perdagangan')
                                <input type="text" name="akad" class="form-control" value="Zakat Perdagangan" readonly />
                                @endif
                                @if($method == "POST" && $data['zakat']=='perak')
                                <input type="text" name="akad" class="form-control" value="Zakat Perak" readonly />
                                @endif
                                @if($method == "POST" && $data['zakat']=='emas')
                                <input type="text" name="akad" class="form-control" value="Zakat Emas" readonly />
                                @endif
                                @if($method == "POST" && $data['zakat']=='pertanian')
                                <input type="text" name="akad" class="form-control" value="Zakat Pertanian" readonly />
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nominal" class="col-sm-4 col-form-label nominal">Nominal</label>
                            <div class="input-group col-sm-8 form-nominal">
                                <div class="input-group-prepend pb-4">
                                    <span class="input-group-text" id="basic-addon1">Rp</span>
                                </div>
                                @if($method == 'GET')
                                <input type="text" class="form-control" name="nominal" autocomplete="off" required>
                                @endif
                                @if(($method == "POST") && ($data['zakat'] == "penghasilan"))
                                <input type="text" class="form-control" name="nominal" id="nominal" value="{{$data['penghasilan']}}">
                                @elseif(($method == "POST") && ($data['zakat'] == "tabungan"))
                                <input type="text" class="form-control" name="nominal" id="nominal" value="{{$data['tabungan']}}">
                                @elseif(($method == "POST") && ($data['zakat'] == "perdagangan"))
                                <input type="text" class="form-control" name="nominal" id="nominal" value="{{$data['perdagangan']}}">
                                @elseif(($method == "POST") && ($data['zakat'] == "emas"))
                                <input type="text" class="form-control" name="nominal" id="nominal" value="{{$data['emas']}}">
                                @elseif(($method == "POST") && ($data['zakat'] == "perak"))
                                <input type="text" class="form-control" name="nominal" id="nominal" value="{{$data['perak']}}">
                                @elseif(($method == "POST") && ($data['zakat'] == "pertanian"))
                                <input type="text" class="form-control" name="nominal" id="nominal" value="{{$data['pertanian']}}">
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bank" class="col-sm-4 col-form-label bank">Bank</label>
                            <div class="col-sm-8">
                                <select class="form-control form-bank" name="bank" required>
                                    <option hidden value="">Pilih Jenis Bank</option>
									<option value="Bank Syariah Mandiri">Bank Syariah Mandiri</option>
									<option value="Bank BNI Syariah">Bank BNI Syariah</option>
									<option value="Bank BRI Syariah">Bank BRI Syariah</option>
									<option value="Bank DKI Syariah">Bank DKI Syariah</option>
									<option value="Bank Mega Syariah">Bank Mega Syariah</option>
									<option value="Bank CIMB Niaga Syariah">Bank CIMB Niaga Syariah</option>
									<option value="Bank BCA Syariah">Bank BCA Syariah</option>
									<option value="Bank Muamalat">Bank Muamalat</option>
									<option value="Bank BJB">Bank BJB</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row text-center mt-2">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-8 text-center mt-3">
                                    <button type="submit" class="btn btn-md button" style="width: 50%;">Donasi</button>
                                </div>
                            </div>
                        </div>
                    </form>
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

    <script type="text/javascript">
        var nominal = document.getElementById('nominal');
        nominal.addEventListener('keyup', function() {
            nominal.value = formatRupiah(this.value, '');
        });

        var phone = document.getElementById('phone');
        phone.addEventListener('keyup', function() {
            phone.value = formatPhone(this.value, '');
            phone.value.replace(/[.]+/g, '');
        });

        function formatRupiah(angka, prefix) {
            var number = angka.replace(/[^\d]/g, '').toString();
            split = number.split(',');
            sisa = split[0].length % 3
                , rupiah = split[0].substr(0, sisa)
                , ribuan = split[0].substr(sisa).match(/\d{3}/gi);

            if (ribuan) {
                separator = sisa ? '.' : '';
                rupiah += separator + ribuan.join('.');
            }

            rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
            return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
        }

        function formatPhone(phone, prefix) {
            var number = phone.replace(/[^\d]/g, '').toString();
            split = number.split(',');
            number = split[0].substr(0);
            return prefix == undefined ? number : (number ? '' + number : '');
        }

    </script>
</body>
</html>
