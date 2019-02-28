<?php

use App\Models\VisiMisi;
use App\Repositories\VisiMisiRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class VisiMisiRepositoryTest extends TestCase
{
    use MakeVisiMisiTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var VisiMisiRepository
     */
    protected $visiMisiRepo;

    public function setUp()
    {
        parent::setUp();
        $this->visiMisiRepo = App::make(VisiMisiRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateVisiMisi()
    {
        $visiMisi = $this->fakeVisiMisiData();
        $createdVisiMisi = $this->visiMisiRepo->create($visiMisi);
        $createdVisiMisi = $createdVisiMisi->toArray();
        $this->assertArrayHasKey('id', $createdVisiMisi);
        $this->assertNotNull($createdVisiMisi['id'], 'Created VisiMisi must have id specified');
        $this->assertNotNull(VisiMisi::find($createdVisiMisi['id']), 'VisiMisi with given id must be in DB');
        $this->assertModelData($visiMisi, $createdVisiMisi);
    }

    /**
     * @test read
     */
    public function testReadVisiMisi()
    {
        $visiMisi = $this->makeVisiMisi();
        $dbVisiMisi = $this->visiMisiRepo->find($visiMisi->id);
        $dbVisiMisi = $dbVisiMisi->toArray();
        $this->assertModelData($visiMisi->toArray(), $dbVisiMisi);
    }

    /**
     * @test update
     */
    public function testUpdateVisiMisi()
    {
        $visiMisi = $this->makeVisiMisi();
        $fakeVisiMisi = $this->fakeVisiMisiData();
        $updatedVisiMisi = $this->visiMisiRepo->update($fakeVisiMisi, $visiMisi->id);
        $this->assertModelData($fakeVisiMisi, $updatedVisiMisi->toArray());
        $dbVisiMisi = $this->visiMisiRepo->find($visiMisi->id);
        $this->assertModelData($fakeVisiMisi, $dbVisiMisi->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteVisiMisi()
    {
        $visiMisi = $this->makeVisiMisi();
        $resp = $this->visiMisiRepo->delete($visiMisi->id);
        $this->assertTrue($resp);
        $this->assertNull(VisiMisi::find($visiMisi->id), 'VisiMisi should not exist in DB');
    }
}
