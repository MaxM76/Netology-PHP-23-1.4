<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задание 1.4.</title>
</head>

<?php

$eurasia_animals = array(
    "Capra ibex",
    "Sciurus vulgaris",
    "Cervus elaphus",
    "Ursus arctos",
    "Oryctolagus cuniculus",
    "Lynx",
    "Sus scrofa",
    "Erinaceus europaeus",
    "Elephas maximus",
    "Bos javanicus",
    "Arctictis binturong",
    "Bos gaurus",
    "Camelus bactrianus",
    "Pongo",
);

$africa_animals = array(
    "Okapia Lankester",
    "Hexaprotodon liberiensis",
    "Potamochoerus porcus",
    "Lycaon pictus",
    "Tragelaphus strepsiceros",
    "Macroscelidea",
    "Litocranius walleri",
    "Galago",
    "Civettictis civetta",
    "Balaeniceps rex",
    "Balearica regulorum",
    "Colobus guereza",
    "Spheniscus demersus",
    "Dendroaspis polylepis",
    "Calamoichthys calabaricus",
);

$australia_animals = array(
    "Tachyglossus",
    "Bubalus arnee",
    "Canis lupus dingo",
    "Myrmecobius fasciatus",
    "Pteropus",
    "Phascolarctos cinereus",
    "Lagostrophus fasciatus",
    "Ornithorhynchus anatinus",
    "Dendrolagus",
    "Sarcophilus harrisii",
    "Trichosurus vulpecula",
    "Oxyuranus",
    "Dromaius novaehollandiae",
    "Dasyurus maculatus",
);

$antarctica_animals = array(
    "Belgica antarctica",
    "Euphausia superba",
    "Aptenodytes patagonicus",
    "Aptenodytes forsteri",
    "Catharacta maccormicki",
    "Mirounga leonina",
    "Lobodon carcinophagus",
    "Hydrurga leptonyx",
    "Arctocephalus gazella",
    "Macronectes giganteus",
    "Procellariidae",
    "Phocidae",
);

$south_america_animals = array(
    "Electrophorus electricus",
    "Arapaima gigas",
    "Dendrobates tinctorius",
    "Eunectes murinus",
    "Serrasalmidae",
    "Melanosuchus",
    "Panthera onca",
    "Dasyprocta",
    "Felidae",
    "Lama guanicoe",
    "Hydrochoerus hydrochaeris",
);

$north_america_animals = array(
    "Castor canadensis",
    "Dasypus novemcinctus",
    "Heloderma suspectum",
    "Rangifer tarandus",
    "Mustela nigripes",
    "Ovibos moschatus",
    "Cervus elaphus subspp.",
    "Gulo gulo",
    "Martes pennanti",
    "Condylura cristata",
    "Canis latrans",
    "Meleagris gallopavo",
    "Martes americana",
    "Phrynosoma",
    "Bison",
);

$animals = array(
    "Eurasia" => $eurasia_animals,
    "Africa" => $africa_animals,
    "Australia" => $australia_animals,
    "Antarctica" => $antarctica_animals,
    "South America" => $south_america_animals,
    "North America" => $north_america_animals
);
?>

  <body>
    <h1>Задание 1.4.</h1>

<?php
for (reset($animals); ($k = key($animals)); next($animals)){
    for($i = 0; $i < count($animals[$k]); $i++) {
        $tmp_str_arr = explode(' ',$animals[$k][$i]);
        if (count($tmp_str_arr)==2) $world_animals[] = array("name" => $animals[$k][$i], "continent" => $k);
    }
}

for($i = 0; $i < count($world_animals); $i++) {
    $tmp_str_arr = explode(' ',$world_animals[$i]["name"]);
    $world_animals[$i]["name"] = $tmp_str_arr[0];
    $tmp_second_wrds_arr[] = $tmp_str_arr[1];
}

shuffle($tmp_second_wrds_arr);
$continent = "";
$tmp_str = "";

for($i = 0; $i < count($world_animals); $i++) {
    if ($world_animals[$i]["continent"] !== $continent) {
        if ($continent!=="") echo rtrim($tmp_str,", ") . "</p>";
        $continent = $world_animals[$i]["continent"];
        echo "<h2>$continent</h2>";
        $tmp_str = "<p>";
    }
    $tmp_str_arr = array($world_animals[$i]["name"], $tmp_second_wrds_arr[$i]);
    $world_animals[$i]["name"] = implode(' ',$tmp_str_arr);
    $tmp_str = $tmp_str . $world_animals[$i]["name"] . ", ";

}

echo rtrim($tmp_str,", ") . "</p>";

?>

  </body>
</html>