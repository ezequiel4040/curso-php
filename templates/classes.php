<?php 

  class superHero {
    //propiedades y los métodos

    //promoted properties -> PHP 8.0
    public function __construct(
    readonly public string $name,
    public string $powers, 
    public  string $planet){}

    public function attack() {
      return "{$this->name} ataca con su poder de {$this->powers}";
    }

    public function description() {
      return "{$this->name} es un superhéroe de el planeta 
      {$this->planet} y tiene los siguientes poderes: 
      {$this->powers}";
    }

    public static function random() {
      $names = ["Hulk", "Batman", "Spider-Man", "Iron Man"];
      $powers = ["fuerza", "resistencia", "espíritu", "agilidad"];
      $planets = ["Earth", "Mars", "Venus", "Mercurio"];
      

       $names = $names[array_rand($names)];
       $powers =  $powers[array_rand($powers)];
       $planets = $planets[array_rand($planets)];

       return new self($names, $powers, $planets);
        
    }

  }

// estáticos
 $hero = superHero::random(); // método estático 
 echo $hero->description();