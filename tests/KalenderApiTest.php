<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class KalenderApiTest extends TestCase
{
    use MakeKalenderTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateKalender()
    {
        $kalender = $this->fakeKalenderData();
        $this->json('POST', '/api/v1/kalenders', $kalender);

        $this->assertApiResponse($kalender);
    }

    /**
     * @test
     */
    public function testReadKalender()
    {
        $kalender = $this->makeKalender();
        $this->json('GET', '/api/v1/kalenders/'.$kalender->id);

        $this->assertApiResponse($kalender->toArray());
    }

    /**
     * @test
     */
    public function testUpdateKalender()
    {
        $kalender = $this->makeKalender();
        $editedKalender = $this->fakeKalenderData();

        $this->json('PUT', '/api/v1/kalenders/'.$kalender->id, $editedKalender);

        $this->assertApiResponse($editedKalender);
    }

    /**
     * @test
     */
    public function testDeleteKalender()
    {
        $kalender = $this->makeKalender();
        $this->json('DELETE', '/api/v1/kalenders/'.$kalender->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/kalenders/'.$kalender->id);

        $this->assertResponseStatus(404);
    }
}
