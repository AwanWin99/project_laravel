@extends('layout')

@section('content')
    <h1>Data Hp</h1>
    <a href="{{ route('hp.create') }}">Tambah</a>
    <br>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Merk</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($hps as $hp)
            <tr>
                <td>{{ $hp->id }}</td>
                <td>{{ $hp->hp }}</td>
                <td>{{ $hp->keterangan }}</td>
                <td>
                <a href="{{ url("/hp/{$hp->id}") }}">Edit</a>
                ||
                    <form action="{{ url("/hp/{$hp->id}") }}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    @endsection