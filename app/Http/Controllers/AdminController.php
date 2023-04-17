<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Services\ProductService;
use App\Services\UserServices;
use Illuminate\Http\UploadedFile;

class AdminController extends Controller
{
    private UserServices $userServices;

    public function __construct(UserServices $userServices)
    {
        $this->userServices = $userServices;
        parent::__construct();
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
}
