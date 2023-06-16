<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>FPK Crew | INACO</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('css/templatemo-tiya-golf-club.css') }}" rel="stylesheet">
    </head>

<body>
    <section class="membership-section background-login">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-5 col-12 mx-auto">
                    <form action="{{ route('login') }}" method="post" class="custom-form membership-form shadow-lg" role="form">
                        @csrf
                        <h5 class="text-white text-center mb-3">Aplikasi Perubahan Status Karyawan Level Crew</h5>
                        <p class="text-white mb-4 text-center">Masuk Ke Sistem</p>
                        <div class="member-login-form-body">
                            <div class="mb-4">
                                <label class="form-label mb-2 text-white" for="email">Email</label>
                                <input type="text" name="email" id="email" class="form-control border rounded-2 @error('email') is-invalid @enderror" placeholder="your@email.com" required value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label class="form-label mb-2 text-white" for="password">Password</label>
                                <input type="password" name="password" id="password" pattern="[0-9a-zA-Z]{4,10}" class="form-control border rounded-2" placeholder="Password" required>
                            </div>

                            {{-- <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label text-white" for="flexCheckDefault">
                                    Remember me
                                </label>
                            </div> --}}

                            <div class="col-lg-5 col-md-7 col-8 mx-auto">
                                <button type="submit" class="form-control border rounded-2">Login</button>
                            </div>

                            <div class="text-center my-4">
                                <a href="#" class="text-white">Forgotten password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/click-scroll.js') }}"></script>
    <script src="{{ asset('js/animated-headline.js') }}"></script>
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>
