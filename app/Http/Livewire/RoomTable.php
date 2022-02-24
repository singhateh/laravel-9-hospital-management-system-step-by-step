<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Trait\WithListGrid;
use App\Http\Livewire\Trait\WithPerPage;
use App\Http\Livewire\Trait\WithSearch;
use App\Models\Room;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Request;
use App\Http\Livewire\Trait\WithSorting;

class RoomTable extends JambasangsangTable {

   use WithPagination;
    //WithSorting,
    //WithPerPage,
    //WithSearch,
    //WithListGrid


    public function mount()
    {
        $this->currentUrl = Request::route()->getName();
        $this->model = new Room();
        $this->theaders = $this->getTableHeader();
    }

    public function getBulkActionRooms()
    {
        Room::destroy($this->selected);
    }

    /**
     * Customize the Sorting filter value by default is (id).
     *
     * @return string
     */

    // public function getSortField($value): String
    // {
    //     return $value; // Default is the model id
    // }


      /**
     * Define your Table Headers by default it will empty.
     *
     * @return array
     */
    protected function getTableHeader(): array
    {
        return  ['', ['name' => '', 'align' => 'right']];
    }

    public function render()
    {
        return view('livewire.room-table', ['rooms' =>  $this->checkIFModelHasRole()]);
    }

}
