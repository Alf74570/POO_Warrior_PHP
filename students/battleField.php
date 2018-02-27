<?php

  require_once __DIR__ . "/../base/baseBattleField.php";
  require_once "warrior.php";


  class BattleField extends BaseBattleField
  {
    static function createMyWarrior(){
      $guerrier = new MarvelWarrior($GLOBALS['warriorID']);
      $guerrier->setImageUrl("https://img00.deviantart.net/b4c8/i/2012/293/d/b/harsk_by_shiprock-d5iex0r.jpg");

      $weapon = new Weapon("Hache", 50);
      $weapon->setImageUrl("https://www.no-cookie.com/w/images/1/18/Hache_de_combat_de_Victo-screen.jpg");
    
      $guerrier->setWeapon($weapon);

      $guerrier->saveNew();
    }

    static function createOtherWarrior(){
      $guerrier = new PokemonWarrior("Pokemon");
      $guerrier->setImageUrl("http://www2.mes-coloriages-preferes.biz/colorino/Images/Large/Personnages-celebres-Nintendo-Pokemon-509301.png");

      $weapon = new Weapon("Feu", 30);
      $weapon->setImageUrl("https://desarmons.net/wp-content/uploads/2016/04/BT-31000-A_2_big.jpeg");

      $guerrier->setWeapon($weapon);

      $guerrier->saveNew();
    }
  }
