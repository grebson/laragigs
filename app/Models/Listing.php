<?php

namespace App\Models;

class Listing {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.'
            ],
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Ipsam minima et illo reprehenderit quas possimus voluptas repudiandae cum expedita!'
            ]
        ];
    }
}
