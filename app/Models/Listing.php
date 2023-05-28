<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Latest Listings',
                'description' => 'Some descriptions here'
            ],
            [
                'id' => 2,
                'title' => 'Latest two',
                'description' => 'Some descriptions here'
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
