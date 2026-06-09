<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Category;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

final class SearchBox extends Component
{
    public bool $showdiv = false;

    public string $search = '';

    /**
     * @var Collection<int, Category>|null
     */
    public ?Collection $records = null;

    // Fetch records
    public function searchResult(): void
    {

        if ($this->search !== '' && $this->search !== '0') {

            $this->records = Category::query()->where('name', 'like', '%'.$this->search.'%')
                ->limit(5)
                ->get();

            $this->showdiv = true;
        } else {
            $this->showdiv = false;
        }
    }

    public function fetchCategory(int $id = 0): void
    {

        $record = Category::query()->select('*')
            ->where('id', $id)
            ->first();

        $this->search = $record->name;
        $this->showdiv = false;

        $this->redirect(route('category.show', ['category' => $record->name]), navigate: true);
    }

    public function render(): Factory|View
    {
        return view('livewire.search-box');
    }
}
