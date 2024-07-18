@extends('template.layout')
@section('content')
<div class="container-2">
    <form action="{{route('departemen.update', $departemen->id)}}" method="POST">
        @csrf
        <input type="hidden" value="{{$id}}">
        ID Departemen: <input type="number" name="id" value="{{$departemen->id}}"><br>
        Nama Departemen: <input type="text" name="nama_departemen" value="{{$departemen->nama_departemen}}"><br>
        <button type="submit">Update</button>
    </form>
</div>
@endsection