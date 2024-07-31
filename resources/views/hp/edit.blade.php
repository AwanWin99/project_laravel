@extends('layout')

@section('content')
    <h1>Edit Merk Hp</h1>
    
    <form action="{{ route('hp.update', $hp->id) }}" method="post">
        @method('put')
        @csrf
        <div>
            <label for="hp">Hp</label>
            <input type="text" name="hp" id="hp" placeholder="skin" value="{{ $hp->hp }}" required>
        </div>
        <br>
        <div>
            <label for="hp">keterangan</label>
            <textarea name="keterangan" id="keterangan" placeholder="keterangan skin" required>{{ $hp->keterangan }}</textarea>
        </div>
        <br>
        <button type="submit">Simpan</button>
    </form>
@endsection