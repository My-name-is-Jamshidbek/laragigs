<?php
    namespace App\Models;

    class Listing{
        public static function all() {
            return [
                    [
                        'id' => 0,
                        'title' => 'Listing one',
                        'description' => 'lorem ipsum dolor sit amet lore mauris vel'
                    ],
                    [
                        'id' => 1,
                        'title' => 'Listing two',
                        'description' => 'lorem ipsum dolor sit amet lore mauris vel'
                    ],
                    [
                        'id' => 2,
                        'title' => 'Listing three',
                        'description' => 'lorem ipsum dolor sit amet lore mauris vel'
                    ]    
                ];
            }
        
        public static function find($id) {
            $listings = self::all();
            foreach ($listings as $listing) {
                if ($listing['id'] == $id) {
                    return $listing;
                }
            }
            return ["title" => "Not Found", "description" => ""];
        }
    }