<?php


namespace App\Services;


use App\Contracts\IReport;
use App\Exceptions\InvalidAliasException;
use App\Services\Reports\ReportA;
use App\Services\Reports\ReportB;

class ReportService
{
    private IReport $strategy;

    /**
     * Report constructor.
     * @param string $alias
     * @throws \Exception
     */
    public function __construct(string $alias)
    {
        switch ($alias) {
            case 'A':
                $this->strategy = app()->make(ReportA::class);
                break;

            case 'B':
                $this->strategy = app()->make(ReportB::class);
                break;

            default:
                throw new InvalidAliasException();
                break;
        }
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->strategy->getData();
    }
}
