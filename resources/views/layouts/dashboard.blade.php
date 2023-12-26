@extends('layouts.app')

@section('content')
<div class="p-3" 
    style="
        background-color: rgba(220, 229, 209, 1);
        background-image: url('{{asset('img/bg-dashboard.png')}}');
        background-repeat: no-repeat;      
        background-size: 100% auto;  
        background-attachment: fixed;
        "    >
    <div class="row px-3 h-100">
        <aside class="rounded-4 bg-white col-2 p-2 h-100" >
            <div class="p-1">
                <img class="w-100 pe-3" class="text-center" src="{{asset ('img/logo.png')}}" alt="">
            </div>
            <hr class="hr-logo">
            <nav class="mt-4">
                <ul class="p-0">
                    <li class="p-1">
                        <a class="px-3 py-2 d-flex gap-2 rounded-3 align-content-center fs-6 text-secondary" href="/dashboard">
                            <img src="{{asset('icon/dashboard.svg')}}" alt="">
                            Dashboard
                        </a>
                    </li>
                    <li class="p-1">
                        <a class="px-3 py-2 d-flex gap-2 rounded-3 align-content-center fs-6 text-secondary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <img src="{{asset('icon/data-master.svg')}}" alt="">
                            Data Master
                            <img class="" src="{{asset('icon/collaps.svg')}}" alt="">
                        </a>
                    </li>
                    <ul class="collapse" id="collapseExample">
                        <li class="p-1">
                            <a class="pe-3 py-2 d-flex gap-2 rounded-3 align-content-center fs-6 text-secondary" href="/master-perkebunan">
                                <img src="{{asset('icon/master-perkebunan.svg')}}" alt="">
                                Master Perkebunan
                            </a>
                        </li>
                        <li class="p-1">
                            <a class="pe-3 py-2 d-flex gap-2 rounded-3 align-content-center fs-6 text-secondary" href="/master-afdeling">
                                <img src="{{asset('icon/master-afdeling.svg')}}" alt="">
                                Master Afdeling
                            </a>
                        </li>
                        <li class="p-1">
                            <a class="pe-3 py-2 d-flex gap-2 rounded-3 align-content-center fs-6 text-secondary" href="/master-blok">
                                <img src="{{asset('icon/master-blok.svg')}}" alt="">
                                Master Blok
                            </a>
                        </li>
                        <li class="p-1">
                            <a class="pe-3 py-2 d-flex gap-2 rounded-3 align-content-center fs-6 text-secondary" href="/master-komd-utama">
                                <img src="{{asset('icon/master-komd-utama.svg')}}" alt="">
                                Master Komd. Utama
                            </a>
                        </li>
                        <li class="p-1">
                            <a class="pe-3 py-2 d-flex gap-2 rounded-3 align-content-center fs-6 text-secondary" href="/master-komd-sekunder">
                                <img src="{{asset('icon/master-komd-sekunder.svg')}}" alt="">
                                Master Komd. Sekunder
                            </a>
                        </li>
                        <li class="p-1">
                            <a class="pe-3 py-2 d-flex gap-2 rounded-3 align-content-center fs-6 text-secondary" href="/master-tahapan-tanam">
                                <img src="{{asset('icon/master-tahapan-tanam.svg')}}" alt="">
                                Master Tahapan Tanam
                            </a>
                        </li>
                        <li class="p-1">
                            <a class="pe-3 py-2 d-flex gap-2 rounded-3 align-content-center fs-6 text-secondary" href="/master-pengguna">
                                <img src="{{asset('icon/master-pengguna.svg')}}" alt="">
                                Master Pengguna
                            </a>
                        </li>
                    </ul>
                    
                    <h6 class="fw-bold text-secondary opacity-50 p-1 mt-4 mb-2 offset-1 fs-6">KLASIFIKASI DATA</h6>
                    <li class="p-1">
                        <a class="fs-5 px-3 py-2 d-flex gap-2 rounded-3 align-content-center fs-6 text-secondary" href="/klasifikasi-komd-utama">
                            <img src="{{asset('icon/komd-utama.svg')}}" alt="">
                            Klasifikasi Komd. Utama
                        </a>
                    </li>
                    <li class="p-1">
                        <a class="px-3 py-2 d-flex gap-2 rounded-3 align-content-center fs-6 text-secondary" href="/klasifikasi-komd-sek">
                            <img src="{{asset('icon/komd-sekunder.svg')}}" alt="">
                            Klasifikasi Komd. Sek
                        </a>
                    </li>                    

                    <h6 class="fw-bold text-secondary opacity-50 p-1 mt-4 mb-2 offset-1 fs-6">UPDATE DATA</h6>
                    <li class="p-1">
                        <a class="px-3 py-2 d-flex gap-2 rounded-3 align-content-center fs-6 text-secondary" href="/update-data">
                            <img src="{{asset('icon/update-data-komoditas.svg')}}" alt="">
                            Update Data Komoditas
                        </a>
                    </li>
                    <li class="p-1">
                        <a class="px-3 py-2 d-flex gap-2 rounded-3 align-content-center fs-6 text-secondary" href="/histori-update">
                            <img src="{{asset('icon/histori-update.svg')}}" alt="">
                            Histori Update
                        </a>
                    </li>
                    <h6 class="fw-bold text-secondary opacity-50 p-1 mt-4 mb-2 offset-1 fs-6">VALIDASI</h6>
                    <li class="p-1">
                        <a class="px-3 py-2 d-flex gap-2 rounded-3 align-content-center fs-6 text-secondary" href="/validasi">
                            <img src="{{asset('icon/validasi.svg')}}" alt="">
                            validasi Data
                        </a>
                    </li>
                    <li class="p-1">
                        <a class="px-3 py-2 d-flex gap-2 rounded-3 align-content-center fs-6 text-secondary" href="/histori-validasi">
                            <img src="{{asset('icon/histori-validasi.svg')}}" alt="">
                            Histori Validasi
                        </a>
                    </li>
                </ul>
            </nav>
        </aside >
        <div class="col-10 ps-3">
            <div class="d-flex justify-content-between">
                <div>
                    <p class="mb-1 text-white">Sistem Informasi Manajemen Aset dan Hasil Agrikultur</p>
                    <h5 class="fw-bold text-white" style="letter-spacing: 4px">SIMAHA</h5>
                </div>
                <a class="d-flex gap-2 align-self-center" href="">
                    <img src="{{asset('icon/people.svg')}}" alt="">
                    <h6 class="m-0 text-white fw-semibold">Heri</h6>
                </a>
            </div>
            <div class="">
                @yield('dashboard-content')
            </div>
        </div>
    </div>
</div>

@endsection