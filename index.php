<?php

 class Airplane {

   public $brand;

   public $type;

   public $maxCapacity;

   public $yearConstruction;

   private $passengersOnBoard = [];



   public function __construct($brand,$type,$maxCapatity,$yearConstruction){

     $this->brand = $brand;
     $this->type = $type;
     $this->maxCapacity = $maxCapatity;
     $this->yearConstruction = $yearConstruction;

   }

   public function addPassenger(passenger $infoPassenger){
      $this-> passengersOnBoard[] = $infoPassenger;

   }

 };


  class Passenger{

    private $name;

    private $surname;

    private $birth;

    private $placeOfBirth;

    private $info = [];

    public function __construct($name,$surname,$birth,$placeOfBirth){
      $this-> name = $name;
      $this-> surname = $surname;
      $this-> birth = $birth;
      $this-> placeOfBirth = $placeOfBirth;
    }

    public function nameAndSurname($infoNewPassenger){
       $this-> info[] = $infoNewPassenger;
    }


  };

$first_model = new Airplane('Boing','737','187','2014');

echo "Il costruttore dell'aereo è " . $first_model -> brand . '<br/>';
echo "Il modello è il " . $first_model -> type . '<br/>';
echo "La sua capacità massima è di " . $first_model -> maxCapacity . " passegeri " . '<br/>';
echo "Anno di costruzione " . $first_model -> yearConstruction . '<br/>' . '<br/>';



$passenger = new Passenger('Mario','Venuti','25-4-1977','Roma');

$newPassenger = addPassenger($passenger);
echo $newPassenger;
print_r($newPassenger);
