@extends('layouts.main')

@section('content')
<section class="membership-section section-padding" id="section_3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12 mb-3 mb-lg-0">
                <div class="row ">
                    <form action="{{route("export")}}" method="POST">
                @csrf
                <h4 class="mb-4 col-10 d-inline-block">List Laporan Crew</h4>
                
                
                
                
                <!-- Trigger/Open The Modal -->
                <a href="#modal_tanggal" data-toggle="modal" class="mb-4 m-2 ms-5 col-1 d-inline-block">
                    <button id="myBtn" class="button-export text-light border rounded-2 btn custom-btn">Export</button>
                </a>
                {{-- <button id="myBtn">Open Modal</button> --}}

                <!-- The Modal -->
                <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content text-light">
                    <div class="modal-header" style="background-color: var(--secondary-color);">
                    <h6 style="color: white; padding: 10px 0;">Pilih Tanggal Input</h6>
                    <span class="close">&times;</span>
                </div>
                    
                <div class="modal-body">
                    <p class="mx-2">Dari: </p>
                    <input type="date" class="mx-2 mb-3 py-2 modal-date col-11 border border-0" style="background-color: #F4F1DE" name="dari_tanggal_data" id="dari_tanggal_data">
                    <p class="mx-2  mt-3">Sampai: </p>
                    <input type="date" class="mx-2 mb-5 py-2 modal-date col-11 border border-0" style="background-color: #F4F1DE" name="sampai_tanggal_data" id="sampai_tanggal_data">
                </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn custom-btn custom-border-btn rounded-2">Submit</button>
                    </div>
                </div>

                </div>  


                </form>
                </div>
                <div class="">
                    <table class="table text-center table-responsive overflow-hidden mt-2" id="myTable">
                        <thead>
                            <tr>
                                <th>Status</th>
                                <th>NIK</th>
                                <th>Nama Karyawan</th>
                                <th>Jenis Perubahan</th>
                                <th>Tgl Pengajuan</th>
                                <th>Tgl Efektif</th>
                                
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

{{-- <script>
    $(document).ready(function() {
    $('#example').DataTable( {
        "order": [[ 3, "desc" ]]
    } );
} )
</script> --}}

{{-- <div class="modal fade" id="modal_tanggal" tabindex="-1" role="dialog" aria-labelledby="exportModalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title" id="modal">Edit Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/update') }}" method="post">
                    @csrf
                    <div class="row mb-4">
                        <input type="hidden" name="idEdit" id="idEdit" value="">
                    </div>
                    <div class="col md-6">
                        <label class="title">Status</label>
                        <select name="statusEdit" id="statusEdit" class="form-control">
                            <option value="Open">Open</option>
                            <option value="On Progress">On Progress</option>
                            <option value="Done">Done</option>
                        </select>
                    </div>
                    <button class="btn btn-primary mt-3 col-md-5">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div> --}}


<script>
    /*---------------------------------------
        Modal mentahan W3
-----------------------------------------*/
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

/*---------------------------------------
    MODAL BOOTSTRAP
-----------------------------------------*/
var exampleModal = document.getElementById('exampleModal')
exampleModal.addEventListener('show.bs.modal', function (event) {
  // Button that triggered the modal
  var button = event.relatedTarget
  // Extract info from data-bs-* attributes
  var recipient = button.getAttribute('data-bs-whatever')
  // If necessary, you could initiate an AJAX request here
  // and then do the updating in a callback.
  //
  // Update the modal's content.
  var modalTitle = exampleModal.querySelector('.modal-title')
  var modalBodyInput = exampleModal.querySelector('.modal-body input')

  modalTitle.textContent = 'New message to ' + recipient
  modalBodyInput.value = recipient
})

// var myModal = document.getElementById('myModal')
// var myInput = document.getElementById('myInput')

// myModal.addEventListener('shown.bs.modal', function () {
//   myInput.focus()
// })


</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script> --}}