<?php

use App\Models\Artikel;
use App\Repositories\ArtikelRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ArtikelRepositoryTest extends TestCase
{
    use MakeArtikelTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var ArtikelRepository
     */
    protected $artikelRepo;

    public function setUp()
    {
        parent::setUp();
        $this->artikelRepo = App::make(ArtikelRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateArtikel()
    {
        $artikel = $this->fakeArtikelData();
        $createdArtikel = $this->artikelRepo->create($artikel);
        $createdArtikel = $createdArtikel->toArray();
        $this->assertArrayHasKey('id', $createdArtikel);
        $this->assertNotNull($createdArtikel['id'], 'Created Artikel must have id specified');
        $this->assertNotNull(Artikel::find($createdArtikel['id']), 'Artikel with given id must be in DB');
        $this->assertModelData($artikel, $createdArtikel);
    }

    /**
     * @test read
     */
    public function testReadArtikel()
    {
        $artikel = $this->makeArtikel();
        $dbArtikel = $this->artikelRepo->find($artikel->id);
        $dbArtikel = $dbArtikel->toArray();
        $this->assertModelData($artikel->toArray(), $dbArtikel);
    }

    /**
     * @test update
     */
    public function testUpdateArtikel()
    {
        $artikel = $this->makeArtikel();
        $fakeArtikel = $this->fakeArtikelData();
        $updatedArtikel = $this->artikelRepo->update($fakeArtikel, $artikel->id);
        $this->assertModelData($fakeArtikel, $updatedArtikel->toArray());
        $dbArtikel = $this->artikelRepo->find($artikel->id);
        $this->assertModelData($fakeArtikel, $dbArtikel->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteArtikel()
    {
        $artikel = $this->makeArtikel();
        $resp = $this->artikelRepo->delete($artikel->id);
        $this->assertTrue($resp);
        $this->assertNull(Artikel::find($artikel->id), 'Artikel should not exist in DB');
    }
}
