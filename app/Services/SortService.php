<?php

namespace App\Services;

use App;

/**
 * Class SortService
 * @package App\Services
 */
class SortService {
    /**
     * @param $nameSpace
     * @param $repository
     * @param array $sorts
     * @return mixed
     */
    public function apply($nameSpace, $repository, array $sorts) /*: ?Collection*/ {
        foreach($sorts as $sort) {
            $decorator = "\\". $nameSpace . '\\Sorts\\' .
                str_replace(' ', '', ucwords(
                        str_replace('.', ' ', $sort["attribute"])
                    )
                );

            //We could do a class_exists but I want to make sure the class actually exists if we want to use the filter
            $repository->pushCriteria(App::makeWith($decorator, ['sort' => $sort]));
        }
    }
}
