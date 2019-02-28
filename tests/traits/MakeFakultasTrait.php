<?php

use Faker\Factory as Faker;
use App\Models\Fakultas;
use App\Repositories\FakultasRepository;

trait MakeFakultasTrait
{
    /**
     * Create fake instance of Fakultas and save it in database
     *
     * @param array $fakultasFields
     * @return Fakultas
     */
    public function makeFakultas($fakultasFields = [])
    {
        /** @var FakultasRepository $fakultasRepo */
        $fakultasRepo = App::make(FakultasRepository::class);
        $theme = $this->fakeFakultasData($fakultasFields);
        return $fakultasRepo->create($theme);
    }

    /**
     * Get fake instance of Fakultas
     *
     * @param array $fakultasFields
     * @return Fakultas
     */
    public function fakeFakultas($fakultasFields = [])
    {
        return new Fakultas($this->fakeFakultasData($fakultasFields));
    }

    /**
     * Get fake data of Fakultas
     *
     * @param array $postFields
     * @return array
     */
    public function fakeFakultasData($fakultasFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nama' => $fake->word,
            'desc' => $fake->text,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $fakultasFields);
    }
}
