@extends('layouts.main')

@section('content')
<section class="contact-section section-padding" id="section_5">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-12">
            </div>
            <div class="col-lg-8 col-12">
                <form action="{{ route('store') }}" method="post" class="custom-form contact-form" role="form">
                    @csrf
                    @foreach ($table_users as $item)
                        <input type="hidden" name="direct_superior" value="{{$item->direct_superior}} ">
                        <input type="hidden" name="next_approval" value="{{$item->direct_superior}}">
                        <input type="hidden" name="id" value="{{$item->id}}" >
                    @endforeach
                    <input type="hidden" value="">
                    <h4 class="mb-4 pb-2">Form Input</h4>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="mb-4">
                                <label for="floatingInput">NIK<span class="required-label"></span></label>
                                <input type="text" name="nik" id="nik" class="form-control border rounded-2" placeholder="Nomor Induk Karyawan" onkeypress="return numOnly(event)" maxlength="5" required>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="mb-4">
                                <label for="floatingInput">Nama Karyawan<span class="required-label"></span></label>
                                <input type="text" name="nama" id="nama" class="form-control border rounded-2" placeholder="Nama Lengkap" required>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="mb-4">
                                <label for="floatingInput">Jenis Perubahan<span class="required-label"></span></label>
                                <select class="form-control border rounded-2" name="jenis" placeholder="Jenis FPK" required>
                                    <option value="">...</option>
                                    <option value="Promosi">Promosi</option>
                                    <option value="Perubahan Job Title">Perubahan Job Title</option>
                                    <option value="Penyesuaian Kelas">Penyesuaian Kelas / Golongan</option>
                                    <option value="Demosi">Demosi</option>
                                    <option value="Perubahan Status">Perubahan Status</option>
                                    <option value="Penyesuaian Upah">Penyesuaian Upah</option>
                                    <option value="Mutasi">Mutasi</option>
                                    <option value="Perpanjang Kontrak">Perpanjang Kontrak Kerja</option>
                                    <option value="PHK">PHK</option>
                                    <option value="Pensiun">Pensiun</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="mb-4">
                                <label for="tanggal_masuk">Tanggal Masuk<span class="required-label"></span></label>
                                <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="form-control border rounded-2" placeholder="Tanggal Masuk" required>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="mb-4">
                                <label for="jabatan_lama">Jabatan Lama<span class="required-label"></span></label>
                                <input type="text" name="jabatan_lama" id="jabatan_lama" class="form-control border rounded-2" placeholder="Jabatan Lama" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="mb-4">
                                <label for="jabatan_baru">Jabatan Baru<span class="required-label"></span></label>
                                <input type="text" name="jabatan_baru" id="jabatan_baru"  class="form-control border rounded-2" placeholder="Jabatan Baru" required>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="mb-4">
                                <label for="level_lama">Level Lama<span class="required-label"></span></label>
                                <select class="form-control border rounded-2 border rounded-2" name="level_lama" placeholder="Jenis FPK" required>
                                    <option value="">...</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="mb-4">
                                <label for="level_lama">Grade Lama<span class="required-label"></span></label>
                                <input type="text" name="grade_lama" id="grade_lama" class="form-control border rounded-2" placeholder="Level Lama" value="VI" readonly required>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="mb-4">
                                <label for="level_baru">Level Baru<span class="required-label"></span></label>
                                <select class="form-control border rounded-2" name="level_baru" placeholder="Jenis FPK" required>
                                    <option value="">...</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="mb-4">
                                <label for="level_lama">Grade Baru<span class="required-label"></span></label>
                                <input type="text" name="grade_baru" id="grade_baru" class="form-control border rounded-2" placeholder="Level Lama" value="V" readonly required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="mb-4">
                                <label for="divisi_lama">Divisi/Departemen Lama<span class="required-label"></span></label>
                                <select class="form-control border rounded-2" name="divisi_lama" placeholder="Jenis FPK" required>
                                    <option value="">...</option>
                                    <option value="Engineering">Engineering</option>
                                    <option value="Human Capital Management">Human Capital Management</option>
                                    <option value="KAM">KAM</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="P1">P1</option>
                                    <option value="P2">P2</option>
                                    <option value="P3">P3</option>
                                    <option value="P4">P4</option>
                                    <option value="PP2">PP2</option>
                                    <option value="PP3">PP3</option>
                                    <option value="PP4">PP4</option>
                                    <option value="Product Development">Product Development</option>
                                    <option value="QC System">QC System</option>
                                    <option value="Sales">Sales</option>
                                    <option value="Supply Chain">Supply Chain</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="mb-4">
                                <label for="divisi_baru">Divisi/Departemen Baru<span class="required-label"></span></label>
                                <select class="form-control border rounded-2" name="divisi_baru" placeholder="Jenis FPK" required>
                                    <option value="">...</option>
                                    <option value="Accounting&Tax">Accounting & Tax</option>
                                    <option value="BOD">BOD</option>
                                    <option value="Engineering">Engineering</option>
                                    <option value="Exim">Exim</option>
                                    <option value="Finance">Finance</option>
                                    <option value="Human Capital Management">Human Capital Management</option>
                                    <option value="IT">IT</option>
                                    <option value="KAM">KAM</option>
                                    <option value="Legal&Regulatory">Legal & Regulatory</option>
                                    <option value="Marketing">Marketing</option>
                                    <option value="Sales">Sales</option>
                                    <option value="Produksi">Produksi</option>
                                    <option value="QC System">QC System</option>
                                    <option value="Product Development">Product Development</option>
                                    <option value="F&A">F & A</option>
                                    <option value="MSC&Engineering">MSC & Engineering</option>
                                    <option value="OEM">OEM</option>
                                    <option value="Purchasing">Purchasing</option>
                                    <option value="Supply Chain">Supply Chain</option>
                                    <option value="Corporate Controller&Auditor">Corporate Controller & Auditor</option>
                                    <option value="QA">QA</option>
                                    <option value="Vending Machine">Vending Machine</option>
                                    <option value="PPIC">PPIC</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="mb-4">
                                <label for="status_karyawan_lama">Status Karyawan Lama<span class="required-label"></span></label>
                                <select class="form-control border rounded-2" name="status_karyawan_lama" placeholder="Jenis FPK" required>
                                    <option value="">...</option>
                                    <option value="Kontrak">Kontrak</option>
                                    <option value="Tetap">Tetap</option>
                                </select>
                            </div>
                        </div>
                    <div class="col-lg-6 col-md-6 col-12">
                            <div class="mb-4">
                                <label for="status_karyawan_baru">Status Karyawan Baru<span class="required-label"></span></label>
                                <select class="form-control border rounded-2" name="status_karyawan_baru" placeholder="Jenis FPK" required>
                                    <option value="">...</option>
                                    <option value="Kontrak">Kontrak</option>
                                    <option value="Tetap">Tetap</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="mb-4">
                                <label for="tanggal_efektif">Tanggal Efektif<span class="required-label"></span></label>
                                <input type="date" name="tanggal_efektif" id="tanggal_efektif" class="form-control border rounded-2" placeholder="Tanggal Efektif" required>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="mb-4">
                                <label for="note">Pertimbangan Perubahan</label>
                                <textarea class="form-control border rounded-2" id="note" name="note" placeholder="Pertimbangan Perubahan"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="mb-4">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <button type="submit" class="form-control border rounded-2">Submit</button>
                        </div>
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
