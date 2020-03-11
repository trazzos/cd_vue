<?php

namespace Modules\AnnouncementType\Services;

use Illuminate\Support\Collection;
use Modules\AnnouncementType\Models\AnnouncementType;
use Modules\AnnouncementType\Repositories\Interfaces\AnnouncementTypeRepositoryInterface;
use ThrowException;

/**
 * Class AnnouncementTypeGetService
 * @package Modules\AnnouncementType\Services
 */
class AnnouncementTypeGetService {
    /**
     * @var AnnouncementTypeRepositoryInterface
     */
    private $announcement_typeRepo;

    /**
     * AnnouncementTypeGetService constructor.
     * @param AnnouncementTypeRepositoryInterface $announcement_typeRepo
     */
    public function __construct(AnnouncementTypeRepositoryInterface $announcement_typeRepo) {
        $this->announcement_typeRepo = $announcement_typeRepo;
    }

    /**
     * @param $id
     * @return AnnouncementType|null
     * At this point everything is validated, we shouldn't check anything else
     * TODO this is just a test  function to show backend and frontend connection
     */
    public function list() : ?Collection {
        $types= $this->announcement_typeRepo->all();
        return $types;
    }
}
