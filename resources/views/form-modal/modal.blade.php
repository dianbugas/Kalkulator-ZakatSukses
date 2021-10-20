<!-- Modal Penghasilan -->
<div class="modal fade bd-example-modal-xl" id="z-penghasilan" tabindex="-1" role="dialog" aria-labelledby="z-penghasilan" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="col-sm-12 mt-5">
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label class="lmodal">Penghasilan Perbulan<b class="red-tabung"> *</b></label>
                            <input type="text" class="form-control text-angka imodal" id="peng-per" placeholder="tuliskan nominal" autocomplete="off">
                        </div>
                        <div class="form-group mt-5">
                            <label class="lmodal">Nisab (524 kg beras)<b class="red-tabung"> *</b></label>
                            <input type="text" class="form-control text-angka imodal" value="5.240.000" style="background-color:#FFFFFF;" readonly>
                        </div>
                        <div class="form-group mt-5">
                            <label class="lwajib_t">WAJIB MEMBAYAR ZAKAT PENGHASILAN</label>
                            <input type="text" class="form-control imodal" id="wajibjzakat" style="background-color:#FFFFFF;" readonly>
                        </div>
                        <form action="{{route('form.donasi',['zakat' => 'penghasilan'])}}" method="POST">
                            @csrf
                            <input type="hidden" name="zakat" value="penghasilan">
                            <div class="form-group mt-5">
                                <label class="ljumlah_t">JUMLAH ZAKAT PENGHASILAN PERBULAN</label>
                                <input type="text" class="form-control text-angka imodal" name="penghasilan" id="peng-pb" style="background-color:#FFFFFF;" readonly>
                            </div>
                            <div class="text-center mt-5 mb-5 button-center">
                                <button type="submit" class="btn btn-form" id="btn-penghasilan" style="opacity: 0.6; pointer-events: none;">Donasi</button>
                            </div>
                        </form>
                        <p class="red-tabung">KEPUTUSAN KETUA BADAN AMIL ZAKAT NASIONAL Nomor KEP.016/BP/BAZNAS/XII/2015 TENTANG NILAI NISHAB ZAKAT PENDAPATAN ATAU PROFESI TAHUN 2016</p>
                        <p class="red-tabung">PERATURAN MENTERI AGAMA TENTANG SYARAT DAN TATA CARA PERHITUNGAN ZAKAT MAL DAN ZAKAT FITRAH SERTA PENDAYAGUNAAN ZAKAT UNTUK USAHA PRODUKTIF Paragraf 8 Zakat Pendapatan dan Jasa, Pasal 26</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- pertanian --}}
<div class="modal fade bd-example-modal-xl" id="z-pertanian" tabindex="-1" role="dialog" aria-labelledby="z-pertanian" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="col-sm-12 mt-5">
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label class="lmodal">Panen dalam Rupiah</label>
                            <input type="text" class="form-control text-angka imodal" name="zakatpt" id="zakat-per" placeholder="tuliskan nominal" autocomplete="off">
                        </div>
                        <div class="form-group mt-5">
                            <label class="lmodal">Jenis Pengairan</label>
                            <div class="form-group mt-3">
                                <select class="form-control" id="pilihan" required onchange="pilih();">
                                    <option hidden>Pilih</option>
                                    <option value="irigasi">Irigasi</option>
                                    <option value="tadah_hujan">Tadah Hujan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group mt-5">
                            <label class="lmodal">Nishab 524 kg</label>
                            <input type="text" class="form-control text-angka imodal" name="nzpt" id="nishab-per" value="5.240.000" style="background-color:#FFF;" readonly>
                        </div>
                        <div class="form-group mt-5">
                            <label class="lwajib_t">WAJIB MEMBAYAR ZAKAT PERTANIAN</label>
                            <input type="text" class="form-control imodal" name="wzpt" id="wajib-per" style="background-color:#FFF;" readonly>
                        </div>
                        <form action="{{route('form.donasi',['zakat' => 'pertanian'])}}" method="POST">
                            @csrf
                            <input type="hidden" name="zakat" value="pertanian">
                            <div class="form-group mt-5">
                                <label class="ljumlah_t">JUMLAH ZAKAT PERTANIAN</label>
                                <input type="text" class="form-control text-angka imodal" name="pertanian" id="jum-per" style="background-color:#FFFFFF;" readonly>
                            </div>
                            <div class="text-center mt-5 mb-5 button-center">
                                <button type="submit" class="btn btn-form" id="btn-pertanian" style="opacity: 0.6; pointer-events: none;">Donasi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal Perdagangan -->
