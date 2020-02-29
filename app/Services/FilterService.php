<?php

namespace App\Services;

use stdClass;
use App;

/**
 * Class FilterService
 * @package App\Services
 */
class FilterService {
    /**
     * @param $nameSpace
     * @param $repository
     * @param stdClass $filters
     * @return mixed
     */
    public function apply($nameSpace, $repository, stdClass $filters) /*: ?Collection*/ {
        foreach($filters->predicates as $predicate) {
            $decorator = "\\". $nameSpace . '\\Filters\\' .
                str_replace(' ', '', ucwords(
                        str_replace('_', ' ', $predicate->name)
                    )
                );

            //We could do a class_exists but I want to make sure the class actually exists if we want to use the filter
            $repository->pushCriteria(App::makeWith($decorator, ['predicate' => $predicate]));
        }
    }
}
