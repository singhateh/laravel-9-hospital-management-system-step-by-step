<?php

namespace App\Http\Livewire;

use App\Http\Livewire\Trait\WithListGrid;
use App\Http\Livewire\Trait\WithPerPage;
use App\Http\Livewire\Trait\WithSearch;
use App\Models\Medicine;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Request;
use App\Http\Livewire\Trait\WithSorting;

class MedicineTable extends JambasangsangTable {

   use WithPagination;
    //WithSorting,
    //WithPerPage,
    //WithSearch,
    //WithListGrid


    public function mount()
    {
        $this->currentUrl = Request::route()->getName();
        $this->model = new Medicine();
        $this->theaders = $this->getTableHeader();
    }

    public function getBulkActionMedicines()
    {
        Medicine::destroy($this->selected);
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
        return view('livewire.medicine-table', ['medicines' =>  $this->checkIFModelHasRole()]);
    }

}
