<?php

declare(strict_types=1);

namespace App\Exports;

use App\Models\Door;
use Illuminate\Database\Eloquent\Builder;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

/**
 * Door list with prices; the query comes from the admin table so its filters (e.g. collection) apply.
 *
 * @implements WithMapping<Door>
 */
final readonly class DoorPricesExport implements FromQuery, ShouldAutoSize, WithHeadings, WithMapping
{
    /**
     * @param  Builder<Door>  $query
     */
    public function __construct(private Builder $query) {}

    /**
     * @return Builder<Door>
     */
    public function query(): Builder
    {
        return $this->query->clone()->with('category:id,name')->reorder()->orderBy('category_id')->orderBy('name');
    }

    /**
     * @return list<string>
     */
    public function headings(): array
    {
        return ['ID', 'Termékkód', 'Megnevezés', 'Kollekció', 'Modell', 'Kategória', 'Ár'];
    }

    /**
     * @param  Door  $row
     * @return array{int, int|null, string, string|null, string, string, int|null}
     */
    public function map($row): array
    {
        return [
            $row->id,
            $row->product_id,
            $row->name,
            $row->category?->name,
            $row->tag_name,
            $row->tag_category,
            $row->price,
        ];
    }
}
