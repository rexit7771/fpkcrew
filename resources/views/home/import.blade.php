@extends('layouts.main')

@section('content')
<section class="contact-section section-padding" id="section_5">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-12">
            </div>
            <div class="col-lg-8 col-12">
                <form action="{{ route('employee') }}" method="post" class="custom-form contact-form" role="form" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="">
                    <h4 class="mb-4 pb-2">Import Employee</h4>
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="mb-4">
                                <label for="floatingInput">Import<span class="required-label"></span></label>
                                <input type="file" name="file" class="form-control" required>
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
@endsection
