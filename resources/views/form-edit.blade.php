@extends('layouts.main')
@section('title', 'Form Edit Parfum')
@section('artikel')
<div class="card">
    <div class="card-header"></div>
    <div class="card-body">
        {{--Form add parfum disini--}}
        <form action="/update/{{$parfum->id}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Nama Parfum</label>
                <input type="nama_parfum" value="{{$parfum->nama_parfum}}" name="nama_parfum" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Jenis</label>
                <select name="jenis_parfum" class="form-control">
                    <option value="0">--Pilih Jenis--</option>
                    <option value="EDT" {{($parfum->jenis_parfum =="EDT") ? "Selected":""}}>--EDT--</option>
                    <option value="EDP" {{($parfum->jenis_parfum =="EDP") ? "Selected":""}}>--EDP--</option>
                    <option value="Extrait" {{($parfum->jenis_parfum =="Extrait") ? "Selected":""}}>--Extrait--</option>
                </select>
            </div>
            <div class="form-group">
                <label>Aroma</label>
                <select name="Aroma" class="form-control">
                    <option value="0">--Pilih Aroma--</option>
                    <option value="spicy" {{($parfum->Aroma =="spicy") ? "Selected":""}}>--spicy--</option>
                    <option value="aquatic" {{($parfum->Aroma =="aquatic") ? "Selected":""}}>--aquatic--</option>
                    <option value="woody" {{($parfum->Aroma =="woody") ? "Selected":""}}>--woody--</option>
                    <option value="citrus" {{($parfum->Aroma =="citrus") ? "Selected":""}}>--citrus--</option>
                </select>
            </div>
            <div class="form-group">
                <label>Harga</label>
                <input type="harga" value="{{$parfum->harga}}" name="harga" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Ukuran</label>
                <select name="ukuran" class="form-control">
                    <option value="0">--Pilih Ukuran--</option>
                    <option value="30 ml" {{($parfum->ukuran =="30 ml") ? "Selected":""}}>--30 ml--</option>
                    <option value="5 ml" {{($parfum->ukuran =="5 ml") ? "Selected":""}}>--5 ml--</option>

                </select>
            </div>
            <div class="form-group">
                <img src="{{asset('/storage/' . $parfum->poster)}}" alt="{{$parfum->poster}}" height="80" width="80">
                    
                </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">SIMPAN</button>
            </div>
        </form>
    </div>
</div>
@endsection