<?php

use App\Models\Buku;
use App\Repositories\BukuRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BukuRepositoryTest extends TestCase
{
    use MakeBukuTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var BukuRepository
     */
    protected $bukuRepo;

    public function setUp()
    {
        parent::setUp();
        $this->bukuRepo = App::make(BukuRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateBuku()
    {
        $buku = $this->fakeBukuData();
        $createdBuku = $this->bukuRepo->create($buku);
        $createdBuku = $createdBuku->toArray();
        $this->assertArrayHasKey('id', $createdBuku);
        $this->assertNotNull($createdBuku['id'], 'Created Buku must have id specified');
        $this->assertNotNull(Buku::find($createdBuku['id']), 'Buku with given id must be in DB');
        $this->assertModelData($buku, $createdBuku);
    }

    /**
     * @test read
     */
    public function testReadBuku()
    {
        $buku = $this->makeBuku();
        $dbBuku = $this->bukuRepo->find($buku->id);
        $dbBuku = $dbBuku->toArray();
        $this->assertModelData($buku->toArray(), $dbBuku);
    }

    /**
     * @test update
     */
    public function testUpdateBuku()
    {
        $buku = $this->makeBuku();
        $fakeBuku = $this->fakeBukuData();
        $updatedBuku = $this->bukuRepo->update($fakeBuku, $buku->id);
        $this->assertModelData($fakeBuku, $updatedBuku->toArray());
        $dbBuku = $this->bukuRepo->find($buku->id);
        $this->assertModelData($fakeBuku, $dbBuku->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteBuku()
    {
        $buku = $this->makeBuku();
        $resp = $this->bukuRepo->delete($buku->id);
        $this->assertTrue($resp);
        $this->assertNull(Buku::find($buku->id), 'Buku should not exist in DB');
    }
}
