@extends('template.layout')

@section('content')

<table style="width:100%">
    <tr>
        <th>Nama</th>
        <th>NIK</th>
        <th>Departemen</th>
        <th>Tanggal Lahir</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    @foreach ($Pegawai as $data)
        <tr>
            <td>{{$data->Nama}}</td>
            <td>{{$data->NIK}}</td>
            <td>{{$data->nama_departemen}}</td>
            <td>{{$data->tgl_lahir}}</td>
            <td>{{$data->alamat}}</td>
            <td class="icon">
                <a href="/editData/{{$data->ID}}"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="/hapusData/{{$data->ID}}"><i class="fa-solid fa-trash"></i></a>
            </td>

        </tr>
    @endforeach
</table>
@endsection