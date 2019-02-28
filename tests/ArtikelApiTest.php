<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ArtikelApiTest extends TestCase
{
    use MakeArtikelTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateArtikel()
    {
        $artikel = $this->fakeArtikelData();
        $this->json('POST', '/api/v1/artikels', $artikel);

        $this->assertApiResponse($artikel);
    }

    /**
     * @test
     */
    public function testReadArtikel()
    {
        $artikel = $this->makeArtikel();
        $this->json('GET', '/api/v1/artikels/'.$artikel->id);

        $this->assertApiResponse($artikel->toArray());
    }

    /**
     * @test
     */
    public function testUpdateArtikel()
    {
        $artikel = $this->makeArtikel();
        $editedArtikel = $this->fakeArtikelData();

        $this->json('PUT', '/api/v1/artikels/'.$artikel->id, $editedArtikel);

        $this->assertApiResponse($editedArtikel);
    }

    /**
     * @test
     */
    public function testDeleteArtikel()
    {
        $artikel = $this->makeArtikel();
        $this->json('DELETE', '/api/v1/artikels/'.$artikel->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/artikels/'.$artikel->id);

        $this->assertResponseStatus(404);
    }
}
