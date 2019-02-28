<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SambutanApiTest extends TestCase
{
    use MakeSambutanTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateSambutan()
    {
        $sambutan = $this->fakeSambutanData();
        $this->json('POST', '/api/v1/sambutans', $sambutan);

        $this->assertApiResponse($sambutan);
    }

    /**
     * @test
     */
    public function testReadSambutan()
    {
        $sambutan = $this->makeSambutan();
        $this->json('GET', '/api/v1/sambutans/'.$sambutan->id);

        $this->assertApiResponse($sambutan->toArray());
    }

    /**
     * @test
     */
    public function testUpdateSambutan()
    {
        $sambutan = $this->makeSambutan();
        $editedSambutan = $this->fakeSambutanData();

        $this->json('PUT', '/api/v1/sambutans/'.$sambutan->id, $editedSambutan);

        $this->assertApiResponse($editedSambutan);
    }

    /**
     * @test
     */
    public function testDeleteSambutan()
    {
        $sambutan = $this->makeSambutan();
        $this->json('DELETE', '/api/v1/sambutans/'.$sambutan->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/sambutans/'.$sambutan->id);

        $this->assertResponseStatus(404);
    }
}
