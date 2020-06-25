<?php


namespace App\Services;

use App\Contracts\IReport;
use App\Services\Reports\ReportFactory;

class ReportService
{

    /**
     * @var ReportFactory
     */
    private ReportFactory $reportFactory;

    /**
     * Report constructor.
     * @param ReportFactory $reportFactory
     */
    public function __construct(ReportFactory $reportFactory)
    {
        $this->reportFactory = $reportFactory;
    }

    /**
     * @param string $alias
     * @return IReport
     * @throws \App\Exceptions\InvalidAliasException
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function makeReport(string $alias): IReport
    {
        return $this->reportFactory->makeReport($alias);
    }
}
