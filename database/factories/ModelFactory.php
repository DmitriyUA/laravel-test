<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {

    $name = array(
        'Ivan',
        'Peter',
        'John',
        'Sem',
        'David',
        'Tom',
        'Max',
        'Alex',
        'Andrey',
        'Alice',
        'Veronica',
        'Gloria',
        'Diana',
        'Eva',
        'Kira',
        'Kristina',
        'Leila',
        'Nika',
        'Rita',
    );

    $surname = array(
        'Dorris',
        'Imber',
        'Larbo',
        'Lerua',
        'Lorenco',
        'Mayer',
        'Mandino',
        'Miller',
        'Montarelli',
        'Nilsen',
        'Norton',
        'Ormando',
        'Perro',
        'Rait',
        'Robbins',
        'Tomson',
        'Torelli',
        'Whyte',
        'Flinn',
    );
    return [
        'name' => $name[rand(0, sizeof($name)-1)],
        'surname' => $surname[rand(0, sizeof($surname)-1)],
        'age' => rand(18, 99),
    ];
});
