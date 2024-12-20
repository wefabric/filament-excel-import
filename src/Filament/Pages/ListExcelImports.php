<?php

namespace Wefabric\FilamentExcelImport\Filament\Pages;

use Wefabric\FilamentExcelImport\Filament\ExcelImportResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExcelImports extends ListRecords
{
    protected static string $resource = ExcelImportResource::class;

    protected function getDefaultTableSortColumn(): ?string
    {
        return 'id';
    }


    protected function getDefaultTableSortDirection(): ?string
    {
        return 'desc';
    }

    protected function getActions(): array
    {
        return [
//            Actions\CreateAction::make(),
        ];
    }
}
