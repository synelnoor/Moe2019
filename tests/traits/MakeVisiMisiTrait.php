<?php

use Faker\Factory as Faker;
use App\Models\VisiMisi;
use App\Repositories\VisiMisiRepository;

trait MakeVisiMisiTrait
{
    /**
     * Create fake instance of VisiMisi and save it in database
     *
     * @param array $visiMisiFields
     * @return VisiMisi
     */
    public function makeVisiMisi($visiMisiFields = [])
    {
        /** @var VisiMisiRepository $visiMisiRepo */
        $visiMisiRepo = App::make(VisiMisiRepository::class);
        $theme = $this->fakeVisiMisiData($visiMisiFields);
        return $visiMisiRepo->create($theme);
    }

    /**
     * Get fake instance of VisiMisi
     *
     * @param array $visiMisiFields
     * @return VisiMisi
     */
    public function fakeVisiMisi($visiMisiFields = [])
    {
        return new VisiMisi($this->fakeVisiMisiData($visiMisiFields));
    }

    /**
     * Get fake data of VisiMisi
     *
     * @param array $postFields
     * @return array
     */
    public function fakeVisiMisiData($visiMisiFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'Visi' => $fake->text,
            'Misi' => $fake->text,
            'Tujuan' => $fake->text,
            'halaman' => $fake->randomElement(]),
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $visiMisiFields);
    }
}
