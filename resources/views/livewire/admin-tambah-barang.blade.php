@extends('layouts.admin')

@section('admin')
<div>
    <h5> <i class="fa fa-tachometer-alt"></i> Tambah Data Barang</h5>
    <hr>
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

<form wire:submit.prevent="store">
        {{ csrf_field() }}
            <div class="form-group">
                <label>Nama Barang</label>
                <input wire:model="nama_brg" type="text" class="form-control input-sm">
            </div> 
            <div class="form-group mt-2">
                <label>Keterangan</label>
                <input wire:model="keterangan" type="text" class="form-control input-sm">
            </div>
            <div class="form-group mt-2">
                <label>Kategori</label>
                <select wire:model="kategori" class="form-control">
                  <option value="Makanan">Makanan</option>
                  <option value="Minuman">Minuman</option>
                </select>
            </div>
            <div class="form-group mt-2">
                <label>Harga</label>
                <input wire:model="harga" type="text" class="form-control input-sm">
            </div>
            <div class="form-group mt-2">
                <label>Stok</label>
                <input wire:model="stock" type="text" class="form-control input-sm">
            </div> 

            <div class="form-group mt-2">
                <label>Gambar Produk</label><br>
                <input wire:model="gambar" type="text" class="form-control input-sm">
            </div>

        <div class="form-group mt-2">
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>

    </form>
</div>
@endsection
