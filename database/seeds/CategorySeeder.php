<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->insert($this->getData());
    }

    public function getData(): array
    {
        $data = [
            [
                'name'       => 'Спорт',
                'slug'       => 'world',
                'image'      => 'sport.jpg',
                'description'=> 'Последнии новости в мире спорта',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name'       => 'Экономика',
                'image'      => 'economic.jpeg',
                'description'=> 'Все новости экономики',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name'       => 'Мировые новости',
                'image'      => 'world.jpg',
                'description'=> 'Самые важные мировые новости',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        return $data;
    }
}
