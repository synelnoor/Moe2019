<?php

use App\Models\Jurnal;
use App\Repositories\JurnalRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class JurnalRepositoryTest extends TestCase
{
    use MakeJurnalTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var JurnalRepository
     */
    protected $jurnalRepo;

    public function setUp()
    {
        parent::setUp();
        $this->jurnalRepo = App::make(JurnalRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateJurnal()
    {
        $jurnal = $this->fakeJurnalData();
        $createdJurnal = $this->jurnalRepo->create($jurnal);
        $createdJurnal = $createdJurnal->toArray();
        $this->assertArrayHasKey('id', $createdJurnal);
        $this->assertNotNull($createdJurnal['id'], 'Created Jurnal must have id specified');
        $this->assertNotNull(Jurnal::find($createdJurnal['id']), 'Jurnal with given id must be in DB');
        $this->assertModelData($jurnal, $createdJurnal);
    }

    /**
     * @test read
     */
    public function testReadJurnal()
    {
        $jurnal = $this->makeJurnal();
        $dbJurnal = $this->jurnalRepo->find($jurnal->id);
        $dbJurnal = $dbJurnal->toArray();
        $this->assertModelData($jurnal->toArray(), $dbJurnal);
    }

    /**
     * @test update
     */
    public function testUpdateJurnal()
    {
        $jurnal = $this->makeJurnal();
        $fakeJurnal = $this->fakeJurnalData();
        $updatedJurnal = $this->jurnalRepo->update($fakeJurnal, $jurnal->id);
        $this->assertModelData($fakeJurnal, $updatedJurnal->toArray());
        $dbJurnal = $this->jurnalRepo->find($jurnal->id);
        $this->assertModelData($fakeJurnal, $dbJurnal->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteJurnal()
    {
        $jurnal = $this->makeJurnal();
        $resp = $this->jurnalRepo->delete($jurnal->id);
        $this->assertTrue($resp);
        $this->assertNull(Jurnal::find($jurnal->id), 'Jurnal should not exist in DB');
    }
}
