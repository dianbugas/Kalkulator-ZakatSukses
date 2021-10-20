<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Kalkulator Zakat</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet"/>
    <link rel="icon" href="https://zakatsukses.org/wp-content/uploads/2019/06/cropped-ZS-Bulet-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://zakatsukses.org/wp-content/uploads/2019/06/cropped-ZS-Bulet-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="https://zakatsukses.org/wp-content/uploads/2019/06/cropped-ZS-Bulet-180x180.png" />
    <style>
        .datepicker {
            font-size: 0.875em;
        }
        .datepicker td, .datepicker th {
            width: 1.5em;
            height: 1.5em;
        }
        .text-angka {
		    font-weight: bold;
		}

		.red-tabung {
		    color: #FC0202;
		    font-family: Lato;
		    font-style: italic;
		    font-weight: bold;
		     font-size: 16px;
		    /* line-height: 24px; */
		}
</style>
</head>
<body>
    <div class="container">
        <div class="home">
            <div class="text-center">
                <a href="https://zakatsukses.org/"><img src="{{asset('assets/img/logo.png')}}" class="image-logo" width="150px"></a>
            </div>
            <div class="text-center mt-4">
                <p class="judul-form">Kalkulator Perhitungan Zakat</p>
            </div>

            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-5 mt-2">
                    <div class="card-body">
                        <a href="" style="text-decoration: none;" data-toggle="modal" data-target="#z-penghasilan">
                            <div class="card-1">
                                <i class="fas fa-wallet fa-3x" style="color: #FFA825; margin-left: 16px; margin-top: 12px;"></i>
                                <p class="z-penghasilan" style="text-decoration:none">Zakat Penghasilan</p>
                                <p class="z-des-penghasilan">Zakat harta yang dikeluarkan dari hasil pendapatan seseorang atau profesinya bila telah mencapai nisab</p>
                            </div>
                        </a>
                    </div> 
                </div>
                <div class="col-sm-5 mt-2">
                    <div class="card-body">
                        <a href="" style="text-decoration: none;" data-toggle="modal" data-target="#z-tabungan">
                            <div class="card-5">
                                <div class="clearfix">
                                    <img src="{{asset('assets/img/tabungan.svg')}}" class="icon-emas" style="width: 58.56px; height: 62.4px; float: left; color: #FBB540; margin-left: 10px; margin-top: 0px;">
                                    <p class="z-tabungan">Zakat Tabungan</p>
                                    <p class="z-des-penghasilan">Muslim yang memiliki tabungan dan terhitung  mencapai satu tahun dan nilainya setara dengan  85gr emas, maka wajib mengeluarkan zakat. </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-5 mt-2">
                    <div class="card-body">
                        <a href="" style="text-decoration: none;" data-toggle="modal" data-target="#emas-perak">
                            <div class="card-3">
                                <div class="clearfix">
                                    <img src="{{asset('assets/img/emas.svg')}}" class="icon-emas" style="width: 56px; height: 46.8px; float: left; color: #FBB540; margin-left: 10px; margin-top: 0px;">
                                    <p class="emas-perak">Zakat Emas</p>
                                    <p class="z-des-penghasilan">Setiap muslim yang memiliki simpanan emas  selama satu tahun dan mencapai 85 gram, maka  wajib mengeluarkan zakat sebanyak 2,5 persen.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-5 mt-2">
                    <div class="card-body">
                        <a href="" style="text-decoration: none;" data-toggle="modal" data-target="#perak">
                            <div class="card-6">
                                <div class="clearfix">
                                    <img src="{{asset('assets/img/emas.svg')}}" class="icon-emas" style="width: 56px; height: 46.8px; float: left; color: #FBB540; margin-left: 10px; margin-top: 0px;">
                                    <p class="z-perak">Zakat Perak</p>
                                    <p class="z-des-penghasilan">simpanan perak selama satu tahun dan mencapai  595 gram perak, maka wajib mengeluarkan zakat  sebanyak 2,5 persen.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-5 mt-2">
                    <div class="card-body">
                        <a href="" style="text-decoration: none;" data-toggle="modal" data-target="#z-perdagangan">
                            <div class="card-2">
                                <i class="fas fa-shopping-bag fa-3x" style="color: #FFA825; margin-left: 16px; margin-top: 12px;"></i>
                                <p class="z-perdagangan">Zakat Perdagangan</p>
                                <p class="z-des-penghasilan">Zakat harta yang dikeluarkan dari aktivitas suatu usaha/perdagangan</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-sm-5 mt-2">
                    <div class="card-body">
                        <a href="" style="text-decoration: none;" data-toggle="modal" data-target="#z-pertanian">
                            <div class="card-4">
                                <div class="clearfix">
                                    <img src="{{asset('assets/img/pertanian.svg')}}" style="float: left; color: #FFA825; margin-left: 20px; margin-top: 0px;">
                                    <p class="z-pertanian">Zakat Pertanian</p>
                                    <p class="z-des-penghasilan">Zakat dari hasil pertanian dengan kadar 5% jika dengan  irigasi  atau 10% dengan  perairan alami.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="mt-5">
        <img src="{{asset('assets/img/bolakiri.png')}}" width="200" class="float-left img-responsive">
        <img src="{{asset('assets/img/bolakanan.png')}}" width="184" class="float-right img-responsive">
    </footer>
	{{-- Form Modal --}}
	@include('form-modal.modal')

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="{{asset('assets/js/accounting.js')}}"></script>
    <script src="{{asset('assets/js/hitung-zakat.js')}}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


    <script src="https://use.fontawesome.com/f4737361cc.js"></script>

