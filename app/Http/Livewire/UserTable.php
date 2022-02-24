<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Trait\WithRouter;
use App\Http\Livewire\Trait\WithSearch;
use Illuminate\Support\Facades\Request;
use App\Http\Livewire\Trait\WithPerPage;
use App\Http\Livewire\Trait\WithSorting;
use App\Http\Livewire\Trait\WithListGrid;

class UserTable extends JambasangsangTable
{

    use WithPagination, WithSorting, WithPerPage, WithSearch, WithListGrid;


    public function mount()
    {
         $this->model = new User();
        // $this->currentUrl = Route::current()->getName();
        $this->currentUrl = Route::current()->getName();
        $this->theaders = $this->getTableHeader();
    }

    public function getBulkActionUsers()
    {
        User::destroy($this->selected);
    }

    // public function getSortField($value): String
    // {
    //     return $value;
    // }


    protected function getTableHeader(): array
    {
        return  ['Name', 'Email', 'Phone', 'Joined', 'Status', ['name' => '', 'align' => 'right']];
    }

    public function render()
    {
        // dd($this->isPerPageEnabled);
        return view('livewire.user-table', ['users' =>  $this->checkIFModelHasRole()]);
    }
}
