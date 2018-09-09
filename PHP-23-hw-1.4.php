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

$worldAnimals = array();

foreach ($animals as $continent => $continentAnimals) {
    foreach ($continentAnimals as $animal) {
        $tmpStrArr = explode(' ',$animal);
        if (count($tmpStrArr)==2) {
            $worldAnimals[$animal] = $continent;
            $tmpSecondWordsArr[] = $tmpStrArr[1];
        }
    }
}

shuffle($tmpSecondWordsArr);

$magicalAnimals = array();

foreach ($worldAnimals as $animal => $continent) {
    $tmpStrArr = explode(' ', $animal);
    $magicalAnimals[$tmpStrArr[0] . ' ' . array_shift($tmpSecondWordsArr)] = $continent;
}

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

<?php foreach (array_keys($animals) as $continent) : ?>
      <h2><?=$continent?></h2>
      <p><?=implode(', ', array_keys($magicalAnimals, $continent))?></p>
<?php endforeach;?>

  </body>
</html>