<script type="text/javascript">
    $(function () {
        $('#simpan-emas').datepicker({
            autoclose: true,
            format: "mm/dd/yyyy"
        });
        $('#simpan-perak').datepicker({
            autoclose: true,
            format: "mm/dd/yyyy"
        });
        $('#simpan-tabungan').datepicker({
            autoclose: true,
            format: "mm/dd/yyyy"
        });
    });
</script>
<script type="text/javascript">
	function formatValue(angka, prefix) {
    var number = angka.replace(/[^\d]/g, '').toString();
    split = number.split(',');
    sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

    if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }

    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
}


// Penghasilan
var penghasilan = document.getElementById('peng-per');
penghasilan.addEventListener('keyup', function (e) {
    penghasilan.value = formatValue(this.value, '');
    var peng = penghasilan.value.replace(/[.]+/g, '');

    if (peng >= 5240000) {
        var pengPb = ((peng * 2.5) / 100);
        $('#wajibjzakat').attr('value', 'YA');
        $('#peng-pb').attr('value', (accounting.formatNumber(pengPb, "0", ".")));
    } else {
        $('#wajibjzakat').attr('value', 'TIDAK WAJIB ZAKAT');
        $('#peng-pb').attr('value', 0);
        $('#peng-pt').attr('value', 0);
    }
    // Button
    var per = document.getElementById('peng-pb');
    if (per.value > "0") {
        var button = document.querySelector('#btn-penghasilan');
        button.style.opacity = 1;
        button.style.pointerEvents = "unset";
    } else if (per.value == "0") {
        var button = document.querySelector('#btn-penghasilan');
        button.style.opacity = 0.6;
        button.style.pointerEvents = "none";
    }
})

// // Tabungan with tanggal
// function tabungan() {
//     var simpant = document.getElementById('simpan-tabungan').value;
//     simpant = new Date('"' + simpant + '"');
//     var hault = ('0' + (simpant.getMonth() + 1)).slice(-2) + '/' + ('0' + simpant.getDate()).slice(-2) + '/' + ((simpant.getFullYear() + 1))
//     $('#haul-tabungan').attr('value', hault)
//     hault = document.getElementById('haul-tabungan').value;
//     hault = new Date('"' + hault + '"')
//     var tgl_sekarangt = new Date();
//     var jumTabungan = document.getElementById('sal-bag').value;
//     var hargat = jumTabungan.replace(/[.]+/g, '');

//     if ((tgl_sekarangt >= hault) && (hargat >= 78540000)) {
//         var zakattabungan = hargat;
//         var jumlahZakatT = (((zakattabungan) * 2.5) / 100);
//         $('#wajibtzakat').attr('value', 'YA');
//         $('#jumlah-zakat-tabungan').attr('value', (accounting.formatNumber(jumlahZakatT, "0", ".")));
//         // Buttonp
//         var buttonpt = document.querySelector('#btn-tabungan');
//         buttonpt.style.opacity = 1;
//         buttonpt.style.pointerEvents = "unset";
//     } else if ((tgl_sekarangt >= hault) && (hargat < 78540000)) {
//         $('#wajibtzakat').attr('value', 'TIDAK WAJIB ZAKAT');
//         $('#jumlah-zakat-tabungan').attr('value', 0);
//         // Buttonpt
//         var buttonpt = document.querySelector('#btn-tabungan');
//         buttonpt.style.opacity = 0.6;
//         buttonpt.style.pointerEvents = "none";
//     } else if ((tgl_sekarangt < hault) && (hargat >= 78540000)) {
//         $('#wajibtzakat').attr('value', 'TIDAK WAJIB ZAKAT');
//         $('#jumlah-zakat-tabungan').attr('value', 0);
//         // Buttonpt
//         var buttonpt = document.querySelector('#btn-tabungan');
//         buttonpt.style.opacity = 0.6;
//         buttonpt.style.pointerEvents = "none";
//     } else {
//         $('#wajibtzakat').attr('value', 'TIDAK WAJIB ZAKAT');
//         $('#jumlah-zakat-tabungan').attr('value', 0);
//         // Buttonpt
//         var buttonpt = document.querySelector('#btn-tabungan');
//         buttonpt.style.opacity = 0.6;
//         buttonpt.style.pointerEvents = "none";
//     }
// }

