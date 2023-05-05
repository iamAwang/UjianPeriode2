@extends('layouts.app')
@section('content')
<form action="<?php @$edit!=null? printf(route('laptop.update',[$edit->id])) : printf(route('laptop.store'))?>" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="nama hotel" name="name" value="<?php if(@$edit!=null) printf($edit->name)?>"/>
        <label for="floatingInput">Nama Laptop</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="alamat hotel" name="series" value="<?php if(@$edit!=null) printf($edit->series)?>"/>
        <label for="floatingInput">Series Laptop</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="rating hotel" name="brand" value="<?php if(@$edit!=null) printf($edit->brand)?>"/>
        <label for="floatingInput">Merek Laptop</label>
    </div>
    <div class="form-floating mb-3">
        <input type="file" class="form-control" id="floatingInput" placeholder="rating hotel" name="gambar"/><?php if(@$edit!=null) printf($edit->gambar)?>
        <label for="floatingInput">Gambar Laptop</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="rating hotel" name="harga" value="<?php if(@$edit!=null) printf($edit->harga)?>"/>
        <label for="floatingInput">Harga Laptop</label>
    </div>
    <button type="submit" class="btn btn-secondary btn-lg" style="float: right">Tambahkan</button>
</form>
@endsection