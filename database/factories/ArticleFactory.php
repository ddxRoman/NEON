<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'header'=>fake()->name(),
            'body'=>"Далеко-далеко за, Далеко-далеко за словесными горами в стране, гласных и согласных живут рыбные тексты. Толку lorem все океана свой власти журчит единственное текста она, домах составитель своих злых от всех! словесными горами в стране гласных и согласных живут рыбные тексты. Подпоясал путь, коварных оксмокс осталось ipsum продолжил своих переписывается переписали.",
            'rank'=>"0",
        ];
    }
}
