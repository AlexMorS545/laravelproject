<?php

use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('sub_categories')->insert($this->getData());

    }

    public function getData(): array
    {
        $data = [
            [
                'title'       => 'Футбол',
                'description' => 'Всё про Футбол',
                'image'       => 'football.jpg',
                'created_at'  => now(),
                'updated_at'  => now()
            ],
            [
                'title'       => 'Хоккей',
                'description' => 'Всё про Хоккей',
                'image'       => 'hockey.jpg',
                'created_at'  => now(),
                'updated_at'  => now()
            ],
            [
                'title'       => 'Баскетбол',
                'description' => 'Всё про Баскетбол',
                'image'       => 'basketball.jpg',
                'created_at'  => now(),
                'updated_at'  => now()
            ],
            [
                'title'       => 'Курс валют',
                'description' => 'Самые свежие курсы валют',
                'image'       => 'currency.jpg',
                'created_at'  => now(),
                'updated_at'  => now()
            ],
            [
                'title'       => 'Акции',
                'description' => 'Всё о мировых акциях',
                'image'       => 'stocks.jpg',
                'created_at'  => now(),
                'updated_at'  => now()
            ]
        ];

        return $data;
    }
}
