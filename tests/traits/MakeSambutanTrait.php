<?php

use Faker\Factory as Faker;
use App\Models\Sambutan;
use App\Repositories\SambutanRepository;

trait MakeSambutanTrait
{
    /**
     * Create fake instance of Sambutan and save it in database
     *
     * @param array $sambutanFields
     * @return Sambutan
     */
    public function makeSambutan($sambutanFields = [])
    {
        /** @var SambutanRepository $sambutanRepo */
        $sambutanRepo = App::make(SambutanRepository::class);
        $theme = $this->fakeSambutanData($sambutanFields);
        return $sambutanRepo->create($theme);
    }

    /**
     * Get fake instance of Sambutan
     *
     * @param array $sambutanFields
     * @return Sambutan
     */
    public function fakeSambutan($sambutanFields = [])
    {
        return new Sambutan($this->fakeSambutanData($sambutanFields));
    }

    /**
     * Get fake data of Sambutan
     *
     * @param array $postFields
     * @return array
     */
    public function fakeSambutanData($sambutanFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'dosen' => $fake->randomDigitNotNull,
            'judul' => $fake->word,
            'sambutan' => $fake->text,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $sambutanFields);
    }
}
