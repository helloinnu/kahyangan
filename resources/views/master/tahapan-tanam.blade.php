@extends('layouts.dashboard')

@section('dashboard-content')
<div class="bg-white mt-3 p-3">
    <div class="d-flex justify-content-between">
        <h4 class="">Data Master <span class="fw-bold">Tahapan Tanam</span></h4>
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
                    <th class="text-center" >Tahapan</th>
                    <th class="text-center" >Keterangan</th>
                    <th class="text-center" style="width: 240px">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td class="text-center">TTAD</td>
                    <td class="text-center">Gunung Pasang</td>
                    <td class="d-flex gap-4 justify-content-center">
                        <a class="d-flex align-content-center fw-semibold" href="">
                            <img class="pe-1" src="{{asset('icon/action/edit.svg')}}" alt="">
                            Edit
                        </a>
                        <a class="d-flex align-content-center fw-semibold text-danger" href="">
                            <img class="pe-1" src="{{asset('icon/action/delete.svg')}}" alt="">
                            Delete
                        </a>                     
                    </td>
                </tr>
            </tbody>
        </table>        
    </div>
</div>
@endsection
