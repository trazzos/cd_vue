<?php

namespace Modules\Setting\Services;

use Config;
use ThrowException;

/**
 * Class CatalogueGetService
 * @package Modules\Catalogue\Services
 */
class CatalogueGetService {
    /**
     * @var array $catalogue
     */
    private $catalogue;

    /**
     * CatalogueGetService constructor.
     */
    public function __construct() {
        $this->catalogue = [];
    }
    /**
     * @param array $data
     * @return array|null
     */
    public function list(array $data) : ?array {
        foreach ($data['filters'] as $var)
        {
            $this->catalogue[$var] = Config::get("catalogue.$var");
        }

        return $this->catalogue;
    }
}
