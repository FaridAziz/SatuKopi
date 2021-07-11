<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AdminInvoice extends Component
{
    public function render()
    {
        return view('livewire.admin-invoice')
            ->layout('layouts.admin');
    }
}
