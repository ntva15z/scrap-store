<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductEditRequest;
use App\Http\Requests\ProductRequest;
use App\Services\ProductsService;
use Illuminate\Http\Request;

class ProductsController extends Controller
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

    public function index(Request $request){
        $filter = $request->all();

        $products = $this->productService->getAll(PAGE_LIMIT);
        return view('admin.products.index', compact("products", "filter"));
    }

    public function create(){
        return view('admin.products.create');
    }

    /**
     * @param ProductRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postCreate(ProductRequest $request){
        $data = $request->all();
        $dataResponse = $this->productService->create($data);
        if (in_array('success', $dataResponse)) {
            return redirect()->route(PRODUCT_LIST);
        }

        return redirect()->back()->withInput()->withErrors(['msg' => $dataResponse['message']]);
    }

    public function edit($slug){
        $product = $this->productService->findBySlug($slug);
        if(is_null($product)){
            return abort(404);
        }
        return view('admin.products.update', compact('product'));
    }

    public function postEdit(ProductEditRequest $request){
        $data = $request->all();
        $dataResponse = $this->productService->update($data, $data['product_id']);
        if (in_array('success', $dataResponse)) {
            return redirect()->route(PRODUCT_LIST);
        }
        return redirect()->back()->withInput()->withErrors(['msg' => $dataResponse['message']]);
    }

    public function delete($id){

    }

    public function deleteList(){

    }
}
