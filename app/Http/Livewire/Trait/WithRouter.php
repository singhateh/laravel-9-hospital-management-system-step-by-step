<?php
namespace App\Http\Livewire\Trait;

use Illuminate\Support\Facades\Request;

trait WithRouter
{

    public function mountWithRouter()
    {
        $this->currentUrl = Request::route()->getName();
    }
}
