<?php


namespace App\Contracts;


interface IReportA extends IReport
{
    public function __construct(IRepositoryA $repository);
}
