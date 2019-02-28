<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FakultasApiTest extends TestCase
{
    use MakeFakultasTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateFakultas()
    {
        $fakultas = $this->fakeFakultasData();
        $this->json('POST', '/api/v1/fakultas', $fakultas);

        $this->assertApiResponse($fakultas);
    }

    /**
     * @test
     */
    public function testReadFakultas()
    {
        $fakultas = $this->makeFakultas();
        $this->json('GET', '/api/v1/fakultas/'.$fakultas->id);

        $this->assertApiResponse($fakultas->toArray());
    }

    /**
     * @test
     */
    public function testUpdateFakultas()
    {
        $fakultas = $this->makeFakultas();
        $editedFakultas = $this->fakeFakultasData();

        $this->json('PUT', '/api/v1/fakultas/'.$fakultas->id, $editedFakultas);

        $this->assertApiResponse($editedFakultas);
    }

    /**
     * @test
     */
    public function testDeleteFakultas()
    {
        $fakultas = $this->makeFakultas();
        $this->json('DELETE', '/api/v1/fakultas/'.$fakultas->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/fakultas/'.$fakultas->id);

        $this->assertResponseStatus(404);
    }
}
