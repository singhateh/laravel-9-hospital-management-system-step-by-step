<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;


class JambasangsangTable extends Component
{
    public $currentUrl;
    public $checked = [];
    public $selectAll = false;

    public $role = '';
    public $search = '';
    public $perPage = 5;
    public $sortField = 'id';
    public $sortBy = 'asc';
    public $selected = [];
    public $theaders = [];
    public $modelData = [];
    public $isSortingEnabled = false;
    public $isPerPageEnabled = false;
    public $isSearchEnabled = false;
    public $isListGridEnabled = false;


    public  Model  $model;


    protected $queryString = ['search' => ['except' => '']];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function getBulkActionUsers()
    {
        Model::destroy($this->selected);
    }

    // Check selected Id in array
    public function updatedSelectAll($value)
    {
        if ($value) {
            return  $this->checked = $this->model->Paginate($this->perPage)->pluck('id');
        } else {
            return $this->checked = [];
        }
    }

    public function updatedPerPage($value)
    {
        if ($this->selectAll) {
            return $this->checked = $this->model->Paginate($this->perPage)->pluck('id');
        } else {
            return  $this->checked = [];
        }
    }

    public function isChecked($value)
    {
        if ($this->checked && $this->selectAll) {
            return in_array($value, $this->checked);
        }
        return in_array($value, $this->checked);
    }

    public function getUserDataByRole($route)
    {
        $this->resetPage();
        $this->currentUrl = $route;
        return $this->emit('urlChange', $this->currentUrl);
    }

    public function checkIFModelHasRole()
    {
        return !empty($this->currentUrl) ? $this->getWithRole() : $this->getWithOutRole();
    }

    protected function getWithRole()
    {
        if (method_exists($this->model, 'search')) {
            return $this->model?->search(trim($this->search))->UserRole([Str::replaceFirst('users.', '', $this->currentUrl)])
                ->orderBy('users.'.$this->getSortField($this->sortField), $this->getSortBy($this->sortBy))
                ->Paginate($this->perPage);
        } else {
            return $this->model->orderBy($this->getSortField($this->sortField), $this->getSortBy($this->sortBy))
                ->Paginate($this->perPage);
        }
    }

    protected function getWithOutRole()
    {
        if (method_exists($this->model, 'search')) {
            return $this->model?->search(trim($this->search))
                ->orderBy($this->getSortField($this->sortField), $this->getSortBy($this->sortBy))
                ->Paginate($this->perPage);
        } else {
            return $this->model->orderBy($this->getSortField($this->sortField), $this->getSortBy($this->sortBy))
                ->Paginate($this->perPage);
        }
    }


    // Filters Functions
    public function getSortField($value): String
    {
        return $value;
    }

    public function getSortBy($value): String
    {
        return $value;
    }
}
