<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Collection;
use JetBrains\PhpStorm\NoReturn;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Writer\Exception;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ExcelService
{
    /**
     * @throws Exception
     */
    #[NoReturn] public function exportProductsToExcel(Collection $products): void
    {
        $spreadsheet = new Spreadsheet();
        $activeWorksheet = $spreadsheet->getActiveSheet();
        $this->prepareProductsExcelData($activeWorksheet, $products);
        $writer = new Xlsx($spreadsheet);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename=data.xlsx');
        $writer->save('php://output');
        exit;
    }

    private function prepareProductsExcelData(Worksheet $activeWorksheet, Collection $users): void
    {
        $columns = ['ID', 'Имя', 'Почта', 'Пол', 'Статус', 'Страна', 'Онлайн', 'Зарегестрировался', 'Обновил данные'];
        for ($i = 0; $i < count($columns); $i++) {
            $activeWorksheet->setCellValue(chr(65 + $i) . '1', $columns[$i]);
        }
        foreach ($users as $key => $user)
        {
            $index = $key + 2;
            $activeWorksheet->setCellValue('A' . $index, $user->id);
            $activeWorksheet->setCellValue('B' . $index, $user->name);
            $activeWorksheet->setCellValue('C' . $index, $user->email);
            $activeWorksheet->setCellValue('D' . $index, $user->information?->sex);
            $activeWorksheet->setCellValue('E' . $index, $user->information?->status);
            $activeWorksheet->setCellValue('F' . $index, $user->information?->country);
            $activeWorksheet->setCellValue('G' . $index, $user->is_online ? 'Онлайн' : 'Не онлайн');
            $activeWorksheet->setCellValue('H' . $index, $user->created_at);
            $activeWorksheet->setCellValue('I' . $index, $user->updated_at);
        }
    }
}
