@extends('template.layout')
@section('content')
<div class="container-2">
    <form action="/add" method="POST">
        @csrf
        ID Departemen: <input type="number" name="id" min="1" max="3"><br>
        Nama Departemen: <input type="text" name="nama_departemen"><br>
        <input type="submit">
    </form>
</div>
@endsection