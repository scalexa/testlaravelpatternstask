<?php


namespace App\Services\Reports;


use App\Contracts\IReportA;
use App\Contracts\IRepositoryA;

class ReportA implements IReportA
{
    /**
     * @var IRepositoryA
     */
    private IRepositoryA $repository;

    public function __construct(IRepositoryA $repository)
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
