<?php

namespace App\DataFixtures;

use App\Entity\Pizza;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PizzaFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $pizzas = [
            [
                'Месть Героев',
                'Эта пицца — выбор супергероев, направленных на месть злодеям. Сочетание острых и сладких ингредиентов напоминает о контрасте добра и зла.',
                250.36,
                'images/pizza/Месть Героев.webp',
            ],
            [
                'Последний Смеющийся',
                'Вдохновленная Джокером, эта пицца представляет собой хаотичное, но невероятно вкусное сочетание ярких и контрастных вкусов.',
                999.99,
                'images/pizza/Последний Смеющийся.webp',
            ],
            [
                'Тёмная Сила',
                ' Эта пицца для тех, кто на тёмной стороне силы. Острая, насыщенная, с ярким вкусом злодейских ингредиентов.',
                11000.99,
                'images/pizza/Тёмная Сила.webp',
            ],
            [
                'Грибной Туман',
                'Мистическая пицца, состоящая из различных видов грибов, окутана мягким сырным покрывалом. Идеальный выбор для тех, кто ценит загадочные вкусы природы.',
                700.99,
                'images/pizza/Грибной Туман.webp',
            ],
            [
                'Фреди',
                'Для настоящих мясоедов, эта пицца является выбором тех, кто готов к решительным действиям.',
                1011.99,
                'images/pizza/Фреди.webp',
            ],
            [
                'Гавайская Резня',
                'Нетрадиционное сочетание сладкого ананаса и соленой ветчины создает в этой пицце бурю вкусовых эмоций. Любимая пицца тех, кто не боится нестандартных решений.',
                1000.99,
                'images/pizza/Гавайская Резня.webp',
            ],
            [
                'Месть Вегана',
                'Легкая, но мощная пицца для вегетарианцев. Контрастные овощи на фоне темного теста напоминают о непростой борьбе за справедливость.',
                666,
                'images/pizza/Месть Вегана.webp',
            ],
            [
                'Четыре Сезона Боли',
                'Классическая пицца "Четыре сезона", но в мрачном и драматичном исполнении. Каждая четверть наполнена уникальными вкусами, представляющими разные этапы борьбы между героями и злодеями.',
                500.99,
                'images/pizza/Четыре Сезона Боли.webp',
            ],
            [
                'Жмурки',
                'Это игра, в которую вы не захотите играть, и от которой нельзя отказаться.',
                700.99,
                'images/pizza/Жмурки.webp',
            ],
            [
                'Круговая порука',
                'Здесь все взаимосвязано — от первого крошечного кусочка сыра до последней капли острого соуса.',
                854.35,
                'images/pizza/Круговая Порука.webp',
            ],
            [
                'Ассорти Колумбайн',
                'Каждая пицца на этом столе — это эпизод из жизни, где невинность встречается с темной стороной.',
                2900,
                'images/pizza/Ассорти Колумбайн.webp',
            ],
            [
                'Последний Вздох Вегетарианца',
                'Прощальный аккорд в симфонии природы.',
                400,
                'images/pizza/Последний Вздох Вегетарианца.webp',
            ],
            [
                'Леди Макбет',
                'Я слышал, многие, грибков поевши, умирают.',
                200.99,
                'images/pizza/Леди Макбет.webp',
            ],
        ];

        foreach ($pizzas as [$name, $description, $price, $image]) {
            $pizza = new Pizza();
            $pizza->setName($name);
            $pizza->setDescription($description);
            $pizza->setPrice($price);
            $pizza->setImage($image);

            $manager->persist($pizza);
        }

        $manager->flush();
    }
}
