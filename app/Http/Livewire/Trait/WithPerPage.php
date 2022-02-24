<?php
namespace App\Http\Livewire\Trait;

trait WithPerPage
{

    public function mountWithPerPage()
    {
        $this->isPerPageEnabled = true;
    }
}
