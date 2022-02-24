<?php
namespace App\Http\Livewire\Trait;


trait WithSearch
{

    public function mountWithSearch()
    {
        $this->isSearchEnabled = true;
    }
}
