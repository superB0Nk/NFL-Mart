@extends('layouts.app')
@section('tittle')
    Createadmin
@endsection
@section('content')
    <h1>Admin</h1><nav aria-label="breadcrumb"></nav>
        <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="#">Dasboard</a></li>
                              <li class="breadcrumb-item"><a href="#">Admin</a></li>
                              <li class="breadcrumb-item active" aria-current="page">Library</li>
                    </ol>
          </nav>
<div class="card">
          <div class="card-header">
                    Data Admin GYM
                    <div class="col md-6 text-end">
                              <a class="btn btn-primary" href="/creadmin" role="button">Tambah Admin</a>
                    </div>
          </div>

</div>
<div class="mb-3 col-md-6">
          <label for="nama"class="form-label">Nama Admin</label>
          <input type="text" name="nama_admin" id="nm" class="form-control"
          placeholder="masukan alamat admin">
</div>
<form action="/saveadmin" class="row" method="post" enctype="multipart/form-data">
@csrf
<div class="mb-3 col-md-6">
          <label for="jk"class="form-label">Jenis Kelamin</label>
          <select name="jenis_kelamin" id="jk" class="form-select">
          <option value="">--Pilih Jenis Kelamin--</option>
          <option value="laki-laki">Laki-Laki</option>
          <option value=" perempuan">Perempuan</option>
          </select>
</div>

<div class="mb-3 col-md-6">
    <label for="nohp_admin" class="form-label">no hp admin</label>
    <input type="text" name="no hp admin" id="nohp" class="form-control">
</div>

<div class="mb-3 col-md-6">
        <label for="email" class="form-label">email</label>
        <input type="email" name="email" id="email" class="form-control">
</div>


<div class="mb-3 col-md-6">
            <label for="password" class="form-label">password</label>
            <input type="password" name="password" id="psw" class="form-control">
</div>

<div class="mb-3 col-md-6">
                <label for="Alamat" class="form-label">Alamat</label>
                <input type="text" name="alamat" id="Alamat" class="form-control">
</div>

<div class="mb-3">
                    <label for="jbt" class="form-label">Jabatan</label>
                    <input type="text" name="jbt" id="jabatan" class="form-control">
</div>
<div class="mb-3">
          <label for="foto" class="form-label">foto</label>
          <input type="file" name="foto" id="foto" class="form-control" accept="*/image">
</div>


@endsection