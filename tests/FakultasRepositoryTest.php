<?php

use App\Models\Fakultas;
use App\Repositories\FakultasRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FakultasRepositoryTest extends TestCase
{
    use MakeFakultasTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var FakultasRepository
     */
    protected $fakultasRepo;

    public function setUp()
    {
        parent::setUp();
        $this->fakultasRepo = App::make(FakultasRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateFakultas()
    {
        $fakultas = $this->fakeFakultasData();
        $createdFakultas = $this->fakultasRepo->create($fakultas);
        $createdFakultas = $createdFakultas->toArray();
        $this->assertArrayHasKey('id', $createdFakultas);
        $this->assertNotNull($createdFakultas['id'], 'Created Fakultas must have id specified');
        $this->assertNotNull(Fakultas::find($createdFakultas['id']), 'Fakultas with given id must be in DB');
        $this->assertModelData($fakultas, $createdFakultas);
    }

    /**
     * @test read
     */
    public function testReadFakultas()
    {
        $fakultas = $this->makeFakultas();
        $dbFakultas = $this->fakultasRepo->find($fakultas->id);
        $dbFakultas = $dbFakultas->toArray();
        $this->assertModelData($fakultas->toArray(), $dbFakultas);
    }

    /**
     * @test update
     */
    public function testUpdateFakultas()
    {
        $fakultas = $this->makeFakultas();
        $fakeFakultas = $this->fakeFakultasData();
        $updatedFakultas = $this->fakultasRepo->update($fakeFakultas, $fakultas->id);
        $this->assertModelData($fakeFakultas, $updatedFakultas->toArray());
        $dbFakultas = $this->fakultasRepo->find($fakultas->id);
        $this->assertModelData($fakeFakultas, $dbFakultas->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteFakultas()
    {
        $fakultas = $this->makeFakultas();
        $resp = $this->fakultasRepo->delete($fakultas->id);
        $this->assertTrue($resp);
        $this->assertNull(Fakultas::find($fakultas->id), 'Fakultas should not exist in DB');
    }
}
