<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$150000'
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$100000'
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '$60000'
            ]
        ];
    }

    public static function find(int $id): array
    {
        $job = Arr::first(Job::all(), fn($job) => $job['id'] == $id);

        if (!$job) {   //incase page doesn't exist since no product has that ID
            abort(404);
        }

        return $job;
    }
}
