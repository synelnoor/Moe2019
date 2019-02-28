<?php

use Faker\Factory as Faker;
use App\Models\Event;
use App\Repositories\EventRepository;

trait MakeEventTrait
{
    /**
     * Create fake instance of Event and save it in database
     *
     * @param array $eventFields
     * @return Event
     */
    public function makeEvent($eventFields = [])
    {
        /** @var EventRepository $eventRepo */
        $eventRepo = App::make(EventRepository::class);
        $theme = $this->fakeEventData($eventFields);
        return $eventRepo->create($theme);
    }

    /**
     * Get fake instance of Event
     *
     * @param array $eventFields
     * @return Event
     */
    public function fakeEvent($eventFields = [])
    {
        return new Event($this->fakeEventData($eventFields));
    }

    /**
     * Get fake data of Event
     *
     * @param array $postFields
     * @return array
     */
    public function fakeEventData($eventFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nama' => $fake->word,
            'tgl' => $fake->word,
            'desc' => $fake->text,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $eventFields);
    }
}
