<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
    public static function all(): array
    {

        $jobs = [
            [
                'id'    => 1,
                'title' => 'CEO',
                'wage'  => '£50,000'
            ],
            [
                'id'    => 2,
                'title' => 'Labourer',
                'wage'  => '£20,000',
            ],
            [
                'id'    => 3,
                'title' => 'Picker',
                'wage'  => '£30,000'
            ]
        ];

        return $jobs;
    }

    public static function find(int $offer): array
    {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $offer);

        if (! $job) {
            abort(404);
        }

        return $job;
    }
}
