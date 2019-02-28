<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BukuApiTest extends TestCase
{
    use MakeBukuTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateBuku()
    {
        $buku = $this->fakeBukuData();
        $this->json('POST', '/api/v1/bukus', $buku);

        $this->assertApiResponse($buku);
    }

    /**
     * @test
     */
    public function testReadBuku()
    {
        $buku = $this->makeBuku();
        $this->json('GET', '/api/v1/bukus/'.$buku->id);

        $this->assertApiResponse($buku->toArray());
    }

    /**
     * @test
     */
    public function testUpdateBuku()
    {
        $buku = $this->makeBuku();
        $editedBuku = $this->fakeBukuData();

        $this->json('PUT', '/api/v1/bukus/'.$buku->id, $editedBuku);

        $this->assertApiResponse($editedBuku);
    }

    /**
     * @test
     */
    public function testDeleteBuku()
    {
        $buku = $this->makeBuku();
        $this->json('DELETE', '/api/v1/bukus/'.$buku->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/bukus/'.$buku->id);

        $this->assertResponseStatus(404);
    }
}
