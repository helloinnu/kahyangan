@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row vh-100 justify-content-center">
        <div class="col-4 align-self-center">
            <div class="p-4">

                <div class="">
                    <h2 class="mb-4 fw-semibold">Selamat Datang</h2>
                    <p class="fs-5 text-secondary">Sistem Manajemen Aset Perumda Perkebunan Kahyangan <br> JEMBER</p>
                    <form class="mt-4" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <div class="">
                                <input id="name" type="name" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" required autocomplete="name" autofocus placeholder="Username">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="">
                                <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        <div class="mt-5">
                            <div class="">
                                <button type="submit" class="btn btn-lg btn-success w-100">
                                    {{ __('Sign in') }}
                                </button>

                                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
                            </div>
                        </div>
                    </form>
                    <p class="fs-5 text-secondary text-center mt-4">Belum memiliki akun? <span class="fw-semibold text-success">Silakan menghubungi admin Anda</span></p>
                </div>
            </div>
        </div>
        <div class="col-8 align-self-center d-flex justify-content-center">
            <img src="{{ asset('img/login-bg.png') }}" alt="">
        </div>
    </div>
</div>
@endsection
