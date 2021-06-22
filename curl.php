<?php

$curl = curl_init();

curl_setopt_array(
  $curl,
  [
    CURLOPT_URL => 'www.themealdb.com/api/json/v1/1/random.php',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
  ]
);

$response = curl_exec($curl);

curl_close($curl);

$response = json_decode($response, true);
$response = $response['meals'][0];

$name = $response['strMeal'];
$image = $response['strMealThumb'];
$instruction = $response['strInstructions'];
$video = $response['strYoutube'];
$video = str_replace('watch?v=', 'embed/', $video);

for ($i = 1; $i <= 20; $i++) {
    if ($response['strIngredient' . $i] != '') {
        $ingredient[$i] = $response['strIngredient' . $i] . ' - ' .  $response['strMeasure' . $i];
    }
}
