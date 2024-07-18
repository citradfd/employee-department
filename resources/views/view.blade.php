@extends('template.layout')

@section('content')

<table style="width:100%">
    <tr>
        <th>ID Departemen</th>
        <th>Nama Departemen</th>
        <th>Aksi</th>
    </tr>
    @foreach ($departemen as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->nama_departemen}}</td>
            <td class="icon">
                <a href="/edit/{{$data->id}}"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="/delete/{{$data->id}}"><i class="fa-solid fa-trash"></i></a>
            </td>
        </tr>
    @endforeach
</table>
@endsection