// var jumTabungan = document.getElementById('sal-bag');
// jumTabungan.addEventListener('keyup', function () {
//     jumTabungan.value = formatValue(this.value, '');
//     var hargat = jumTabungan.value.replace(/[.]+/g, '');
//     var hault = document.getElementById('haul-tabungan').value;
//     hault = new Date('"' + hault + '"')
//     var tgl_sekarangt = new Date();

//     if ((tgl_sekarangt >= hault) && (hargat >= 78540000)) {
//         var zakattabungan = hargat;
//         var jumlahZakatT = (((zakattabungan) * 2.5) / 100);
//         $('#wajibtzakat').attr('value', 'YA');
//         $('#jumlah-zakat-tabungan').attr('value', (accounting.formatNumber(jumlahZakatT, "0", ".")));
//         // Buttonp
//         var buttonpt = document.querySelector('#btn-tabungan');
//         buttonpt.style.opacity = 1;
//         buttonpt.style.pointerEvents = "unset";
//     } else if ((tgl_sekarangt >= hault) && (hargat < 78540000)) {
//         $('#wajibtzakat').attr('value', 'TIDAK WAJIB ZAKAT');
//         $('#jumlah-zakat-tabungan').attr('value', 0);
//         // Buttonpt
//         var buttonpt = document.querySelector('#btn-tabungan');
//         buttonpt.style.opacity = 0.6;
//         buttonpt.style.pointerEvents = "none";
//     } else if ((tgl_sekarangt < hault) && (hargat >= 78540000)) {
//         $('#wajibtzakat').attr('value', 'TIDAK WAJIB ZAKAT');
//         $('#jumlah-zakat-tabungan').attr('value', 0);
//         // Buttonpt
//         var buttonpt = document.querySelector('#btn-tabungan');
//         buttonpt.style.opacity = 0.6;
//         buttonpt.style.pointerEvents = "none";
//     } else {
//         $('#wajibtzakat').attr('value', 'TIDAK WAJIB ZAKAT');
//         $('#jumlah-zakat-tabungan').attr('value', 0);
//         // Buttonpt
//         var buttonpt = document.querySelector('#btn-tabungan');
//         buttonpt.style.opacity = 0.6;
//         buttonpt.style.pointerEvents = "none";
//     }
// })

// Tabungan without tanggal
var jumTabungan = document.getElementById('sal-bag');
jumTabungan.addEventListener('keyup', function () {
    jumTabungan.value = formatValue(this.value, '');
    var hargat = jumTabungan.value.replace(/[.]+/g, '');

    if (hargat >= 78540000) {
        var jumlahZakatT = ((hargat * 2.5) / 100);
        $('#wajibtzakat').attr('value', 'YA');
        $('#jumlah-zakat-tabungan').attr('value', (accounting.formatNumber(jumlahZakatT, "0", ".")));
        // Button
        var buttonpt = document.querySelector('#btn-tabungan');
        buttonpt.style.opacity = 1;
        buttonpt.style.pointerEvents = "unset";
    } else {
        $('#wajibtzakat').attr('value', 'TIDAK WAJIB ZAKAT');
        $('#jumlah-zakat-tabungan').attr('value', 0);
        // Buttonpt
        var buttonpt = document.querySelector('#btn-tabungan');
        buttonpt.style.opacity = 0.6;
        buttonpt.style.pointerEvents = "none";
    }
})


// Emas with tanggal
// function tanggal() {
//     var simpane = document.getElementById('simpan-emas').value;
//     simpane = new Date('"' + simpane + '"');
//     var haule = ('0' + (simpane.getMonth() + 1)).slice(-2) + '/' + ('0' + simpane.getDate()).slice(-2) + '/' + ((simpane.getFullYear() + 1))
//     $('#haul-emas').attr('value', haule)
//     var tgl_sekarang = new Date();
//     var jumEmas = document.getElementById('jumlah-emas').value;
//     var hargae = jumEmas.replace(/[.]+/g, '');

//     // Call function dateEmas
//     dateEmas(tgl_sekarang, hargae)
// }

