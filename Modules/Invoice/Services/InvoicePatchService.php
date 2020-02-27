<?php

namespace Modules\Invoice\Services;

use Modules\Invoice\Models\Invoice;
use Modules\Invoice\Repositories\Interfaces\InvoiceRepositoryInterface;

/**
 * Class InvoicePatchService
 * @package Modules\Invoice\Services
 */
class InvoicePatchService {
    /**
     * @var InvoiceRepositoryInterface
     */
    private $invoiceRepo;

    /**
     * InvoicePatchService constructor.
     * @param InvoiceRepositoryInterface $invoiceRepo
     */
    public function __construct(InvoiceRepositoryInterface $invoiceRepo) {
        $this->invoiceRepo = $invoiceRepo;
    }

    /**
     * @param $data information to update
     * @param $id register identifier that will be updated
     * @return false|true
     */
    public function update(array $data, $id) : ?bool {
        $invoice = $this->invoiceRepo->update($data,$id);
        return $invoice;
    }
}
