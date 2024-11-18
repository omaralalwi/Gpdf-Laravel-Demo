<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Omaralalwi\LexiTranslate\Enums\Language;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'meta_description' => $this->faker->text(150),
            'image' => $this->faker->imageUrl(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

    public function withTranslations(): self
    {
        return $this->afterCreating(function (Post $post) {
            $post->setTranslations($this->getTranslations());
        });
    }

    public function getTranslations(): array
    {
        return [
            Language::AR->value => [
                'title' => 'العنوان باللغة العربية',
                'description' => 'الوصف باللغة العربية',
            ],
            Language::EN->value => [
                'title' => 'English Language Title',
                'description' => 'Description in English Language',
            ],
            Language::RU->value => [
                'title' => 'Название на русском языке',
                'description' => 'Описание на русском языке',
            ],
            Language::ZH->value => [
                'title' => '中文标题',
                'description' => '中文描述',
            ],
            Language::FR->value => [
                'title' => 'Titre en français',
                'description' => 'Description en français',
            ],
        ];
    }
}
