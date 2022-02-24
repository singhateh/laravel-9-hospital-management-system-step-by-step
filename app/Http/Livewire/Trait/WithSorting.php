<?php
namespace App\Http\Livewire\Trait;


trait WithSorting
{

    public function mountWithSorting()
    {
        $this->isSortingEnabled = true;
    }
}