<div class="modal fade bd-example-modal-xl" id="z-perdagangan" tabindex="-1" role="dialog" aria-labelledby="z-perdagangan" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="col-sm-12 mt-5">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label class="lmodal">Modal yang di putar selama 1 Tahun</label>
                            <input type="text" class="form-control text-angka imodal" name="lastname" id="dmodal" placeholder="tuliskan nominal" autocomplete="off">
                        </div>
                        <div class="form-group mt-5">
                            <label class="lmodal">Keuntungan Selama 1 Tahun</label>
                            <input type="text" class="form-control text-angka imodal" name="lastname" id="dkeuntungan" placeholder="tuliskan nominal" autocomplete="off">
                        </div>
                        <div class="form-group mt-5">
                            <label class="lmodal">Piutang Dagang</b></label>
                            <input type="text" class="form-control text-angka imodal" name="lastname" id="dpiutang" placeholder="tuliskan nominal" autocomplete="off">
                        </div>
                        <div class="form-group mt-5">
                            <label class="lwajib_t">Jumlah Hutang</label>
                            <input type="text" class="form-control text-angka imodal" name="lastname" id="dhutang" placeholder="tuliskan nominal" autocomplete="off">
                        </div>
                        <div class="form-group mt-5">
                            <label class="lwajib_t">Nishab (85gr Emas)</label>
                            <input type="text" class="form-control text-angka imodal" name="lastname" id="dnishab" value="78.540.000" style="background-color:#FFFFFF;" readonly>
                        </div>
                        <div class="form-group mt-5">
                            <label class="ljumlah_t">WAJIB MEMBAYAR ZAKAT PERDAGANGAN</label>
                            <input type="text" class="form-control imodal" name="lastname" id="zdwajib" style="background-color:#FFFFFF;" readonly>
                        </div>
                        <form action="{{route('form.donasi',['zakat' => 'perdagangan'])}}" method="POST">
                            @csrf
                            <input type="hidden" name="zakat" value="perdagangan">
                            <div class="form-group mt-5">
                                <label class="ljumlah_t">JUMLAH ZAKAT PERDAGANGAN</label>
                                <input type="text" class="form-control text-angka imodal" name="perdagangan" id="zdagang" style="background-color:#FFFFFF;" readonly>
                            </div>
                            <div class="text-center mt-5 mb-5 button-center">
                                <button type="submit" class="btn btn-form" id="btn-perdagangan" style="opacity: 0.6; pointer-events: none;">Donasi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Emas -->
<div class="modal fade bd-example-modal-xl" id="emas-perak" tabindex="-1" role="dialog" aria-labelledby="emas-perak" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="col-sm-12 mt-5">
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label class="lmodal">Jumlah Emas yang Dimiliki dalam Gram<b class="red-tabung"> *</b></label>
                            <input type="text" class="form-control text-angka imodal" id="jumlah-emas" placeholder="tuliskan nominal">
                        </div>
                        <div class="form-group mt-5">
                            <label class="lmodal">Nishab Emas (85 gram)<b class="red-tabung"> *</b></label>
                            <input type="text" class="form-control text-angka imodal" name="lastname" value="78.540.000" style="background-color:#FFFFFF;" readonly>
                        </div>
                        <div class="form-group mt-5">
                            <label class="lwajib_t">WAJIB MEMBAYAR ZAKAT EMAS</label>
                            <input type="text" class="form-control imodal" id="wajibezakat" name="lastname" style="background-color:#FFFFFF;" readonly>
                        </div>
                        <form action="{{route('form.donasi',['zakat' => 'emas'])}}" method="POST">
                            @csrf
                            <input type="hidden" name="zakat" value="emas">
                            <div class="form-group mt-5">
                                <label class="ljumlah_t">Jumlah Zakat Emas</label>
                                <input type="text" class="form-control text-angka imodal" id="jumlah-zakat-emas" name="emas" style="background-color:#FFF;" readonly>
                            </div>
                            <div class="text-center mt-5 mb-5 button-center">
                                <button type="submit" class="btn btn-form" id="btn-emas" style="opacity: 0.6; pointer-events: none;">Donasi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- PERAK --}}
