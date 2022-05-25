<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Services\ProductsService;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @var ProductsService
     */
    protected $productService;

    /**
     * @param ProductsService $productService
     */
    public function __construct(ProductsService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $data = $this->productService->get(PAGE_LIMIT);
        return view('client.home.index', compact('data'));
    }

    public function detail($slug)
    {
        $product = $this->productService->findBySlug($slug);
        if(is_null($product)){
            return abort(404);
        }
        return view('client.home.product_detail', compact('product'));
    }

    public function about()
    {
        return view('client.home.info');
    }

}
