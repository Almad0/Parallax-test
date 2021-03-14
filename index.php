<?php

//
// class Movie {
//   public $title;
//   public $regista;
//
//   public function getTitle()
//   {
//     return $this -> title;
//   }
//
//   public function setTitle(string $title)
//   {
//     return $this = $title;
//   }
//
// };

//
// class User {
//   public $name;
//   public $lastName;
//   public $age;
//
//   public function __construct(string $name, string $lastName, int $age)
//   {
//     $this -> name = $name;
//     $this -> lastName = $lastName;
//     $this -> age = $age;
//   }
// }
//
//
// $andreaIglia = new User("Andrea", "Iglio", 27);
// var_dump($andreaIglia);
//
//
// $starwars = new Movie();
// $starwars -> title = "Episodio 1";
// var_dump($starwars);
//
// var_dump($starwars -> getTitle());

// NOTAZIONE DOC BLOCK



/** Fruit /**
 * @author Birillo birillo@gmail.com
 * @copyright 2021 Birillo
 */

class Fruit {
  public $name;
  public $color;
  public $taste;

  function __construct(string $name, string $color, string $taste)
  {
    $this -> name = $name;
    $this -> color = $color;
    $this -> taste = $taste;
  }
}

$arancia=13;

$apple = new Fruit ("apple", "green", "sour");


$banana = new Fruit ("banana", "yellow", "sweet");
$mango = new Fruit ("mango", "orange", "sweet");

var_dump($apple, $banana, $mango);
//
// $fruitList = [$apple, $banana, $mango];
//
// var_dump($fruitList);


$fruits = [
  "apple" => new Fruit ("apple", "green", "sour"),
  "banana" => new Fruit ("banana", "yellow", "sweet"),
  "mango" => new Fruit ("mango", "orange", "sweet"),
  "arancia" => $arancia,
];

var_dump($fruits);






// $cherry = new Fruit();
// $cherry -> name = "cherry";
// $cherry -> color = "red";
// $cherry -> taste = "sweet";
//
// var_dump($cherry);
//
// $cherry -> taste = "very sweet";
//
// var_dump($cherry);






























 ?>
