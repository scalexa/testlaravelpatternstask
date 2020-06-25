<?php


namespace Tests\Unit\Services\Reports;


use App\Repositories\RepositoryAEloquent;
use App\Services\Reports\ReportA;
use Tests\TestCase;

class ReportATest extends TestCase
{

    /**
     * @covers \App\Services\Reports\ReportA::getData
     */
    public function test_getData()
    {
        $expectedData = ['data' => 'some data from Eloquent'];

        $repository = \Mockery::mock(RepositoryAEloquent::class);
        $repository->shouldReceive('getData')->once()->andReturn($expectedData);

        $reportA = $this->app->makeWith(ReportA::class, compact('repository'));
        $result = $reportA->getData();

        $this->assertEquals($expectedData, $result);
    }
}
