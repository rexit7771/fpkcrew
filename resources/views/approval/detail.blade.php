@extends('layouts.main')

@section('content')
<section class="events-section section-padding" id="section_2">
    <div class="container">
        <div class="row">
            @foreach ($fpk_req as $request)

            <div class="col-lg-12 col-12">
                <h2 class="mb-lg-5 mb-4">Form Pembaharuan Karyawan</h2>
            </div>
            <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                <div class="custom-block-info">
                    <div class="mt-4 pt-3">
                        <div class="d-flex flex-wrap align-items-center mb-1">
                            <span class="custom-block-span">NIK:</span>
                            <p class="mb-0">{{$request->nik}} </p>
                        </div>
                        <div class="d-flex flex-wrap align-items-center mb-1">
                            <span class="custom-block-span">Nama Karyawan:</span>
                            <p class="mb-0">{{$request->nama}} </p>
                        </div>
                        <div class="d-flex flex-wrap align-items-center">
                            <span class="custom-block-span">Jenis Perubahan:</span>
                            <p class="mb-0">{{$request->jenis}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="custom-block-info">
                    <div class="mt-4 pt-3">
                        <div class="d-flex flex-wrap align-items-center mb-1">
                            <span class="custom-block-span">Tanggal Pengajuan:</span>
                            <p class="mb-0"> {{date("Y-m-d",strtotime($request->created_at))}}</p>
                        </div>
                        <div class="d-flex flex-wrap align-items-center mb-1">
                            <span class="custom-block-span tgl-efektif-hover" data-hover=" Tanggal mulainya pergantian jabatan ">Tanggal Efektif:</span>
                            <p class="mb-0">{{$request->tanggal_efektif}}</p>
                        </div>
                        <div class="d-flex flex-wrap align-items-center">
                            <span class="custom-block-span">Catatan:</span>
                            <p class="mb-0">{{$request->note}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="mb-4 pb-lg-2"></h4>
            <h4 class="border-top mb-6 pb-lg-2"></h4>
            <div class="col-lg-8 col-12 mb-3 mb-lg-0">
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead>
                            <tr>
                                <th>Perubahan</th>
                                <th>Lama</th>
                                <th>Baru</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($fpk_req as $request)
                                <tr>
                                <th scope="row" class="text-start">Jabatan</th>
                                <td>{{$request->jabatan_lama}}</td>
                                <td>{{$request->jabatan_baru}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">Golongan</th>
                                <td>{{$request->level_lama}}</td>
                                <td>{{$request->level_baru}}</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">Divisi</th>
                                <td>{{$request->divisi_lama}}</td>
                                <td>{{$request->divisi_baru}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-4 col-12 mx-auto">
                <form action="{{route('approval_status')}}" method="post" class="custom-form membership-form shadow-lg" role="form">
                    @csrf
                    <input type="hidden" name="id" value="{{$request->id}}">
                    <h4 class="text-white mb-4">Approval</h4>
                    <div class="form-floating">
                        <select class="form-control text-black" name="status" placeholder="Jenis FPK">
                            <option>--</option>
                            <option value="Approve">Approve</option>
                            <option value="Reject">Reject</option>
                        </select>
                        <label for="floatingInput">Status</label>
                    </div>
                    <div class="form-floating">
                        <textarea class="form-control" id="note" name="note" placeholder="Describe message here"></textarea>
                        <label for="floatingTextarea"> Note</label>
                    </div>
                    <button type="submit" class="form-control border rounded-2">Submit</button>
                </form>
                </div>
            <h4 class="mb-4 pb-lg-2"></h4>
            @endforeach
        </div>
    </div>
</section>
@endsection
