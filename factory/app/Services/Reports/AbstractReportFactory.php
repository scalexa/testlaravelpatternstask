<?php


namespace App\Services\Reports;


use App\Contracts\IReport;

abstract class AbstractReportFactory
{
    abstract public function makeReport(string $alias): IReport;
}
