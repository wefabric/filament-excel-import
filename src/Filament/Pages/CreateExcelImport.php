<?php

namespace Wefabric\FilamentExcelImport\Filament\Pages;

use Wefabric\FilamentExcelImport\Filament\ExcelImportResource;
use Filament\Resources\Pages\CreateRecord;

class CreateExcelImport extends CreateRecord
{
    protected static string $resource = ExcelImportResource::class;
}
