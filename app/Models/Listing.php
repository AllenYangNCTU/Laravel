<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta voluptatibus laborum perspiciatis omnis maxime laboriosam similique repellendus. Aperiam tempore harum, nisi consequatur amet odio ut odit. Distinctio assumenda cupiditate autem'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta voluptatibus laborum perspiciatis omnis maxime laboriosam similique repellendus. Aperiam tempore harum, nisi consequatur amet odio ut odit. Distinctio assumenda cupiditate autem'
            ]
        ];
    }

    public static function find($id)
    {
        $listings = self::all();
        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}