<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminDataBarang extends Component
{
    public function render()
    {
        return view('livewire.admin-data-barang')
            ->layout('layouts.admin');
    }
}