// var jumEmas = document.getElementById('jumlah-emas');
// jumEmas.addEventListener('keyup', function () {
//     jumEmas.value = formatValue(this.value, '');
//     var hargae = jumEmas.value.replace(/[.]+/g, '');
//     var tgl_sekarang = new Date()

//     // Call function dateEmas
//     dateEmas(tgl_sekarang, hargae)
// })

// Emas without tanggal
var jumEmas = document.getElementById('jumlah-emas');
jumEmas.addEventListener('keyup', function () {
    jumEmas.value = formatValue(this.value, '');
    var gram = jumEmas.value.replace(/[.]+/g, '');

    if (gram >= 85) {
        var zakatemas = gram * 942000;
        var jumlahZakatE = (((zakatemas) * 2.5) / 100);
        $('#wajibezakat').attr('value', 'YA');
        $('#jumlah-zakat-emas').attr('value', (accounting.formatNumber(jumlahZakatE, "0", ".")));
        // Button
        var buttonpe = document.querySelector('#btn-emas');
        buttonpe.style.opacity = 1;
        buttonpe.style.pointerEvents = "unset";
    } else {
        $('#wajibezakat').attr('value', 'TIDAK WAJIB ZAKAT');
        $('#jumlah-zakat-emas').attr('value', 0);
        // Button
        var buttonpe = document.querySelector('#btn-emas');
        buttonpe.style.opacity = 0.6;
        buttonpe.style.pointerEvents = "none";
    }
})

// Perak with tanggal
// function perak() {
//     var simpanp = document.getElementById('simpan-perak').value;
//     simpanp = new Date('"' + simpanp + '"');
//     var haulp = ('0' + (simpanp.getMonth() + 1)).slice(-2) + '/' + ('0' + simpanp.getDate()).slice(-2) + '/' + ((simpanp.getFullYear() + 1))
//     $('#haul-perak').attr('value', haulp)
//     var tgl_sekarang = new Date();
//     var jumPerak = document.getElementById('jumlah-perak').value;
//     var hargap = jumPerak.replace(/[.]+/g, '');

//     // Call function datePerak
//     datePerak(tgl_sekarang, hargap)
// }

// var jumPerak = document.getElementById('jumlah-perak');
// jumPerak.addEventListener('keyup', function () {
//     jumPerak.value = formatValue(this.value, '');
//     var hargap = jumPerak.value.replace(/[.]+/g, '');
//     var tgl_sekarang = new Date();

//     // Call function datePerak
//     datePerak(tgl_sekarang, hargap)
// })

// Perak without tanggal
var jumPerak = document.getElementById('jumlah-perak');
jumPerak.addEventListener('keyup', function () {
    jumPerak.value = formatValue(this.value, '');
    var gram = jumPerak.value.replace(/[.]+/g, '');

    if (gram >= 595) {
        var zakatperak = gram * 8200;
        var jumlahZakatP = (((zakatperak) * 2.5) / 100);
        $('#wajibperak').attr('value', 'YA');
        $('#jumlah-zakat-perak').attr('value', (accounting.formatNumber(jumlahZakatP, "0", ".")));
        // Button
        var buttonpe = document.querySelector('#btn-perak');
        buttonpe.style.opacity = 1;
        buttonpe.style.pointerEvents = "unset";
    } else {
        $('#wajibperak').attr('value', 'TIDAK WAJIB ZAKAT');
        $('#jumlah-zakat-perak').attr('value', 0);
        // Button
        var buttonpe = document.querySelector('#btn-perak');
        buttonpe.style.opacity = 0.6;
        buttonpe.style.pointerEvents = "none";
    }
})

