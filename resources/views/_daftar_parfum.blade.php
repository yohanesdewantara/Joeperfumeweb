@extends('layouts.main')
@section('nama_parfum', 'Perfume')
@section('artikel')
<style>
    body {
        font-family: 'Arial', sans-serif;
    }

    h1 {
        font-family: 'Slaytanic', serif;
    }
</style>
<h1>Joe Perfume</h1>
<div class="card">
    <div class="card-header">
        <a href="/_daftar_parfum/add-form" class="btn btn-primary"><i class="bi bi-plus-square"></i>Perfume</a>
    </div>
    <div class="card-body">
    
        @if (@session('alert'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>{{session('alert')}}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nama Parfum</th>
                    <th>Jenis</th>
                    <th>Aroma</th>
                    <th>Harga</th>
                    <th>Ukuran</th>
                    <th>Poster</th>
                    <th>Aksi</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($parfum as $idx => $m)


                    <tr>
                        <td>{{$idx + 1}}</td>
                        <td>{{$m->nama_parfum}}</td>
                        <td>{{$m->jenis_parfum}}</td>
                        <td>{{$m->Aroma}}</td>
                        <td>{{$m->harga}}</td>
                        <td>{{$m->ukuran}}</td>
                      
                        <td>
                            <img src="{{asset('/storage/' . $m->poster)}}" alt="{{$m->poster}}" height="150" width="150">
                        </td>
                        <td> 
                            <a href="/edit-form/{{$m->id}}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                            <a href="/delete/{{ $m->id }}" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                        </td>

                    </tr>
                @endforeach

            </tbody>

        </table>
    </div>
</div>
<p>Ini adalah halaman Artikel</p>

@endsection