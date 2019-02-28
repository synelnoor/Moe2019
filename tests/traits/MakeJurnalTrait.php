<?php

use Faker\Factory as Faker;
use App\Models\Jurnal;
use App\Repositories\JurnalRepository;

trait MakeJurnalTrait
{
    /**
     * Create fake instance of Jurnal and save it in database
     *
     * @param array $jurnalFields
     * @return Jurnal
     */
    public function makeJurnal($jurnalFields = [])
    {
        /** @var JurnalRepository $jurnalRepo */
        $jurnalRepo = App::make(JurnalRepository::class);
        $theme = $this->fakeJurnalData($jurnalFields);
        return $jurnalRepo->create($theme);
    }

    /**
     * Get fake instance of Jurnal
     *
     * @param array $jurnalFields
     * @return Jurnal
     */
    public function fakeJurnal($jurnalFields = [])
    {
        return new Jurnal($this->fakeJurnalData($jurnalFields));
    }

    /**
     * Get fake data of Jurnal
     *
     * @param array $postFields
     * @return array
     */
    public function fakeJurnalData($jurnalFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'judul' => $fake->word,
            'file' => $fake->word,
            'link' => $fake->word,
            'tumb' => $fake->word,
            'desc' => $fake->text,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $jurnalFields);
    }
}