//awal perdagangan
// === Modal yang di putar selama 1 Tahun
$(document).ready(function () {
    $('#dmodal').on('keyup', function () {
        var val_dmodal_string = $('#dmodal').val()
        $('#dmodal').val(formatValue(val_dmodal_string, "Rp. "));
        var rep_val_dmodal = val_dmodal_string.replace(/[.]+/g, '');
        if (+rep_val_dmodal >= 78540000) {
            // var zakat =  ((+rep_val_dmodal  +  +$('#dkeuntungan').val()  +  +$('#dpiutang').val())  -  +$('#dhutang').val())  *  (2.5*100);
            var zakat = +rep_val_dmodal + +$('#dkeuntungan').val().replace(/[.]+/g, '') + +$('#dpiutang').val().replace(/[.]+/g, '');
            var jumlahzakat = ((zakat - +$('#dhutang').val().replace(/[.]+/g, '')) * (2.5 / 100));
            if (zakat >= 78540000) {
                $('#zdwajib').attr('value', 'YA');
                $('#zdagang').attr('value', (accounting.formatNumber(jumlahzakat, "0", ".")));
            }
        }
        // else if (val_dmodal_string == '') {
        //     var zakat = +rep_val_dmodal + +$('#dkeuntungan').val().replace(/[.]+/g, '') + +$('#dpiutang').val().replace(/[.]+/g, '');
        //     var jumlahzakat = ((zakat - +$('#dhutang').val().replace(/[.]+/g, '')) * (2.5 / 100));
        //     if (zakat >= 78540000) {
        //         $('#zdwajib').attr('value', 'YA');
        //         $('#zdagang').attr('value', (accounting.formatNumber(jumlahzakat, "0", ".")));
        //     }
        // } else if ($('#zdagang').val != 0) {
        //     var zakat = +rep_val_dmodal + +$('#dkeuntungan').val().replace(/[.]+/g, '') + +$('#dpiutang').val().replace(/[.]+/g, '');
        //     var jumlahzakat = ((zakat - +$('#dhutang').val().replace(/[.]+/g, '')) * (2.5 / 100));
        //     if (zakat >= 78540000) {
        //         $('#zdwajib').attr('value', 'YA');
        //         $('#zdagang').attr('value', (accounting.formatNumber(jumlahzakat, "0", ".")));
        //     }
        // }
        else {
            $('#zdwajib').attr('value', 'Tidak');
            $('#zdagang').attr('value', 0);
        }

        // Button
        var per = document.getElementById('zdagang');
        if (per.value > "0") {
            var button = document.querySelector('#btn-perdagangan');
            button.style.opacity = 1;
            button.style.pointerEvents = "unset";
        } else if (per.value == "0") {
            var button = document.querySelector('#btn-perdagangan');
            button.style.opacity = 0.6;
            button.style.pointerEvents = "none";
        }
    })
});
// === Keuntungan Selama 1 Tahun
$(document).ready(function () {
    $('#dkeuntungan').on('keyup', function () {
        var val_keuntungan_string = $('#dkeuntungan').val()
        $('#dkeuntungan').val(formatValue(val_keuntungan_string, "Rp. "));
        var rep_val_keuntungan = val_keuntungan_string.replace(/[.]+/g, '');
        if (+rep_val_keuntungan >= 78540000) {
            var zakat = +$('#dmodal').val().replace(/[.]+/g, '') + +rep_val_keuntungan + +$('#dpiutang').val().replace(/[.]+/g, '');
            var jumlahzakat = ((zakat - +$('#dhutang').val().replace(/[.]+/g, '')) * (2.5 / 100));
            if (zakat >= 78540000) {
                $('#zdwajib').attr('value', 'YA');
                $('#zdagang').attr('value', (accounting.formatNumber(jumlahzakat, "0", ".")));
            }
        } else if (val_keuntungan_string == '') {
            var zakat = +$('#dmodal').val().replace(/[.]+/g, '') + +rep_val_keuntungan + +$('#dpiutang').val().replace(/[.]+/g, '');
            var jumlahzakat = ((zakat - +$('#dhutang').val().replace(/[.]+/g, '')) * (2.5 / 100));
            if (zakat >= 78540000) {
                $('#zdwajib').attr('value', 'YA');
                $('#zdagang').attr('value', (accounting.formatNumber(jumlahzakat, "0", ".")));
            }
        } else if ($('#zdagang').val != 0) {
            var zakat = +$('#dmodal').val().replace(/[.]+/g, '') + +rep_val_keuntungan + +$('#dpiutang').val().replace(/[.]+/g, '');
            var jumlahzakat = ((zakat - +$('#dhutang').val().replace(/[.]+/g, '')) * (2.5 / 100));
            if (zakat >= 78540000) {
                $('#zdwajib').attr('value', 'YA');
                $('#zdagang').attr('value', (accounting.formatNumber(jumlahzakat, "0", ".")));
            }
        } else {
            $('#zdwajib').attr('value', 'Tidak');
            $('#zdagang').attr('value', 0);
        }
        //Button
        var per = document.getElementById('zdagang');
        if (per.value > "0") {
            var button = document.querySelector('#btn-perdagangan');
            button.style.opacity = 1;
            button.style.pointerEvents = "unset";
        } else if (per.value == "0") {
            var button = document.querySelector('#btn-perdagangan');
            button.style.opacity = 0.6;
            button.style.pointerEvents = "none";
        }
    })
});
// === Piutang Dagang
$(document).ready(function () {
    $('#dpiutang').on('keyup', function () {
        var val_piutang_string = $('#dpiutang').val()
        $('#dpiutang').val(formatValue(val_piutang_string, "Rp. "));
        var rep_val_piutang = val_piutang_string.replace(/[.]+/g, '');
        if (+rep_val_piutang >= 78540000) {
            var zakat = +$('#dmodal').val().replace(/[.]+/g, '') + +$('#dkeuntungan').val().replace(/[.]+/g, '') + +rep_val_piutang;
            var jumlahzakat = ((zakat - +$('#dhutang').val().replace(/[.]+/g, '')) * (2.5 / 100));
            if (zakat >= 78540000) {
                $('#zdwajib').attr('value', 'YA');
                $('#zdagang').attr('value', (accounting.formatNumber(jumlahzakat, "0", ".")));
            }
        } else if (val_piutang_string == '') {
            var zakat = +$('#dmodal').val().replace(/[.]+/g, '') + +$('#dkeuntungan').val().replace(/[.]+/g, '') + +rep_val_piutang;
            var jumlahzakat = ((zakat - +$('#dhutang').val().replace(/[.]+/g, '')) * (2.5 / 100));
            if (zakat >= 78540000) {
                $('#zdwajib').attr('value', 'YA');
                $('#zdagang').attr('value', (accounting.formatNumber(jumlahzakat, "0", ".")));
            }
        } else if ($('#zdagang').val != 0) {
            var zakat = +$('#dmodal').val().replace(/[.]+/g, '') + +$('#dkeuntungan').val().replace(/[.]+/g, '') + +rep_val_piutang;
            var jumlahzakat = ((zakat - +$('#dhutang').val().replace(/[.]+/g, '')) * (2.5 / 100));
            if (zakat >= 78540000) {
                $('#zdwajib').attr('value', 'YA');
                $('#zdagang').attr('value', (accounting.formatNumber(jumlahzakat, "0", ".")));
            }
        } else {
            $('#zdwajib').attr('value', 'Tidak');
            $('#zdagang').attr('value', 0);
        }
        //Button
        var per = document.getElementById('zdagang');
        if (per.value > "0") {
            var button = document.querySelector('#btn-perdagangan');
            button.style.opacity = 1;
            button.style.pointerEvents = "unset";
        } else if (per.value == "0") {
            var button = document.querySelector('#btn-perdagangan');
            button.style.opacity = 0.6;
            button.style.pointerEvents = "none";
        }
    })
});

