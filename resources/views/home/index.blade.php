@extends('layouts.main')

@section('content')
{{-- <script src="https://code.jquery.com/jquery-3.1.0.js"></script> --}}
{{-- <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script> --}}
<section class="membership-section section-padding" id="section_3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12 mb-3 mb-lg-0">
                <h4 class="mb-4 pb-lg-2">List Crew</h4>
                <div class="table-responsive">
                    <table class="table text-center data" id="dttable">
                        <thead>
                            <tr>
                                <th>Status</th>
                                <th>NIK</th>
                                <th>Nama Karyawan</th>
                                <th>Jenis Perubahan</th>
                                <th>Tgl Pengajuan</th>
                                <th>Tgl Efektif</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($fpk_req as $request)
                            <tr>
                                @if ($request->full_approve === 0)
                                    <td><div class="text-light bg-danger ">Rejected</div></td>
                                @elseif($request->full_approve === 1)
                                    <td><div class="text-light bg-primary ">Approved</div></td>
                                @else
                                    <td><div class="text-light pending-color">Waiting approval</div></td>
                                @endif
                                <td>{{ $request->nik }}</td>
                                <td>{{ $request->nama }}</td>
                                <td>{{ $request->jenis }}</td>
                                <td> {{date("Y-m-d",strtotime($request->created_at))}} </td>
                                <td>{{ $request->tanggal_efektif }}</td>
                                <td>
                                    @if ($request->next_approval <> NULL)
                                    <a href="/{{$request->id}}/edit" class="hovertext" data-hover="Edit"><div class="social-icon-link bi bi-pencil-square d-inline-block col-sm-2 "></div> </a>
                                    @endif
                                    <a href="/{{$request->id}}/delete"\ onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="hovertext" data-hover="Delete"><div class="social-icon-link bi bi-trash3-fill d-inline-block col-sm-2"></div></a>
                                    <a href="/{{$request->id}}/detail" class="hovertext" data-hover="Details"><div class="social-icon-link bi bi-info-circle d-inline-block col-sm-2"></div></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="modal" tabindex="-1">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Modal title</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Modal body text goes here.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
{{-- <script>
    $(document).ready(function(){
        $('#tabel-data').DataTable();
    });
</script> --}}
@endsection
