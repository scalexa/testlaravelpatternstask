<?php


namespace Tests\Unit\Services;


use App\Exceptions\InvalidAliasException;
use App\Services\ReportService;
use App\Services\Reports\ReportA;
use App\Services\Reports\ReportB;
use Tests\TestCase;

class ReportServiceTest extends TestCase
{

    /**
     * @covers \App\Services\ReportService::makeReport
     */
    public function test_ReportA()
    {
        $alias = 'A';

        $service = $this->app->make(ReportService::class);
        $report = $service->makeReport($alias);

        $this->assertInstanceOf(ReportA::class, $report);
    }

    public function test_ReportB()
    {
        $alias = 'B';

        $service = $this->app->make(ReportService::class);
        $report = $service->makeReport($alias);

        $this->assertInstanceOf(ReportB::class, $report);
    }

    public function test_invalidAlias()
    {
        $this->expectException(InvalidAliasException::class);

        $alias = 'invalidAlias';

        $service = $this->app->make(ReportService::class);
        $service->makeReport($alias);
    }
}
