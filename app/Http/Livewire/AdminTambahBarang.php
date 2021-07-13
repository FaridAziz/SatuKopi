<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\barang;

class AdminTambahBarang extends Component
{
    public $nama_brg;

    public function render()
    {
        return view('livewire.admin-tambah-barang')
            ->layout('layouts.admin');
    }

    public function store() { 
        dd('asda');

        // $this->validate([ 
        //     'nama_brg' => 'required', 
        //     'keterangan' => 'required',
        //     'kategori' => 'required',
        //     'harga' => 'required',
        //     'stok' => 'required', 
        //     'gambar' => 'required'
        // ]); 
        // barang::create([ 
        //     'nama_brg' => $this->nama_brg, 
        //     'keterangan' => $this->keterangan,
        //     'kategori' => $this->kategori,
        //     'harga' => $this->harga,
        //     'stok' => $this->stok, 
        //     'gambar' => $this->gambar,
        // ]); 
        // $this->resetInput(); 
    }
}
