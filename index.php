<?php 

require_once 'vendor/autoload.php';

$faker = Faker\Factory::create('tr_TR');

$array = [
   "Adres" => $faker->address,
   "Tc No" => $faker->tcNo,
   "Telefon" => $faker->phoneNumber,
   "Slug" => $faker->slug,
   "MAC Adresi" => $faker->macAddress,
   "Tarih" => $faker->realText($maxNbChars = 200, $indexSize = 2)
];

echo "<pre>";

print_r($array);

echo "</pre>";

?>

Title : <input type="text" value="<?php echo $faker->firstNameMale; ?>"><br>
Title : <input type="text" value="<?php echo $faker->firstNameMale; ?>"><br>
Title : <input type="text" value="<?php echo $faker->firstNameMale; ?>">