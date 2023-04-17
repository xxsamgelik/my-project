<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Nette\IOException;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class ExcelController extends Controller
{
    public function exportExcel()
    {
        $spreadsheet = new Spreadsheet();
        $activeWorksheet = $spreadsheet->getActiveSheet();
        $columns = ['ID', 'Title', 'Short description', 'Price', 'Sale price', 'Description', 'Category name', 'Status', 'Created at'];
        for ($i = 0; $i < count($columns); $i++) {
            $activeWorksheet->setCellValue(chr(65 + $i) . '1', $columns[$i]);
        }
        $users = User::all();
        foreach ($users as $key => $user) {
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
        $writer = new Xlsx($spreadsheet);
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment; filename=products.xlsx');
        $writer->save('php://output');

        exit;
    }
    public function uploadExcel()
    {
        $reader = IOFactory::createReader('Xlsx');
        $reader->setReadDataOnly(true);
        $spreadsheet =$reader->load("products.xlsx");
        $workSheet = $spreadsheet->getActiveSheet();
        $lastColumn= $workSheet->getHighestColumn();
        foreach($workSheet->getRowIterator() as $rowIndex =>$row)
        {
            if($rowIndex!=1)
            {
                $array=$workSheet->rangeToArray("A".$rowIndex. ":" . $lastColumn . $rowIndex);
                $array = $array[0];
                User::query()->create([
                'name'=>$array[1],
                'email'=>$array[2],
                'Sale price'=>$array[3],
                'Description'=>$array[4],
                'Category name'=>$array[5],
                'Status'=>$array[6],
                'Created at'=>$array[7],
                    'password'=>$array[8],
            ]);
            }
        }
    }
}
