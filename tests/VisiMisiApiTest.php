<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class VisiMisiApiTest extends TestCase
{
    use MakeVisiMisiTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateVisiMisi()
    {
        $visiMisi = $this->fakeVisiMisiData();
        $this->json('POST', '/api/v1/visiMisis', $visiMisi);

        $this->assertApiResponse($visiMisi);
    }

    /**
     * @test
     */
    public function testReadVisiMisi()
    {
        $visiMisi = $this->makeVisiMisi();
        $this->json('GET', '/api/v1/visiMisis/'.$visiMisi->id);

        $this->assertApiResponse($visiMisi->toArray());
    }

    /**
     * @test
     */
    public function testUpdateVisiMisi()
    {
        $visiMisi = $this->makeVisiMisi();
        $editedVisiMisi = $this->fakeVisiMisiData();

        $this->json('PUT', '/api/v1/visiMisis/'.$visiMisi->id, $editedVisiMisi);

        $this->assertApiResponse($editedVisiMisi);
    }

    /**
     * @test
     */
    public function testDeleteVisiMisi()
    {
        $visiMisi = $this->makeVisiMisi();
        $this->json('DELETE', '/api/v1/visiMisis/'.$visiMisi->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/visiMisis/'.$visiMisi->id);

        $this->assertResponseStatus(404);
    }
}
