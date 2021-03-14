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
                'name'       => 'Футбол',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name'       => 'Хоккей',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name'       => 'Баскетбол',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name'       => 'Курс валют',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name'       => 'Акции',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        return $data;
    }
}
