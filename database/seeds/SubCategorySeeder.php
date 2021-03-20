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
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title'       => 'Хоккей',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title'       => 'Баскетбол',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title'       => 'Курс валют',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title'       => 'Акции',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        return $data;
    }
}
