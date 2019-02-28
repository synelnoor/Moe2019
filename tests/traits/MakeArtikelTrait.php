<?php

use Faker\Factory as Faker;
use App\Models\Artikel;
use App\Repositories\ArtikelRepository;

trait MakeArtikelTrait
{
    /**
     * Create fake instance of Artikel and save it in database
     *
     * @param array $artikelFields
     * @return Artikel
     */
    public function makeArtikel($artikelFields = [])
    {
        /** @var ArtikelRepository $artikelRepo */
        $artikelRepo = App::make(ArtikelRepository::class);
        $theme = $this->fakeArtikelData($artikelFields);
        return $artikelRepo->create($theme);
    }

    /**
     * Get fake instance of Artikel
     *
     * @param array $artikelFields
     * @return Artikel
     */
    public function fakeArtikel($artikelFields = [])
    {
        return new Artikel($this->fakeArtikelData($artikelFields));
    }

    /**
     * Get fake data of Artikel
     *
     * @param array $postFields
     * @return array
     */
    public function fakeArtikelData($artikelFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'judul' => $fake->word,
            'isi' => $fake->text,
            'gambar' => $fake->word,
            'tanggal' => $fake->word,
            'hits' => $fake->randomDigitNotNull,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $artikelFields);
    }
}
