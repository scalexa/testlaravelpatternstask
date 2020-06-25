<?php


namespace Tests\Unit\Services;


use App\Exceptions\InvalidAliasException;
use App\Services\ReportService;
use App\Services\Reports\ReportA;
use App\Services\Reports\ReportB;
use Tests\TestCase;

class ReportTest extends TestCase
{

    /**
     * @covers \App\Services\ReportService::getData
     */
    public function test_ReportA()
    {
        $alias = 'A';
        $expectedData = ['data' => 'some data from report type A'];

        $mockReportA = \Mockery::mock(ReportA::class);
        $mockReportB = \Mockery::mock(ReportB::class);

        $this->app->instance(ReportA::class, $mockReportA);
        $this->app->instance(ReportB::class, $mockReportB);

        $mockReportA->shouldReceive('getData')->once()->andReturn($expectedData);
        $mockReportB->shouldReceive('getData')->never();


        $service = $this->app->makeWith(ReportService::class, compact('alias'));
        $results = $service->getData();

        $this->assertEquals($expectedData, $results);
    }

    /**
     * @covers \App\Services\ReportService::getData
     */
    public function test_ReportB()
    {
        $alias = 'B';
        $expectedData = ['data' => 'some data from report type B'];

        $mockReportA = \Mockery::mock(ReportA::class);
        $mockReportB = \Mockery::mock(ReportB::class);

        $this->app->instance(ReportA::class, $mockReportA);
        $this->app->instance(ReportB::class, $mockReportB);

        $mockReportA->shouldReceive('getData')->never();
        $mockReportB->shouldReceive('getData')->once()->andReturn($expectedData);


        $service = $this->app->makeWith(ReportService::class, compact('alias'));
        $results = $service->getData();

        $this->assertEquals($expectedData, $results);
    }

    /**
     * @covers \App\Services\ReportService::getData
     */
    public function test_invalidAlias()
    {
        $this->expectException(InvalidAliasException::class);

        $alias = 'invalidAlias';

        $this->app->makeWith(ReportService::class, compact('alias'));
    }
}
