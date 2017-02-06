<?php

header('access-control-allow-origin:*');

  $tweets = array(
  array(
      'name' => 'Ryhad',
      'pseudo' => '@Gryhades_et_BBQ',
      'tweet' => "J'ai pas linké ma librairie Angular... #KillMe",
      'profileurl' => 'https://twitter.com/RyhadB',
      "img" => "/img/ryhad.jpg"
    ),
  array(
      'name' => 'Valentin',
      'pseudo' => '@VAL_10',
      'tweet' => "J'aurais vraiment dû faire mon exo Twitter ce week-end !",
      'profileurl' => 'https://twitter.com/DissaisV',
      "img" => "/img/val.jpg"
    ),
  array(
      'name' => 'César',
      'pseudo' => '@johnny_en_plein_doute',
      'tweet' => "Moi je fais l'exo avec Angular 1 parce que je suis DINGUE",
      'profileurl' => 'https://twitter.com/TailleurCesar',
        "img" => "/img/cesar.jpg",
    ),
  array(
      'name' => 'Élise',
      'pseudo' => '@Eliz_2_MARS',
      'tweet' => "J'ai pas linké ma librairie Angular... #KillMe",
      'profileurl' => 'https://twitter.com/RyhadB',
      "img" => "/img/elise.jpg"
    ),
  array(
      'name' => 'Alexandradra',
      'pseudo' => '@Alexandradra_',
      'tweet' => "C'EST MOI LA BOSS DES ROUTEURS UI ANGULAR !!!!!",
      'profileurl' => 'https://twitter.com/Alexandradra_',
      "img" => "/img/avatar.jpg"
    ),
  array(
      'name' => 'Okba',
      'pseudo' => '@Okbalancetoidegaucheadroite',
      'tweet' => "666 lol b C++",
      'profileurl' => '#',
      "img" => "/img/okba.png"
    ),
  array(
      'name' => 'Michelle Obama',
      'pseudo' => '@MichelleObama',
      'tweet' => ".@Alexandradra_ est une vraie source d'inspiration pour moi, elle m'a tout appris",
      'profileurl' => 'https://twitter.com/michelleobama?lang=fr',
      "img" => "/img/michele.jpg"
    ),
  );

  echo json_encode($tweets);
?>
