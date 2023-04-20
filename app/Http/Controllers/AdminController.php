<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\ExcelService;
use App\Services\UserServices;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\UploadedFile;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class AdminController extends Controller
{
    private UserServices $userServices;
    private ExcelService $excelService;

    public function __construct(UserServices $userServices,ExcelService $excelService)
    {
        $this->userServices = $userServices;
        parent::__construct();
        $this->excelService=$excelService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::query()->with(['information'])->orderByDesc('created_at')->paginate(15);

        return view('index', [
            'users' => $users
        ]);
    }
    public function destroy(UserServices $userServices)
    {
        $userServices->delete();

        session()->flash('success', 'Product has been successfully deleted');
        return back();
    }
    public function exportExcel()
    {
        $this->excelService->exportProductsToExcel(User::all());
    }



}
