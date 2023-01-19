<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Kendaraan;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(Kendaraan::class, function (Faker $faker) {
    $jenis = ['Orang', 'Barang'];
    return [
        'kode_kendaraan' => $faker->unique()->regexify('[A-Z]{1}[0-9]{2}[A-Z]{2}'),
        'jenis_kendaraan' => Arr::random($jenis),
        'max_bbm' => $faker->numberBetween(200, 500),
        'jadwal_service' => $faker->date('Y-m-d', '2023-02-30')
    ];
});