<div class="modal fade bd-example-modal-xl" id="perak" tabindex="-1" role="dialog" aria-labelledby="perak" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="col-sm-12 mt-5">
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label class="lmodal">Jumlah Perak yang Dimiliki dalam Gram<b class="red-tabung"> *</b></label>
                            <input type="text" class="form-control text-angka imodal" id="jumlah-perak" placeholder="tuliskan nominal">
                        </div>
                       {{--  <div class="form-group mt-5">
                            <label class="lmodal">Tanggal Harta Capai Nisob</label>
                            <div class="input-group form-infaq">
                                <div class="input-group-prepend">
                                    <i class="far fa-calendar icon-kle"></i>
                                </div>
                                <input type="text" class="form-control imodal" id="simpan-perak" style="background-color:#FFFFFF;" readonly onchange="perak();">
                            </div>
                        </div>
                        <div class="form-group mt-5">
                            <label class="lmodal">Tanggal Haul Perak</label>
                            <div class="input-group form-infaq">
                                <div class="input-group-prepend">
                                    <i class="far fa-calendar icon-kle"></i>
                                </div>
                                <input type="text" class="form-control imodal" id="haul-perak" style="background-color:#FFFFFF;" readonly>
                            </div>
                        </div> --}}
                        <div class="form-group mt-5">
                            <label class="lmodal">Nishab Perak (595 gram) <b class="red-tabung"> *</b></label>
                            <input type="text" class="form-control text-angka imodal" name="lastname" value="4.879.000" style="background-color:#FFFFFF;" readonly>
                        </div>
                        <div class="form-group mt-5">
                            <label class="lwajib_t">WAJIB MEMBAYAR ZAKAT PERAK</label>
                            <input type="text" class="form-control imodal" id="wajibperak" name="lastname" style="background-color:#FFFFFF;" readonly>
                        </div>
                        <form action="{{route('form.donasi',['zakat' => 'perak'])}}" method="POST">
                            @csrf
                            <input type="hidden" name="zakat" value="perak">
                            <div class="form-group mt-5">
                                <label class="ljumlah_t">Jumlah Zakat Perak</label>
                                <input type="text" class="form-control text-angka imodal" id="jumlah-zakat-perak" name="perak" style="background-color:#FFF;" readonly>
                            </div>
                            <div class="text-center mt-5 mb-5 button-center">
                                <button type="submit" class="btn btn-form" id="btn-perak" style="opacity: 0.6; pointer-events: none;">Donasi</button>
                            </div>
                        </form>
                        <p class="red-tabung">KEPUTUSAN KETUA BADAN AMIL ZAKAT NASIONAL Nomor KEP.016/BP/BAZNAS/XII/2015 TENTANG NILAI NISHAB ZAKAT PENDAPATAN ATAU PROFESI TAHUN 2016</p>
                        <p class="red-tabung">PERATURAN MENTERI AGAMA TENTANG SYARAT DAN TATA CARA PERHITUNGAN ZAKAT MAL DAN ZAKAT FITRAH SERTA PENDAYAGUNAAN ZAKAT UNTUK USAHA PRODUKTIF Paragraf 8 Zakat Pendapatan dan Jasa, Pasal 26</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- TABUNGAN --}}
<div class="modal fade bd-example-modal-xl" id="z-tabungan" tabindex="-1" role="dialog" aria-labelledby="z-tabungan" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="col-sm-12 mt-5">
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label class="lmodal">Saldo Tabungan<b class="red-tabung"> *</b></label>
                            <input type="text" class="form-control text-angka imodal" id="sal-bag" placeholder="tuliskan nominal" autocomplete="off">
                        </div>
                        {{-- <div class="form-group mt-5">
                            <label class="lmodal">Tanggal Harta Capai Nisob</label>
                            <div class="input-group form-infaq">
                                <div class="input-group-prepend">
                                    <i class="far fa-calendar icon-kle"></i>
                                </div>
                                <input type="text" class="form-control imodal" id="simpan-tabungan" style="background-color:#FFFFFF;" readonly onchange="tabungan();">
                            </div>
                        </div>
                        <div class="form-group mt-5">
                            <label class="lmodal">Tanggal Haul Tabungan</label>
                            <div class="input-group form-infaq">
                                <div class="input-group-prepend">
                                    <i class="far fa-calendar icon-kle"></i>
                                </div>
                                <input type="text" class="form-control imodal" id="haul-tabungan" value="" style="background-color:#FFFFFF;" readonly>
                            </div>
                        </div> --}}
                        <div class="form-group mt-5">
                            <label class="lmodal">Harga Emas saat ini<b class="red-tabung"> *</b></label>
                            <input type="text" class="form-control text-angka imodal" value="924.000" style="background-color:#FFFFFF;" readonly>
                        </div>
                        <div class="form-group mt-5">
                            <label class="lmodal">Nishab Emas (85 gram)<b class="red-tabung"> *</b></label>
                            <input type="text" class="form-control text-angka imodal" value="78.540.000" style="background-color:#FFFFFF;" readonly>
                        </div>
                        <div class="form-group mt-5">
                            <label class="lwajib_t">WAJIB MEMBAYAR ZAKAT TABUNGAN</label>
                            <input type="text" class="form-control imodal" id="wajibtzakat" style="background-color:#FFFFFF;" readonly>
                        </div>
                        <form action="{{route('form.donasi',['zakat' => 'tabungan'])}}" method="POST">
                            @csrf
                            <input type="hidden" name="zakat" value="tabungan">
                            <div class="form-group mt-5">
                                <label class="ljumlah_t">JUMLAH ZAKAT TABUNGAN</label>
                                <input type="text" class="form-control text-angka imodal" id="jumlah-zakat-tabungan" name="tabungan" style="background-color:#FFF;" readonly>
                            </div>
                            <div class="text-center mt-5 mb-5 button-center">
                                <button type="submit" class="btn btn-form" id="btn-tabungan" style="opacity: 0.6; pointer-events: none;">Donasi</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
