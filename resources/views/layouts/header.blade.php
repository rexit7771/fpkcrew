<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <img src="{{ asset('images/logo.png') }}" class="navbar-brand-image img-fluid " alt="" >
            <span class="navbar-brand-text ">
                FPK Crew
                <small>PT Niramas Utama</small>
            </span>
        </a>

        <div class="d-lg-none ms-auto me-3">
            <form id="logout" action="/logout" method="POST">
                    @csrf
                    <a class="btn btn-primary custom-btn custom-border-btn rounded-2" href="javascript:;" onclick="document.getElementById('logout').submit();">Logout</a>
                </form>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav" style="margin-left:300px;">
            <ul class="navbar-nav ms-lg-auto">
                <li class="">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="">
                    <a class="nav-link" href="{{ route('input') }}">Input</a>
                </li>
                <li class="">
                    <a class="nav-link" href="{{route('approval')}}">Approval</a>
                </li>
                <li class="">
                    <a class="nav-link" href="{{route('report')}}">Report</a>
                </li>
            </ul>

            <div class="d-none d-lg-block ms-lg-3 ">
                <form id="logout" action="/logout" method="POST">
                    @csrf
                    <a class="btn btn-primary custom-btn custom-border-btn rounded-2" href="javascript:;" onclick="document.getElementById('logout').submit();">Logout</a>
                </form>
            </div>
        </div>
    </div>
</nav>
