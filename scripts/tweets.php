<?php
  require_once '/home/alexandradra/.composer/vendor/autoload.php';
  $faker = Faker\Factory::create();
  $randOne = rand(0, 140);
  $randTwo = rand(0, 140);
  $randThree = rand(0, 140);
  $tweets = array(
    array(
      'name' => $faker->name,
      'pseudo' => '@'.$faker->name,
      'tweet' => $faker-> realText($maxNbChars = $randOne, $indexSize = 1),
      'profileurl' => $faker->url,
      'profileimage' => $faker-> imageUrl($width = 400, $height = 400, 'cats'),
    ),
    array(
      'name' => $faker->name,
      'pseudo' => '@'.$faker->name,
      'tweet' => $faker-> realText($maxNbChars = $randTwo, $indexSize = 1),
      'profileurl' => $faker->url,
      'profileimage' => $faker-> imageUrl($width = 400, $height = 400, 'cats'),
    ),
    array(
      'name' => $faker->name,
      'pseudo' => '@'.$faker->name,
      'tweet' => $faker-> realText($maxNbChars = $randThree, $indexSize = 1),
      'profileurl' => $faker->url,
      'profileimage' => $faker-> imageUrl($width = 400, $height = 400, 'cats'),
    ),
    array(
      'name' => 'Alexandradra',
      'pseudo' => '@Alexandradra_',
      'tweet' => "J'ai réussi l'exercice PHP toute seule !!!!",
      'profileurl' => 'https://twitter.com/Alexandradra_',
      'profileimage' => '../images/avatar73.jpg',
    ),
    array(
      'name' => 'Ryhad',
      'pseudo' => '@Gryhades_et_BBQ',
      'tweet' => "J'ai pas linké ma librairie Angular... #KillMe",
      'profileurl' => 'https://twitter.com/RyhadB',
      'profileimage' => '../images/people/ryhad.JPG',
    ),
    array(
      'name' => 'Valentin',
      'pseudo' => '@VAL_10',
      'tweet' => "J'aurais vraiment dû faire mon exo Twitter ce week-end !",
      'profileurl' => 'https://twitter.com/DissaisV',
      'profileimage' => '../images/people/val.jpg',
    ),
    array(
      'name' => 'César',
      'pseudo' => '@johnny_en_plein_doute',
      'tweet' => "Moi je fais l'exo avec Angular 1 parce que je suis DINGUE",
      'profileurl' => 'https://twitter.com/TailleurCesar',
      'profileimage' => '../images/people/cesar.jpg',
    ),
    array(
      'name' => 'Élise',
      'pseudo' => '@Eliz_2_MARS',
      'tweet' => "Refaite, avec mon casque je n'entends pas @Gryhades_et_BBQ #calme #peace",
      'profileurl' => 'https://twitter.com/eukavlin',
      'profileimage' => '../images/people/elise.jpg',
    ),
    array(
      'name' => 'Alexandradra',
      'pseudo' => '@Alexandradra_',
      'tweet' => "C'EST MOI LA BOSS DES ROUTEURS UI ANGULAR !!!!!",
      'profileurl' => 'https://twitter.com/Alexandradra_',
      'profileimage' => '../images/avatar73.jpg',
    ),
    array(
      'name' => 'Okba',
      'pseudo' => '@Okbalancetoidegaucheadroite',
      'tweet' => "666 lol b C++",
      'profileurl' => '#',
      'profileimage' => '../images/people/harambe-rip.png',
    ),
    array(
      'name' => 'Michelle Obama',
      'pseudo' => '@MichelleObama',
      'tweet' => ".@Alexandradra_ est une vraie source d'inspiration pour moi, elle m'a tout appris",
      'profileurl' => 'https://twitter.com/michelleobama?lang=fr',
      'profileimage' => '../images/people/michele.jpg',
    )
  );

  echo json_encode($tweets);
?>
