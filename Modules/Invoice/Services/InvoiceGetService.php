<?php

namespace Modules\Invoice\Services;

use Illuminate\Support\Collection;
use Modules\Invoice\Models\Invoice;
use Modules\Invoice\Repositories\Interfaces\InvoiceRepositoryInterface;
use ThrowException;

/**
 * Class InvoiceGetService
 * @package Modules\Invoice\Services
 */
class InvoiceGetService {
    /**
     * @var InvoiceRepositoryInterface
     */
    private $invoiceRepo;

    /**
     * InvoiceGetService constructor.
     * @param InvoiceRepositoryInterface $invoiceRepo
     */
    public function __construct(InvoiceRepositoryInterface $invoiceRepo) {
        $this->invoiceRepo = $invoiceRepo;
    }

    /**
     * @param $id
     * @return Invoice|null
    * At this point everything is validated, we shouldn't check anything else
     */
    public function info($id) : ?Invoice {
        $invoice = $this->invoiceRepo->findBy('id', $id);

        if(!$invoice) {
            ThrowException::notFound();
        }

        return $invoice;
    }

    /**
     * @param $id
     * @return Invoice|null
     * At this point everything is validated, we shouldn't check anything else
     * TODO this is just a test  function to show backend and frontend connection
     */
    public function list() : ?Collection {
        $companies= $this->invoiceRepo->all();
        return $companies;
    }
}
