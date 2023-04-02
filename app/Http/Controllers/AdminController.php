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

//    /**
//     * Show the form for creating a new resource.
//     */
//    public function create()
//    {
//        return view('admin.products.create', [
//            'categories' => Category::query()->where('is_active', 1)->get()
//        ]);
//    }

    /**
     * Store a newly created resource in storage.
     */
//    public function store(CreateProductRequest $request)
//    {
//        $validated = $request->validated();
//        $product = Product::query()->create($validated);
//
//        if ($request->has('files')) {
//            /** @var UploadedFile $file */
//            foreach ($request->file('files') as $file) {
//                $productImage = $this->productService->createProductImage($file);
//                $product->images()->save($productImage);
//            }
//        }
//
//        session()->flash('success', 'Product has been successfully created');
//
//        return redirect()->route('admin.products.index');
//    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
//    public function downloadCsv()
//    {
//        $this->productService->downloadCsv(Product::all());
//    }
//
//    public function downloadExcel()
//    {
//        $this->productService->downloadExcel(Product::all());
//    }
//
//    public function uploadExcel()
//    {
//        $this->productService->uploadExcel();
//    }
}
