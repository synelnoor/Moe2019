<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class JurnalApiTest extends TestCase
{
    use MakeJurnalTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateJurnal()
    {
        $jurnal = $this->fakeJurnalData();
        $this->json('POST', '/api/v1/jurnals', $jurnal);

        $this->assertApiResponse($jurnal);
    }

    /**
     * @test
     */
    public function testReadJurnal()
    {
        $jurnal = $this->makeJurnal();
        $this->json('GET', '/api/v1/jurnals/'.$jurnal->id);

        $this->assertApiResponse($jurnal->toArray());
    }

    /**
     * @test
     */
    public function testUpdateJurnal()
    {
        $jurnal = $this->makeJurnal();
        $editedJurnal = $this->fakeJurnalData();

        $this->json('PUT', '/api/v1/jurnals/'.$jurnal->id, $editedJurnal);

        $this->assertApiResponse($editedJurnal);
    }

    /**
     * @test
     */
    public function testDeleteJurnal()
    {
        $jurnal = $this->makeJurnal();
        $this->json('DELETE', '/api/v1/jurnals/'.$jurnal->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/jurnals/'.$jurnal->id);

        $this->assertResponseStatus(404);
    }
}