// === Hutang Jatuh Tempo
$(document).ready(function () {
    $('#dhutang').on('keyup', function () {
        var val_hutang_string = $('#dhutang').val()
        $('#dhutang').val(formatValue(val_hutang_string, "Rp. "));
        var rep_val_hutang = val_hutang_string.replace(/[.]+/g, '');
        if (+rep_val_hutang >= 78540000) {
            var zakat = +$('#dmodal').val().replace(/[.]+/g, '') + +$('#dkeuntungan').val().replace(/[.]+/g, '') + +$('#dpiutang').val().replace(/[.]+/g, '');
            var jumlahzakat = ((zakat - +rep_val_hutang) * (2.5 / 100));
            if (zakat >= 78540000) {
                $('#zdwajib').attr('value', 'YA');
                $('#zdagang').attr('value', (accounting.formatNumber(jumlahzakat, "0", ".")));
            }
        } else if ($('#zdagang').val != 0) {
            var zakat = +$('#dmodal').val().replace(/[.]+/g, '') + +$('#dkeuntungan').val().replace(/[.]+/g, '') + +$('#dpiutang').val().replace(/[.]+/g, '');
            var jumlahzakat = ((zakat - +rep_val_hutang) * (2.5 / 100));
            if (zakat >= 78540000) {
                $('#zdwajib').attr('value', 'YA');
                $('#zdagang').attr('value', (accounting.formatNumber(jumlahzakat, "0", ".")));
            }
        } else if (val_hutang_string == '') {
            var zakat = +$('#dmodal').val().replace(/[.]+/g, '') + +$('#dkeuntungan').val().replace(/[.]+/g, '') + +$('#dpiutang').val().replace(/[.]+/g, '');
            var jumlahzakat = ((zakat - +rep_val_hutang) * (2.5 / 100));
            if (zakat >= 78540000) {
                $('#zdwajib').attr('value', 'YA');
                $('#zdagang').attr('value', (accounting.formatNumber(jumlahzakat, "0", ".")));
            }
        } else {
            $('#zdwajib').attr('value', 'Tidak');
            $('#zdagang').attr('value', 0);
        }
        //Button
        var per = document.getElementById('zdagang');
        if (per.value > "0") {
            var button = document.querySelector('#btn-perdagangan');
            button.style.opacity = 1;
            button.style.pointerEvents = "unset";
        } else if (per.value == "0") {
            var button = document.querySelector('#btn-perdagangan');
            button.style.opacity = 0.6;
            button.style.pointerEvents = "none";
        }
    })
});
//akhir perdagangan

