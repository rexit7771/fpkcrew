@extends('layouts.main')

@section('content')
<section class="contact-section section-padding" id="section_5">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-12">
            </div>
            <div class="col-lg-8 col-12">
                <form action="{{ route('update') }}" method="post" class="custom-form contact-form" role="form">
                    @csrf
                    <h4 class="mb-4 pb-2">Form Edit</h4>
                    @foreach ($fpk_req as $request)
                    <input type="hidden" name="id" value="{{$request->id}}">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="mb-4">
                                <label for="floatingInput">NIK<span class="required-label"></span></label>
                                <input type="text" name="nik" id="nik" class="form-control border rounded-2" placeholder="Nomor Induk Karyawan" maxlength="5" onkeypress="return numOnly(event)" value="{{$request->nik}}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="mb-4">
                                <label for="floatingInput">Nama Karyawan: <span class="required-label"></span></label>
                                <input type="text" name="nama" id="nama" class="form-control border rounded-2" placeholder="Nama Lengkap" value="{{$request->nama}}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="mb-4">
                                <label for="floatingInput">Jenis Pertimbangan: <span class="required-label"></span></label>
                                <select class="form-control border rounded-2" name="jenis" placeholder="Jenis FPK" value="{{$request->jenis}}">
                                    <option {{ ( $request->jenis=="Promosi") ? 'selected' : '' }}  value="Promosi">Promosi</option>
                                    <option {{ ( $request->jenis=="Perubahan Job Title") ? 'selected' : '' }} value="Perubahan Job Title">Perubahan Job Title</option>
                                    <option {{ ( $request->jenis=="Penyesuaian Kelas") ? 'selected' : '' }} value="Penyesuaian Kelas">Penyesuaian Kelas / Golongan</option>
                                    <option {{ ( $request->jenis=="Demosi") ? 'selected' : '' }} value="Demosi">Demosi</option>
                                    <option {{ ( $request->jenis=="Perubahan Status") ? 'selected' : '' }} value="Perubahan Status">Perubahan Status</option>
                                    <option {{ ( $request->jenis=="Penyesuaian Upah") ? 'selected' : '' }} value="Penyesuaian Upah">Penyesuaian Upah</option>
                                    <option {{ ( $request->jenis=="Mutasi") ? 'selected' : '' }} value="Mutasi">Mutasi</option>
                                    <option {{ ( $request->jenis=="Perpanjang Kontrak") ? 'selected' : '' }} value="Perpanjang Kontrak">Perpanjang Kontrak Kerja</option>
                                    <option {{ ( $request->jenis=="PHK") ? 'selected' : '' }} value="PHK">PHK</option>
                                    <option {{ ( $request->jenis=="Pensiun") ? 'selected' : '' }} value="Pensiun">Pensiun</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="mb-4">
                                <label for="tanggal_masuk">Tanggal Masuk: <span class="required-label"></span></label>
                                <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control border rounded-2" placeholder="Tanggal Masuk" value="{{$request->tanggal_masuk}}">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="mb-4">
                                <label for="jabatan_lama">Jabatan Lama<span class="required-label"></span></label>
                                <input type="text" name="jabatan_lama" id="jabatan_lama" class="form-control border rounded-2" placeholder="Jabatan Lama" value="{{$request->jabatan_lama}}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="mb-4">
                                <label for="jabatan_baru">Jabatan Baru<span class="required-label"></span></label>
                                <input type="text" name="jabatan_baru" id="jabatan_baru"  class="form-control border rounded-2" placeholder="Jabatan Baru" value="{{$request->jabatan_baru}}">
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="mb-4">
                                <label for="level_lama">Level Lama<span class="required-label"></span></label>
                                <select class="form-control border rounded-2" name="level_lama" placeholder="Jenis FPK" value="{{$request->level_lama}}">
                                    <option {{ ( $request->level_lama=="16") ? 'selected' : '' }}  value="16">16</option>
                                    <option {{ ( $request->level_lama=="17") ? 'selected' : '' }} value="17">17</option>
                                    <option {{ ( $request->level_lama=="18") ? 'selected' : '' }} value="18">18</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-4">
                                <label for="grade_lama">Grade Lama<span class="required-label"></span></label>
                                <input type="text" name="grade_lama" id="grade_lama"  class="form-control border rounded-2" value="VI" disabled>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-4">
                                <label for="level_baru">Level Baru<span class="required-label"></span></label>
                                <select class="form-control border rounded-2" name="level_baru" placeholder="Jenis FPK" value="{{$request->level_baru}}">
                                    <option {{ ( $request->level_baru=="13") ? 'selected' : '' }} value="13">13</option>
                                    <option {{ ( $request->level_baru=="14") ? 'selected' : '' }} value="14">14</option>
                                    <option {{ ( $request->level_baru=="15") ? 'selected' : '' }} value="15">15</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="mb-4">
                                <label for="grade_baru">Grade Baru<span class="required-label"></span></label>
                                <input type="text" name="grade_baru" id="grade_baru"  class="form-control border rounded-2" value="V" disabled>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="mb-4">
                                <label for="divisi_lama">Divisi/Departemen Lama<span class="required-label"></span></label>
                                <select class="form-control border rounded-2" name="divisi_lama" placeholder="Jenis FPK">
                                    <option {{ ( $request->divisi_lama=="Engineering") ? 'selected' : '' }} value="Engineering">Engineering</option>
                                    <option {{ ( $request->divisi_lama=="Human Capital Management") ? 'selected' : '' }} value="Human Capital Management">Human Capital Management</option>
                                    <option {{ ( $request->divisi_lama=="KAM") ? 'selected' : '' }} value="KAM">KAM</option>
                                    <option {{ ( $request->divisi_lama=="Marketing") ? 'selected' : '' }} value="Marketing">Marketing</option>
                                    <option {{ ( $request->divisi_lama=="P1") ? 'selected' : '' }} value="P1">P1</option>
                                    <option {{ ( $request->divisi_lama=="P2") ? 'selected' : '' }} value="P2">P2</option>
                                    <option {{ ( $request->divisi_lama=="P3") ? 'selected' : '' }} value="P3">P3</option>
                                    <option {{ ( $request->divisi_lama=="P4") ? 'selected' : '' }} value="P4">P4</option>
                                    <option {{ ( $request->divisi_lama=="PP2") ? 'selected' : '' }} value="PP2">PP2</option>
                                    <option {{ ( $request->divisi_lama=="PP3") ? 'selected' : '' }} value="PP3">PP3</option>
                                    <option {{ ( $request->divisi_lama=="PP4") ? 'selected' : '' }} value="PP4">PP4</option>
                                    <option {{ ( $request->divisi_lama=="Product Development") ? 'selected' : '' }} value="Product Development">Product Development</option>
                                    <option {{ ( $request->divisi_lama=="QC System") ? 'selected' : '' }} value="QC System">Qc System</option>
                                    <option {{ ( $request->divisi_lama=="Sales") ? 'selected' : '' }} value="Sales">Sales</option>
                                    <option {{ ( $request->divisi_lama=="Supply Chain") ? 'selected' : '' }} value="Supply Chain">Supply Chain</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="mb-4">
                                <label for="divisi_baru">Divisi/Departemen Baru<span class="required-label"></span></label>
                                <select class="form-control border rounded-2" name="divisi_baru" placeholder="Jenis FPK">
                                    <option {{ ( $request->divisi_lama=="Accounting&Tax") ? 'selected' : '' }} value="Accounting&Tax">Accounting&Tax</option>
                                    <option {{ ( $request->divisi_lama=="BOD") ? 'selected' : '' }} value="BOD">BOD</option>
                                    <option {{ ( $request->divisi_lama=="Engineering") ? 'selected' : '' }} value="Engineering">Engineering</option>
                                    <option {{ ( $request->divisi_lama=="Exim") ? 'selected' : '' }} value="Exim">Exim</option>
                                    <option {{ ( $request->divisi_lama=="Finance") ? 'selected' : '' }} value="Finance">Finance</option>
                                    <option {{ ( $request->divisi_lama=="Human Capital Management") ? 'selected' : '' }} value="Human Capital Management">Human Capital Management</option>
                                    <option {{ ( $request->divisi_lama=="IT") ? 'selected' : '' }} value="IT">IT</option>
                                    <option {{ ( $request->divisi_lama=="KAM") ? 'selected' : '' }} value="KAM">KAM</option>
                                    <option {{ ( $request->divisi_lama=="Legal&Regulatory") ? 'selected' : '' }} value="Legal&Regulatory">Legal&Regulatory</option>
                                    <option {{ ( $request->divisi_lama=="Marketing") ? 'selected' : '' }} value="Marketing">Marketing</option>
                                    <option {{ ( $request->divisi_lama=="Sales") ? 'selected' : '' }} value="Sales">Sales</option>
                                    <option {{ ( $request->divisi_lama=="Produksi") ? 'selected' : '' }} value="Produksi">Produksi</option>
                                    <option {{ ( $request->divisi_lama=="QC System") ? 'selected' : '' }} value="QC System">QC System</option>
                                    <option {{ ( $request->divisi_lama=="Product Development") ? 'selected' : '' }} value="Product Development">Product Development</option>
                                    <option {{ ( $request->divisi_lama=="F&A") ? 'selected' : '' }} value="F&A">F&A</option>
                                    <option {{ ( $request->divisi_lama=="MSC&Engineering") ? 'selected' : '' }} value="MSC&Engineering">MSC&Engineering</option>
                                    <option {{ ( $request->divisi_lama=="OEM") ? 'selected' : '' }} value="OEM">OEM</option>
                                    <option {{ ( $request->divisi_lama=="Purchasing") ? 'selected' : '' }} value="Purchasing">Purchasing</option>
                                    <option {{ ( $request->divisi_lama=="Supply Chain") ? 'selected' : '' }} value="Supply Chain">Supply Chain</option>
                                    <option {{ ( $request->divisi_lama=="Corporate Controller&Auditor") ? 'selected' : '' }} value="Corporate Controller&Auditor">Corporate Controller&Auditor</option>
                                    <option {{ ( $request->divisi_lama=="QA") ? 'selected' : '' }} value="QA">QA</option>
                                    <option {{ ( $request->divisi_lama=="Vending Machine") ? 'selected' : '' }} value="Vending Machine">Vending Machine</option>
                                    <option {{ ( $request->divisi_lama=="PPIC") ? 'selected' : '' }} value="PPIC">PPIC</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="mb-4">
                                <label for="status_karyawan_lama">Status Karyawan Lama<span class="required-label"></span></label>
                                <select class="form-control border rounded-2" name="status_karyawan_lama" placeholder="Jenis FPK">
                                    <option {{ ( $request->divisi_lama=="Kontrak") ? 'selected' : '' }} value="Kontrak">Kontrak</option>
                                    <option {{ ( $request->divisi_lama=="Tetap") ? 'selected' : '' }} value="Tetap">Tetap</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="mb-4">
                                <label for="status_karyawan_baru">Status Karyawan Baru<span class="required-label"></span></label>
                                <select class="form-control border rounded-2" name="status_karyawan_baru" placeholder="Jenis FPK">
                                    <option {{ ( $request->divisi_lama=="Kontrak") ? 'selected' : '' }} value="Kontrak">Kontrak</option>
                                    <option {{ ( $request->divisi_lama=="Tetap") ? 'selected' : '' }} value="Tetap">Tetap</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="mb-4">
                                <label for="tanggal_efektif">Tanggal Efektif<span class="required-label"></span></label>
                                <input type="date" name="tanggal_efektif" id="tanggal_efektif" class="form-control border rounded-2" placeholder="Tanggal Efektif" value="{{$request->tanggal_efektif}}">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="mb-4">
                                <label for="note">Pertimbangan Perubahan</label>
                                <textarea class="form-control border rounded-2" id="note" name="note" placeholder="Pertimbangan Perubahan" value="{{$request->note}}">{{$request->note}} </textarea>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="mb-4">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <button type="submit" class="form-control border rounded-2">Submit</button>
                        </div>
                        @endforeach
                    </div>
                </form>
            </div>
            <div class="col-lg-2 col-12">
            </div>
        </div>
    </div>
</section>
@endsection
@section('script')
<style>
    .required-label:after {
        content:" *";
        color: red;
    }
</style>

<script>
    function numOnly(event) {
        var angka = (event.which) ? event.which : event.keyCode
        if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
            return false;
        return true;
    }
</script>
@endsection
