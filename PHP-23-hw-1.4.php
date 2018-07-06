<?php
$eurasiaAnimals = array(
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
$africaAnimals = array(
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
$australiaAnimals = array(
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
$antarcticaAnimals = array(
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
$southAmericaAnimals = array(
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
$northAmericaAnimals = array(
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
    "Eurasia" => $eurasiaAnimals,
    "Africa" => $africaAnimals,
    "Australia" => $australiaAnimals,
    "Antarctica" => $antarcticaAnimals,
    "South America" => $southAmericaAnimals,
    "North America" => $northAmericaAnimals
);

for (reset($animals); ($k = key($animals)); next($animals)) {
    for($i = 0; $i < count($animals[$k]); $i++) {
        $tmpStrArr = explode(' ',$animals[$k][$i]);
        if (count($tmpStrArr)==2) {
            $worldAnimals[] = array("name" => $animals[$k][$i], "continent" => $k);
        }
    }
}

for($i = 0; $i < count($worldAnimals); $i++) {
    $tmpStrArr = explode(' ',$worldAnimals[$i]["name"]);
    $worldAnimals[$i]["name"] = $tmpStrArr[0];
    $tmpSecondWrdsArr[] = $tmpStrArr[1];
}

shuffle($tmpSecondWrdsArr);

?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Задание 1.4.</title>
  </head>

  <body>
    <h1>Задание 1.4.</h1>

<?php
$continent = "";
$tmpStr = "";
for($i = 0; $i < count($worldAnimals); $i++) {
    if ($worldAnimals[$i]["continent"] !== $continent) {
        if ($continent!=="") {
            echo rtrim($tmpStr, ", ") . "</p>";
        }
        $continent = $worldAnimals[$i]["continent"];
        echo "<h2>$continent</h2>";
        $tmpStr = "<p>";
    }
    $tmpStrArr = array($worldAnimals[$i]["name"], $tmpSecondWrdsArr[$i]);
    $worldAnimals[$i]["name"] = implode(' ',$tmpStrArr);
    $tmpStr = $tmpStr . $worldAnimals[$i]["name"] . ", ";
}
echo rtrim($tmpStr,", ") . "</p>";
?>

</body>
</html>