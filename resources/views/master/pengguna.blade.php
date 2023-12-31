@extends('layouts.dashboard')

@section('dashboard-content')
<div class="bg-white mt-3 p-3">
    <div class="d-flex justify-content-between">
        <h4 class="fw-bold">Data User Pegawai Perkebunan</h4>
        <a href="/tambah-pengguna" class="btn btn-success rounded-3 d-flex gap-2 px-4">
            <img src="{{asset('icon/add.svg')}}" alt="">
            <p class="m-0 fw-semibold">Tambah Pengguna</p>
        </a>
    </div>
    <div class="mt-3">
        <table id="data-user-pegawai" class="cell-border" style="width:100%; padding-top: 8px">
            <thead class="bg-success bg-opacity-25" style="border: 0 0 0 5px">
                <tr class="text-center">
                    <th class="text-center" style="width: 16px">Nomor</th>
                    <th class="text-center" >Nama</th>
                    <th class="text-center" >Kebun</th>
                    <th class="text-center" >Username</th>
                    <th class="text-center" >Alamat</th>
                    <th class="text-center" >No. HP</th>
                    <th class="text-center" style="width: 44px">Aktif</th>
                    <th class="text-center" style="width: 44px">Admin</th>
                    <th class="text-center" style="width: 240px">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td class="text-center">Sukimin</td>
                    <td class="text-center">Sumber Wadung</td>
                    <td class="text-center">sukimin</td>
                    <td class="text-center">Surabaya</td>
                    <td class="text-center">085452569873</td>
                    <td class="text-center" class="text-center">
                        <img src="{{asset('icon/action/active.svg')}}" alt="">
                        {{-- <img src="{{asset('icon/action/non-active.svg')}}" alt=""> --}}
                    </td>
                    <td class="text-center">
                        <img src="{{asset('icon/action/active-admin.svg')}}" alt="">
                        {{-- <img src="{{asset('icon/action/non-active.svg')}}" alt=""> --}}
                    </td>
                    <td class="d-flex gap-4 justify-content-center">
                        <a class="d-flex align-content-center fw-semibold" href="">
                            <img class="pe-1" src="{{asset('icon/action/edit.svg')}}" alt="">
                            Edit
                        </a>
                        <a class="d-flex align-content-center fw-semibold text-danger" href="">
                            <img class="pe-1" src="{{asset('icon/action/delete.svg')}}" alt="">
                            Delete
                        </a>
                        <a class="d-flex align-content-center fw-semibold text-success" href="">
                            <img class="pe-1" src="{{asset('icon/action/reset.svg')}}" alt="">
                            Reset Pass
                        </a>
                        
                    </td>
                </tr>
            </tbody>
        </table>        
    </div>
</div>
@endsection
