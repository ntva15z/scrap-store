<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Services\CategoriesService;
use App\Services\ProductsCustomerService;
use Illuminate\Http\Request;

class AjaxController extends Controller
{

    /**
     * @var ProductsCustomerService
     */
    protected $productCustomerService;

    /**
     * HomeController constructor.
     * @param ProductsCustomerService $productCustomerService
     */
    public function __construct(ProductsCustomerService $productCustomerService)
    {
        $this->productCustomerService = $productCustomerService;
    }

    /**
     * @param $categoryId
     * @return \Illuminate\Http\JsonResponse|object
     */
    public function productsByCategory($categoryId, $page)
    {
        $listProducts = $this->productCustomerService->getProductByCategory($categoryId, $page);
        return response()
            ->json(['data' => $listProducts])
            ->setStatusCode(200);
    }

    public function relateProducts($productId, $page, $limit = PAGE_SIZE_HOME)
    {
        $listProducts = $this->productCustomerService->getRelatedProducts($productId, $page, $limit);
        return response()
            ->json(['data' => $listProducts])
            ->setStatusCode(200);
    }
}
