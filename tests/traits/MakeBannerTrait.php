<?php

use Faker\Factory as Faker;
use App\Models\Banner;
use App\Repositories\BannerRepository;

trait MakeBannerTrait
{
    /**
     * Create fake instance of Banner and save it in database
     *
     * @param array $bannerFields
     * @return Banner
     */
    public function makeBanner($bannerFields = [])
    {
        /** @var BannerRepository $bannerRepo */
        $bannerRepo = App::make(BannerRepository::class);
        $theme = $this->fakeBannerData($bannerFields);
        return $bannerRepo->create($theme);
    }

    /**
     * Get fake instance of Banner
     *
     * @param array $bannerFields
     * @return Banner
     */
    public function fakeBanner($bannerFields = [])
    {
        return new Banner($this->fakeBannerData($bannerFields));
    }

    /**
     * Get fake data of Banner
     *
     * @param array $postFields
     * @return array
     */
    public function fakeBannerData($bannerFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'title' => $fake->word,
            'image' => $fake->word,
            'desc' => $fake->text,
            'created_by' => $fake->randomDigitNotNull,
            'updated_by' => $fake->randomDigitNotNull,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $bannerFields);
    }
}
