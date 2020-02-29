<?php

namespace App\Services;

use App;

/**
 * Class FilterService
 * @package App\Services
 */
class FilterService {
    /**
     * @param $nameSpace
     * @param $repository
     * @param array $predicates
     * @return mixed
     */
    public function apply($nameSpace, $repository, array $predicates) /*: ?Collection*/ {
        foreach($predicates as $predicate) {
            $decorator = "\\". $nameSpace . '\\Filters\\' .
                str_replace(' ', '', ucwords(
                        str_replace('_', ' ', $predicate["name"])
                    )
                );

            //We could do a class_exists but I want to make sure the class actually exists if we want to use the filter
            $repository->pushCriteria(App::makeWith($decorator, ['predicate' => $predicate]));
        }
    }
}
