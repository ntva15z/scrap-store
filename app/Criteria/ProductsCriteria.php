<?php

namespace App\Criteria;

use App\Library\DateUtil;
use Illuminate\Http\Request;
use App\Interfaces\RepositoryInterface;
use App\Interfaces\CriteriaInterface;
use Carbon\Carbon;
use DB;

class ProductsCriteria implements CriteriaInterface
{
    /**
     * Field list selected
     *
     * @var array
     */
    protected $select = [
        'products.id',
        'products.name',
        'products.slug',
        'products.description',
        'products.extension',
        'products.seo_title',
        'products.seo_meta_keyword',
        'products.seo_meta_desc',
        'products.created_at',
        'products.updated_at'
    ];
    /**
     * @var Request
     */
    protected $request;

    /**
     * @var string
     */
    protected $mainTable = 'products';

    /**
     * UserListCriteria constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @param $model
     * @param RepositoryInterface $repository
     * @return mixed
     * @throws \Exception
     */
    public function apply($model, RepositoryInterface $repository)
    {
        $options = $this->request->all();
        $model = $model->select($this->select);
        $model->where($this->mainTable . '.deleted_at', '=', null);
        if (isset($options['search_text']) && !is_null($options['search_text'])) {
            $model->whereRaw('LOWER(' . $this->mainTable . '.name) like ?', '%' . strtolower($options['search_text']) . '%');
        }
        $model = $model->orderBy($this->mainTable . '.name');

        return $model;
    }
}
