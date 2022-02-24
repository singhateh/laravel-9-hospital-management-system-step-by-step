<?php
namespace App\Http\Livewire\Trait;


trait WithListGrid
{

    public function mountWithListGrid()
    {
        $this->isListGridEnabled = true;
    }
}
