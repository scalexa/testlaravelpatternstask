<?php


namespace App\Services\Reports;


use App\Contracts\IReport;
use App\Exceptions\InvalidAliasException;

class ReportFactory extends AbstractReportFactory
{

    /**
     * @param string $alias
     * @return IReport
     * @throws InvalidAliasException
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function makeReport(string $alias): IReport
    {
        switch ($alias) {
            case 'A':
                return app()->make(ReportA::class);
                break;

            case 'B':
                return app()->make(ReportB::class);
                break;

            default:
                throw new InvalidAliasException();
                break;
        }
    }
}