// Pertanian
var pertanian = document.getElementById('zakat-per');
pertanian.addEventListener('keyup', function () {
    pertanian.value = formatValue(this.value, '');
    var harga = pertanian.value.replace(/[.]+/g, '');
    var pilihan = document.getElementById('pilihan');
    pilihan = pilihan.options[pilihan.selectedIndex].value;

    if (harga >= 5240000) {
        if (pilihan == 'irigasi') {
            var zakatPer = ((harga * 5) / 100);
            $('#jum-per').attr('value', (accounting.formatNumber(zakatPer, "0", ".")));
            $('#wajib-per').attr('value', 'YA');
        } else if (pilihan == 'tadah_hujan') {
            var zakatPer = ((harga * 10) / 100);
            $('#jum-per').attr('value', (accounting.formatNumber(zakatPer, "0", ".")));
            $('#wajib-per').attr('value', 'Ya');
        } else {
            $('#wajib-per').attr('value', 'Ya');
        }
    } else {
        $('#wajib-per').attr('value', 'TIDAK WAJIB ZAKAT');
        $('#jum-per').attr('value', 0);
    }
    // Button
    var per = document.getElementById('jum-per');
    if (per.value > "0") {
        var button = document.querySelector('#btn-pertanian');
        button.style.opacity = 1;
        button.style.pointerEvents = "unset";
    } else if (per.value == "0") {
        var button = document.querySelector('#btn-pertanian');
        button.style.opacity = 0.6;
        button.style.pointerEvents = "none";
    }
});

function pilih() {
    var pilihan = document.getElementById('pilihan');
    pilihan = pilihan.options[pilihan.selectedIndex].value;
    var pertanian = document.getElementById('zakat-per');
    var harga = pertanian.value.replace(/[.]+/g, '');

    if (pilihan == 'irigasi') {
        if (harga >= 5240000) {
            var zakatPer = ((harga * 5) / 100);
            $('#jum-per').attr('value', (accounting.formatNumber(zakatPer, "0", ".")));
        }
    } else {
        if (harga >= 5240000) {
            var zakatPer = ((harga * 10) / 100);
            $('#jum-per').attr('value', (accounting.formatNumber(zakatPer, "0", ".")));
        }
    }
    // Button
    var per = document.getElementById('jum-per');
    if (per.value > "0") {
        var button = document.querySelector('#btn-pertanian');
        button.style.opacity = 1;
        button.style.pointerEvents = "unset";
    } else if (per.value == "0") {
        var button = document.querySelector('#btn-pertanian');
        button.style.opacity = 0.6;
        button.style.pointerEvents = "none";
    }
}

// function datePerak(tgl, gram) {
//     haulp = document.getElementById('haul-perak').value;
//     haulp = new Date('"' + haulp + '"')
//     if ((tgl >= haulp) && (gram >= 595)) {
//         var zakatperak = gram * 8200;
//         var jumlahZakatP = (((zakatperak) * 2.5) / 100);
//         $('#wajibperak').attr('value', 'YA');
//         $('#jumlah-zakat-perak').attr('value', (accounting.formatNumber(jumlahZakatP, "0", ".")));
//         // Buttonp
//         var buttonpp = document.querySelector('#btn-perak');
//         buttonpp.style.opacity = 1;
//         buttonpp.style.pointerEvents = "unset";
//     } else if ((tgl >= haulp) && (gram < 595)) {
//         $('#wajibperak').attr('value', 'Tidak');
//         $('#jumlah-zakat-perak').attr('value', 0);
//         // Buttonpp
//         var buttonpp = document.querySelector('#btn-perak');
//         buttonpp.style.opacity = 0.6;
//         buttonpp.style.pointerEvents = "none";
//     } else if ((tgl < haulp) && (gram >= 595)) {
//         $('#wajibperak').attr('value', 'Tidak');
//         $('#jumlah-zakat-perak').attr('value', 0);
//         // Buttonpp
//         var buttonpp = document.querySelector('#btn-perak');
//         buttonpp.style.opacity = 0.6;
//         buttonpp.style.pointerEvents = "none";
//     } else {
//         $('#wajibperak').attr('value', 'Tidak');
//         $('#jumlah-zakat-perak').attr('value', 0);
//         // Buttonpp
//         var buttonpp = document.querySelector('#btn-perak');
//         buttonpp.style.opacity = 0.6;
//         buttonpp.style.pointerEvents = "none";
//     }
// }

