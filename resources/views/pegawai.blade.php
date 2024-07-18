@extends('template.layout')
@section('content')
<div class="container-2">
    <form action="/simpanData" method="POST">
        @csrf
        Nama: <input type="text" name="Nama"><br>
        NIK: <input type="text" name="NIK"><br>
        Departemen: <select name="id_departemen">
            <option value="0" disabled selected>Pilih</option>
            @foreach ($departemen as $data)
            <option value="{{$data->id}}">{{$data->nama_departemen}}</option>
            @endforeach
        </select><br>
        Tanggal Lahir: <input type="date" name="tgl_lahir"><br>
        Alamat: <input type="text" name="alamat"><br>
        <input type="submit">
    </form>
</div>
@endsection