@extends('layouts.main')

@section('content')
<section class="membership-section section-padding" id="section_3">
    <div class="container border border-1">
        <div class="">
            <div class="col-lg-12 col-12 mb-3 mb-lg-0">
                <h4 class="mb-4 pb-lg-2">List Approval Crew</h4>
                <div class="">
                    <table id="myTable" class="table text-center data table-responsive overflow-hidden">
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
                            @foreach ($approval as $request)
                            <tr>
                                @if ($request->status == null)
                                    <td><div class="text-light pending-color">Waiting approval</div></td>
                                @elseif($request->status == 'Approve')
                                    <td><div class="text-light bg-primary ">Approved</div></td>
                                @else
                                    <td><div class="text-light bg-danger ">Rejected</div></td>
                                @endif
                                <td>{{ $request->nik }}</td>
                                <td>{{ $request->nama }}</td>
                                <td>{{ $request->jenis }}</td>
                                <td> {{date("Y-m-d",strtotime($request->created_at))}} </td>
                                <td>{{ $request->tanggal_efektif }}</td>
                                <td>
                                    <a href="/approval/{{$request->id}}/detail" class="hovertext" data-hover="Details"><div class="social-icon-link bi bi-info-circle d-inline-block col-sm-2"></div></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>


@section('script')
    {{-- datatables --}}

    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
    } );
    </script>
{{-- <script type="text/javascript">
	$(document).ready(function(){
		$('#myTable').DataTable();
	});
</script> --}}
@endsection
