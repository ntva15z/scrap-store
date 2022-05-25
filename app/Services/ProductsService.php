<?php

namespace App\Services;

use App\Criteria\ProductsCriteria;
use App\Interfaces\ProductsRepositoryInterface;
use App\Models\Products;
use App\Repositories\ProductsRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Image;

class ProductsService
{
    /**
     * @var ProductsRepositoryInterface
     */
    protected $productRepository;

    /**
     * @param ProductsRepositoryInterface $productRepository
     */
    public function __construct(ProductsRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * @param $pageSize
     * @return mixed
     */
    public function get($pageSize)
    {
        $this->productRepository->pushCriteria(app(ProductsCriteria::class));
        return $this->productRepository->paginate($pageSize);
    }

    public function getAll()
    {
        $data = $this->productRepository->findWhere([
            'deleted_at' => null
        ]);
        if (count($data) > 0) {
            return $data;
        }
        return null;
    }

    /**
     * @param $slug
     * @return null
     */
    public function findBySlug($slug)
    {
        $products = $this->productRepository->findWhere([
            'slug' => $slug,
            'deleted_at' => null
        ]);
        if (count($products) > 0) {
            return $products->first();
        }
        return null;
    }

    public function create($data)
    {
        try {
            DB::beginTransaction();

            $dataProduct = [
                'name' => $data['name'],
                'description' => $data['description'],
                'slug' => $data['slug'],
                'seo_title' => isset($data['seo_title']) ? $data['seo_title'] : "",
                'seo_meta_keyword' => isset($data['seo_meta_keyword']) ? $data['seo_meta_keyword'] : "",
                'seo_meta_desc' => isset($data['seo_meta_desc']) ? $data['seo_meta_desc'] : "",

                'created_by' => auth()->user()->id,
                'updated_by' => auth()->user()->id,
            ];

            $product = $this->productRepository->create($dataProduct);

            if (array_key_exists('image', $data)) {
                $this->storeImage($data['image'], $product->id);
            }

            DB::commit();

            return [
                'success' => true,
                'data' => $product
            ];

        } catch (\Exception $exception) {
            DB::rollBack();
            return [
                'success' => false,
                'message' => $exception->getMessage()
            ];
        }
    }

    /**
     * @param $data
     * @param $id
     * @return array
     */
    public function update($data, $id)
    {
        $oldProduct = $this->productRepository->find($id);
        if (!$oldProduct) {
            return [
                'success' => false,
                'message' => __('Not found category')
            ];
        }
        $checkSlug = Products::where('slug', '=', $data['slug'])
            ->where('id', '<>', $data['product_id'])
            ->get();

        if (count($checkSlug) > 0) {
            return [
                'success' => false,
                'message' => __('Slug đã tồn tại')
            ];
        }
        try {
            DB::beginTransaction();
            $dataProduct = [
                'slug' => $data['slug'],
                'name' => $data['name'],
                'description' => $data['description'],
                'seo_title' => isset($data['seo_title']) ? $data['seo_title'] : null,
                'seo_meta_keyword' => isset($data['seo_meta_keyword']) ? $data['seo_meta_keyword'] : null,
                'seo_meta_desc' => isset($data['seo_meta_desc']) ? $data['seo_meta_desc'] : null,
                'updated_by' => auth()->user()->id,
            ];
            $product = $this->productRepository->update($dataProduct, $id);
            if ($data['fileUploadMainRemoved'] == 'true') {
                Storage::deleteDirectory('public' . PATH_PRODUCT_IMAGE . $product->id);
                if(isset($data['image']) && !is_null($data['image'])){
                    $this->storeImage($data['image'], $product->id);
                }else{
                    $this->productRepository->update([
                        'extension' => null,
                    ], $product->id);
                }
            }

            DB::commit();

            return [
                'success' => true,
                'data' => $product
            ];

        } catch (\Exception $exception) {
            DB::rollBack();
            return [
                'success' => false,
                'message' => $exception->getMessage()
            ];
        }
    }

    /**
     * @param $images
     * @param $postId
     * @return array|bool
     */
    public function storeImage($image, $productId)
    {

        $size = [
            config('common.size_small'),
            config('common.size_middle'),
            config('common.size_large')
        ];

        try {
            $data = [
                'extension' => $image->getClientOriginalExtension(),
            ];

            $product = $this->productRepository->update($data, $productId);
            foreach ($size as $sizeResize) {
                $name = $sizeResize['name'];
                $logoResize = Image::make($image)->resize($sizeResize['width'], $sizeResize['height'],
                    function ($constraint) {
                        $constraint->aspectRatio();
                    });
                $width = $logoResize->getWidth();
                $height = $logoResize->getHeight();
                if ($name == 'large') {
                    $logoResize->text('Tuấn Tiền Tỉ', $width / 2, $height / 2, function ($font) {
                        $font->file(public_path('times.ttf'));
                        $font->size(40);
                        $font->color('#C8C8C8');
                        $font->align('center');
                        $font->valign('top');
                        $font->angle(23);
                    })->stream();
                } elseif ($name == 'middle') {
                    $logoResize->text('Tuấn Tiền Tỉ', $width / 2, $height / 2, function ($font) {
                        $font->file(public_path('times.ttf'));
                        $font->size(35);
                        $font->color('#C8C8C8');
                        $font->align('center');
                        $font->valign('top');
                        $font->angle(23);
                    })->stream();
                } else {
                    $logoResize->text('Tuấn Tiền Tỉ', $width / 2, $height / 2, function ($font) {
                        $font->file(public_path('times.ttf'));
                        $font->size(20);
                        $font->color('#C8C8C8');
                        $font->align('center');
                        $font->valign('top');
                        $font->angle(23);
                    })->stream();
                }

                $output_file = PATH_PRODUCT_IMAGE . $productId . "/$name." . $image->getClientOriginalExtension();

                Storage::disk('public')->put($output_file, $logoResize);
            }
            return true;

        } catch (\Exception $exception) {
            return false;
        }

    }
}
