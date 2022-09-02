<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Events\AfterSheet;

class UsersExport implements FromCollection, WithColumnWidths
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::all();
    }
    public function registerEvents(): array
    {
        return [
            // Handle by a closure.
            AfterSheet::class => function(AfterSheet $event) {
                $event->sheet->getStyle('A1:B1')->applyFromArray([
                    'font' => [
                        'bold'=> true
                    ]
                    ]);
            },
        ];
    }
    public function columnWidths(): array
    {
        return [
            'A' => 20,
            'B' => 50,
        ];
    }
}
