@extends('layout')

@section('content')
    <h1>Tambah Merk Hp</h1>
    
    <form action="{{ route('hp.store') }}" method="post">
        @csrf
        <div>
            <label for="hp">Merk Hp</label>
            <input type="text" name="hp" id="hp" placeholder="Merk" required>
        </div>
        <br>
        <div>
            <label for="keteranan">keterangan</label>
            <textarea name="keterangan" id="keterangan" placeholder="Keterangan Merk" required></textarea>
        </div>
        <br>
        <button type="submit">Simpan</button>
    </form>
@endsection