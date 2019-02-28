<?php

use Faker\Factory as Faker;
use App\Models\Buku;
use App\Repositories\BukuRepository;

trait MakeBukuTrait
{
    /**
     * Create fake instance of Buku and save it in database
     *
     * @param array $bukuFields
     * @return Buku
     */
    public function makeBuku($bukuFields = [])
    {
        /** @var BukuRepository $bukuRepo */
        $bukuRepo = App::make(BukuRepository::class);
        $theme = $this->fakeBukuData($bukuFields);
        return $bukuRepo->create($theme);
    }

    /**
     * Get fake instance of Buku
     *
     * @param array $bukuFields
     * @return Buku
     */
    public function fakeBuku($bukuFields = [])
    {
        return new Buku($this->fakeBukuData($bukuFields));
    }

    /**
     * Get fake data of Buku
     *
     * @param array $postFields
     * @return array
     */
    public function fakeBukuData($bukuFields = [])
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
        ], $bukuFields);
    }
}
