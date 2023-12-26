@extends('layouts.dashboard')

@section('dashboard-content')
<div class="bg-white mt-3 p-3 vh-100">
    <div class="d-flex justify-content-between">
        <h4 class="fw-semibold">Data User Pegawai Perkebunan</h4>
        <a href="/tambah-pengguna" class="btn btn-success rounded-3 d-flex gap-2 px-4">
            <img src="{{asset('icon/add.svg')}}" alt="">
            <p class="m-0">Tambah Pengguna</p>
        </a>
    </div>
    <div>
        
    </div>
</div>
@endsection
