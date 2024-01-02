<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProductExport implements FromCollection, WithHeadings
{
    public function collection(){
        return Product::all();
    }

    public function headings(): array{
        return [
            'id',
            'name',
            'image',
            'category_id',
            'price',
            'quantity',
            'created_at',
            'updated_at'
        ];
    }
}
