<?php
namespace Modules\User\Services\Filters;

use App\Abstracts\FilterAbstract;
use App\Repositories\Interfaces\CriteriaInterface;
use App\Repositories\Interfaces\RepositoryInterface;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use stdClass;

/**
 * Class UserRole
 * @package Modules\User\Services\Filters
 */
class UserRole extends FilterAbstract implements CriteriaInterface {
    /**
     * @var stdClass
     */
    protected $predicate;

    /**
     * @param stdClass $predicate
     */
    public function  __construct(stdClass $predicate) {
        $this->predicate = $predicate;
    }
    /**
     * @param Model|Builder $model
     *
     * @param RepositoryInterface $repository
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository) {
        $comparison = $this->predicate->comparison;
        return $this->$comparison($model, $this->predicate);
    }
}
