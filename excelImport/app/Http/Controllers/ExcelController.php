<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PhpOffice\PhpSpreadsheet\IOFactory;
// app/Http/Controllers/ExcelController.php

class ExcelController extends Controller
{
    public function showForm()
    {
        return view('excel.form');
    }

    public function readExcel(Request $request)
    {
        $file = $request->file('excel_file');

        $spreadsheet = IOFactory::load($file->getPathname());
        $worksheet = $spreadsheet->getActiveSheet();
        $data = $worksheet->toArray();

        return view('excel.display', compact('data'));
    }
}
