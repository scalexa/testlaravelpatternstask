<?php


namespace App\Contracts;


interface IReport
{
    public function getData(): array;

    public function export();
}
