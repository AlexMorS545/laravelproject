<?php

namespace App\Services;

use Faker\Factory;

class TemplateNewsService
{

    public function getNews(): array
    {
        $news = [];
        $faker = Factory::create('ru_Ru');

        for($i = 0; $i < 6; $i++) {
            $news[] = [
                'text' =>$faker->text(250),
                'author' => $faker->firstName ." ". $faker->lastName,
                'created_at' => now()
            ];
        }
        return $news;
    }
}
