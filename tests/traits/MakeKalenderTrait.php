<?php

use Faker\Factory as Faker;
use App\Models\Kalender;
use App\Repositories\KalenderRepository;

trait MakeKalenderTrait
{
    /**
     * Create fake instance of Kalender and save it in database
     *
     * @param array $kalenderFields
     * @return Kalender
     */
    public function makeKalender($kalenderFields = [])
    {
        /** @var KalenderRepository $kalenderRepo */
        $kalenderRepo = App::make(KalenderRepository::class);
        $theme = $this->fakeKalenderData($kalenderFields);
        return $kalenderRepo->create($theme);
    }

    /**
     * Get fake instance of Kalender
     *
     * @param array $kalenderFields
     * @return Kalender
     */
    public function fakeKalender($kalenderFields = [])
    {
        return new Kalender($this->fakeKalenderData($kalenderFields));
    }

    /**
     * Get fake data of Kalender
     *
     * @param array $postFields
     * @return array
     */
    public function fakeKalenderData($kalenderFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'judul' => $fake->word,
            'file' => $fake->word,
            'desc' => $fake->text,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $kalenderFields);
    }
}
