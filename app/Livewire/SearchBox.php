<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;

final class SearchBox extends Component
{
    public $showdiv = false;

    public $search = '';

    public $records;

    // Fetch records
    public function searchResult(): void
    {

        if (! empty($this->search)) {

            $this->records = Category::where('name', 'like', '%'.$this->search.'%')
                ->limit(5)
                ->get();

            $this->showdiv = true;
        } else {
            $this->showdiv = false;
        }
    }

    public function fetchCategory($id = 0)
    {

        $record = Category::select('*')
            ->where('id', $id)
            ->first();

        $this->search = $record->name;
        $this->showdiv = false;

        return $this->redirect(route('category.show', ['category' => $record->name]), navigate: true);
    }

    public function render()
    {
        return view('livewire.search-box');
    }
}
