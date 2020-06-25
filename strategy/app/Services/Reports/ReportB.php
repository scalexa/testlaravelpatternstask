<?php

namespace App\Services\Reports;

use App\Contracts\IReportB;
use App\Contracts\IRepositoryB;

class ReportB implements IReportB
{

    /**
     * @var IRepositoryB
     */
    private IRepositoryB $repository;

    public function __construct(IRepositoryB $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        $data = $this->repository->getData();
        // TODO: Implement getData() method.
        return $data;
    }
}
