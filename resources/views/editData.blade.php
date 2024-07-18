@extends('template.layout')
@section('content')
<form action="{{route('pegawai.update', $Pegawai->ID)}}" method="POST">
    @csrf
    <input type="hidden" value="{{$ID}}">
    Nama: <input type="text" name="Nama" value="{{$Pegawai->Nama}}"><br>
    NIK: <input type="text" name="NIK" value="{{$Pegawai->NIK}}"><br>
    ID Departemen: <input type="number" name="id_departemen" value="{{$Pegawai->id_departemen}}" min="1" max="3"><br>
    Tanggal Lahir: <input type="date" name="tgl_lahir" value="{{$Pegawai->tgl_lahir}}"><br>
    Alamat: <input type="text" name="alamat" value="{{$Pegawai->alamat}}"><br>
    <button type="submit">Update</button>
</form>
@endsection