<?php

require_once __DIR__ . "/../base/localWarrior.php";


$GLOBALS['warriorID'] = 'azerty';

// Définissez vos class de combattants
abstract class Warrior extends LocalWarrior {
    public $id;
    public $name;
    public $speed;
    public $life;
    public $shield;
    public $imageUrl;
    public $weapon;

    //Créer Le Constructeur
    public function __construct($id, $speed = 30, $life = 100, $shield = 20){
        
        //Le constructeur initialise l'id, speed, life et shield
        $this->id = $id;
        $this->speed = $speed;
        $this->life = $life;
        $this->shield = $shield;
    }

    //Créer méthode setWeapon avec weapon en argument --SETTER--
    public function setWeapon(Weapon $weapon){
        $this->weapon = $weapon;
    }

    //Créer méthode setImageURL
    public function setImageUrl($url){
        $this->imageUrl = $url;
    }

}

// Créer Les Classes StartrekWarrior, MarvelWarrior et PokemonWarrior
class StartrekWarrior extends Warrior
{
    public $mentalPower;
    
    //Créer Le Constructeur
    public function __construct($id, $speed = 30, $life = 100, $shield = 20, $mentalPower = 8){
        
        //Le constructeur herite du constructeur Warrior et affecte $mentalPower
        parent::__construct($id, $speed, $life, $shield);
        $this->mentalPower = $mentalPower;
    }
    
    //Créer une methode power qui retourne l'attribut
    public function power(){
        return $this->mentalPower;
    }

}

class MarvelWarrior extends Warrior
{
    public $superPower;

    //Créer Le Constructeur
    public function __construct($id, $speed = 30, $life = 100, $shield = 20, $superPower = 100){
       
        //Le constructeur herite du constructeur Warrior et affecte $mentalPower
        parent::__construct($id, $speed, $life, $shield);
        $this->superPower = $superPower;

    }

    //Créer une methode power qui retourne l'attribut
    public function power(){
        return $this->superPower;
    }
}

class PokemonWarrior extends Warrior 
{
    public $level;

    //Créer Le Constructeur
    public function __construct($id, $speed = 30, $life = 100, $shield = 20, $level = 1){
        
        //Le constructeur herite du constructeur Warrior et affecte $mentalPower
        parent::__construct($id, $speed, $life, $shield);
        $this->level = $level;
    }
    
    //Créer une methode power qui retourne l'attribut
    public function power(){
        return $this->level;
    }
}

//Créer une classe weapon
class Weapon extends Warrior
{
    public $id;
    public $strength;
    public $imageUrl;

    public function __construct($id, $strength){
        $this->id = $id;
        $this->strength = $strength;
    }

    //Créer méthode setImageURL
    public function setImageUrl($url){
        $this->imageUrl = $url;
    }
}

