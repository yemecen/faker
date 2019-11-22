<?php 

require_once 'vendor/autoload.php';

$faker = Faker\Factory::create('tr_TR');

$array = [
   "Adres" => $faker->address,
   "Tc No" => $faker->tcNo,
   "Telefon" => $faker->phoneNumber,
   "Slug" => $faker->slug,
   "MAC Adresi" => $faker->macAddress,
   "Tarih" => date($format = 'Y-m-d', $max = 'now')
];

print_r("<pre>".$array."</pre>");

?>