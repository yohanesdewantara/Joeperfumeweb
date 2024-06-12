@extends('layouts.main')
@section('nama_parfum', 'Form Add Perfume')
@section('artikel')
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            {{--Form add movies disini--}}
            <form action="/save" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Nama Parfum</label>
                    <input type="nama_parfum" name="nama_parfum" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Jenis</label>
                    <select name="jenis_parfum" class="form-control">
                        <option value="0">--Pilih Jenis--</option>
                        <option value="EDT">--EDT--</option>
                        <option value="EDP">--EDP--</option>
                        <option value="Extrait">--Extrait--</option>
                       
                    </select>
                </div>
                <div class="form-group">
                    <label>Aroma</label>
                    <select name="Aroma" class="form-control">
                        <option value="0">--Pilih Aroma--</option>
                        <option value="spicy">--spicy--</option>
                        <option value="aquatic">--aquatic--</option>
                        <option value="woody">--woody--</option>
                        <option value="citrus">--citrus--</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Harga</label>
                    <input type="harga" name="harga" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Ukuran</label>
                    <select name="ukuran" class="form-control">
                        <option value="0">--Pilih Ukuran--</option>
                        <option value="30 ml">--30 ml--</option>
                        <option value="5 ml">--5 ml--</option>
                        
                    </select>
                </div>
                <div class="form-group">
                    <label>Poster</label>
                    <input type="file" name="poster" class="form-control-file" accept="image/*">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark">SIMPAN</button>
                </div>
            </form>
        </div>
    </div>  
    @endsection