// function dateEmas(tgl, gram) {
//     haule = document.getElementById('haul-emas').value;
//     haule = new Date('"' + haule + '"')
//     if ((tgl >= haule) && (gram >= 85)) {
//         var zakatemas = gram * 942000;
//         var jumlahZakatE = (((zakatemas) * 2.5) / 100);
//         $('#wajibezakat').attr('value', 'YA');
//         $('#jumlah-zakat-emas').attr('value', (accounting.formatNumber(jumlahZakatE, "0", ".")));
//         // Buttonp
//         var buttonpe = document.querySelector('#btn-emas');
//         buttonpe.style.opacity = 1;
//         buttonpe.style.pointerEvents = "unset";
//     } else if ((tgl >= haule) && (gram < 85)) {
//         $('#wajibezakat').attr('value', 'Tidak');
//         $('#jumlah-zakat-emas').attr('value', 0);
//         // Buttonpe
//         var buttonpe = document.querySelector('#btn-emas');
//         buttonpe.style.opacity = 0.6;
//         buttonpe.style.pointerEvents = "none";
//     } else if ((tgl < haule) && (gram >= 85)) {
//         $('#wajibezakat').attr('value', 'Tidak');
//         $('#jumlah-zakat-emas').attr('value', 0);
//         // Buttonpe
//         var buttonpe = document.querySelector('#btn-emas');
//         buttonpe.style.opacity = 0.6;
//         buttonpe.style.pointerEvents = "none";
//     } else {
//         $('#wajibezakat').attr('value', 'Tidak');
//         $('#jumlah-zakat-emas').attr('value', 0);
//         // Buttonpe
//         var buttonpe = document.querySelector('#btn-emas');
//         buttonpe.style.opacity = 0.6;
//         buttonpe.style.pointerEvents = "none";
//     }
// }

// Tabungan
var salBag = document.getElementById('sal-bag');
salBag.addEventListener('keyup', function () {
    salBag.value = formatRupiah(this.value, '');
    var tabungan = salBag.value.replace(/[.]+/g, '');

    if (tabungan >= 78540000) {
        var bagHas = parseInt($('#bag-has').val());
        if (bagHas == 0) {
            var zakatt = tabungan + bagHas;
            var jumlahZakat = ((zakatt * 2.5) / 100);
            $('#wajibtzakat').attr('value', 'YA');
            $('#jumlah-zakat').attr('value', (accounting.formatNumber(jumlahZakat, "0", ".")));
        }
    } else {
        $('#wajibtzakat').attr('value', 'Tidak');
        $('#jumlah-zakat').attr('value', 0);
    }
    var bagiHasil = document.getElementById('bag-has');
    bagiHasil.addEventListener('keyup', function () {
        bagiHasil.value = formatRupiah(this.value, '');
        var hasilt = bagiHasil.value.replace(/[.]+/g, '');
        console.log(hasilt);
        var fix_hasil = tabungan + hasilt;
        if (fix_hasil >= 78540000) {
            var jumlahZakat = ((fix_hasil * 2.5) / 100);
            $('#wajibtzakat').attr('value', 'YA');
            $('#jumlah-zakat').attr('value', (accounting.formatNumber(jumlahZakat, "0", ".")));
        } else {
            $('#wajibtzakat').attr('value', 'Tidak');
            $('#jumlah-zakat').attr('value', 0);
        }
    });
});

// Emas
var jumEmas = document.getElementById('jumlah-emas');
jumEmas.addEventListener('keyup', function () {
    jumEmas.value = formatRupiah(this.value, '');
    var hargae = jumEmas.value.replace(/[.]+/g, '');

    if (hargae >= 85) {
        var zakatemas = hargae * 924000;
        var jumlahZakat = (((zakatemas) * 2.5) / 100);
        $('#wajibezakat').attr('value', 'YA');
        $('#jumlah-zakat-emas').attr('value', (accounting.formatNumber(jumlahZakat, "0", ".")));
    } else {
        $('#wajibezakat').attr('value', 'Tidak');
        $('#jumlah-zakat-emas').attr('value', 0);
    }
});

// Perak
var jumPerak = document.getElementById('jumlah-perak');
jumPerak.addEventListener('keyup', function () {
    jumPerak.value = formatRupiah(this.value, '');
    var hargaa = jumPerak.value.replace(/[.]+/g, '');
    if (hargaa >= 595) {
        var zakatperak = hargaa * 8200;
        var jumlahPerak = (((zakatperak) * 2.5) / 100);
        $('#wajibperak').attr('value', 'YA');
        $('#jumlah-zakat-perak').attr('value', (accounting.formatNumber(jumlahPerak, "0", ".")));
    } else {
        $('#wajibperak').attr('value', 'Tidak');
        $('#jumlah-zakat-perak').attr('value', 0);
    }
});

</script>
</body>
</html>
