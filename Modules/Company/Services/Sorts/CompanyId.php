<?php
namespace Modules\Company\Services\Sorts;

use App\Abstracts\SortAbstract;
use App\Repositories\Interfaces\CriteriaInterface;
use App\Repositories\Interfaces\RepositoryInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CompanyId
 * @package Modules\Company\Services\Sorts
 */
class CompanyId extends SortAbstract implements CriteriaInterface {
    /**
     * @var array
     */
    protected $sort;

    /**
     * @param array $sort
     */
    public function  __construct(array $sort) {
        $this->sort = $sort;
    }
    /**
     * @param Model|Builder $model
     *
     * @param RepositoryInterface $repository
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository) : Builder {
        return $this->{$this->sort['direction']}($model, $this->sort);
    }
}
