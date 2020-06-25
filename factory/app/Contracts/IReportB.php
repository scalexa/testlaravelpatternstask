<?php


namespace App\Contracts;


interface IReportB extends IReport
{
    public function __construct(IRepositoryB $repository);
}
