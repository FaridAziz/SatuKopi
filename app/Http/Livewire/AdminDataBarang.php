<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\barang;

class AdminDataBarang extends Component
{
    public $barang; 
    public function render()
    {
        $this->barang=barang::all();
        return view('livewire.admin-data-barang')
            ->layout('layouts.admin');
    }
}
