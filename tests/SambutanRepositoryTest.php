<?php

use App\Models\Sambutan;
use App\Repositories\SambutanRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SambutanRepositoryTest extends TestCase
{
    use MakeSambutanTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var SambutanRepository
     */
    protected $sambutanRepo;

    public function setUp()
    {
        parent::setUp();
        $this->sambutanRepo = App::make(SambutanRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateSambutan()
    {
        $sambutan = $this->fakeSambutanData();
        $createdSambutan = $this->sambutanRepo->create($sambutan);
        $createdSambutan = $createdSambutan->toArray();
        $this->assertArrayHasKey('id', $createdSambutan);
        $this->assertNotNull($createdSambutan['id'], 'Created Sambutan must have id specified');
        $this->assertNotNull(Sambutan::find($createdSambutan['id']), 'Sambutan with given id must be in DB');
        $this->assertModelData($sambutan, $createdSambutan);
    }

    /**
     * @test read
     */
    public function testReadSambutan()
    {
        $sambutan = $this->makeSambutan();
        $dbSambutan = $this->sambutanRepo->find($sambutan->id);
        $dbSambutan = $dbSambutan->toArray();
        $this->assertModelData($sambutan->toArray(), $dbSambutan);
    }

    /**
     * @test update
     */
    public function testUpdateSambutan()
    {
        $sambutan = $this->makeSambutan();
        $fakeSambutan = $this->fakeSambutanData();
        $updatedSambutan = $this->sambutanRepo->update($fakeSambutan, $sambutan->id);
        $this->assertModelData($fakeSambutan, $updatedSambutan->toArray());
        $dbSambutan = $this->sambutanRepo->find($sambutan->id);
        $this->assertModelData($fakeSambutan, $dbSambutan->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteSambutan()
    {
        $sambutan = $this->makeSambutan();
        $resp = $this->sambutanRepo->delete($sambutan->id);
        $this->assertTrue($resp);
        $this->assertNull(Sambutan::find($sambutan->id), 'Sambutan should not exist in DB');
    }
}
