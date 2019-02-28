<?php

use App\Models\Kalender;
use App\Repositories\KalenderRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class KalenderRepositoryTest extends TestCase
{
    use MakeKalenderTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var KalenderRepository
     */
    protected $kalenderRepo;

    public function setUp()
    {
        parent::setUp();
        $this->kalenderRepo = App::make(KalenderRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateKalender()
    {
        $kalender = $this->fakeKalenderData();
        $createdKalender = $this->kalenderRepo->create($kalender);
        $createdKalender = $createdKalender->toArray();
        $this->assertArrayHasKey('id', $createdKalender);
        $this->assertNotNull($createdKalender['id'], 'Created Kalender must have id specified');
        $this->assertNotNull(Kalender::find($createdKalender['id']), 'Kalender with given id must be in DB');
        $this->assertModelData($kalender, $createdKalender);
    }

    /**
     * @test read
     */
    public function testReadKalender()
    {
        $kalender = $this->makeKalender();
        $dbKalender = $this->kalenderRepo->find($kalender->id);
        $dbKalender = $dbKalender->toArray();
        $this->assertModelData($kalender->toArray(), $dbKalender);
    }

    /**
     * @test update
     */
    public function testUpdateKalender()
    {
        $kalender = $this->makeKalender();
        $fakeKalender = $this->fakeKalenderData();
        $updatedKalender = $this->kalenderRepo->update($fakeKalender, $kalender->id);
        $this->assertModelData($fakeKalender, $updatedKalender->toArray());
        $dbKalender = $this->kalenderRepo->find($kalender->id);
        $this->assertModelData($fakeKalender, $dbKalender->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteKalender()
    {
        $kalender = $this->makeKalender();
        $resp = $this->kalenderRepo->delete($kalender->id);
        $this->assertTrue($resp);
        $this->assertNull(Kalender::find($kalender->id), 'Kalender should not exist in DB');
    }
}
