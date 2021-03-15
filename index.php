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

   public function addPassenger($newPassenger){
     $this-> passengersOnBoard[] = $newPassenger;
   }


  public function getPassengers(){
    return $this-> passengersOnBoard;
  }

 }




  class Passenger{

    private $name;

    private $surname;

    private $birth;

    private $placeOfBirth;


  public function __construct($name,$surname,$birth,$placeOfBirth){

    $this-> name = $name;
    $this-> surname = $surname;
    $this-> birth = $birth;
    $this-> placeOfBirth = $placeOfBirth;
  }


  };





$first_model = new Airplane('Boing','737','187','2014');

echo "Il costruttore dell'aereo è " . $first_model -> brand . '<br/>';
echo "Il modello è il " . $first_model -> type . '<br/>';
echo "La sua capacità massima è di " . $first_model -> maxCapacity . " passegeri " . '<br/>';
echo "Anno di costruzione " . $first_model -> yearConstruction . '<br/>' . '<br/>';



$second_model = new Airplane('airbus','A320','194','2016');

echo "Il costruttore dell'aereo è " . $second_model -> brand . '<br/>';
echo "Il modello è il " . $second_model -> type . '<br/>';
echo "La sua capacità massima è di " . $second_model -> maxCapacity . " passegeri " . '<br/>';
echo "Anno di costruzione " . $second_model -> yearConstruction . '<br/>' . '<br/>';



$tird_model = new Airplane('Boing','777','387','2013');

echo "Il costruttore dell'aereo è " . $tird_model -> brand . '<br/>';
echo "Il modello è il " . $tird_model -> type . '<br/>';
echo "La sua capacità massima è di " . $tird_model -> maxCapacity . " passegeri " . '<br/>';
echo "Anno di costruzione " . $tird_model -> yearConstruction . '<br/>' . '<br/>';





$passenger1 = new Passenger('Mario','Venuti','25-4-1977','Roma');
print_r($passenger1);


$passenger2 = new Passenger('Placido','Mammole','25-4-1977','Roma');
print_r($passenger2) ;


$passenger3 = new Passenger('Antonello','Venditti','25-4-1977','Roma');
print_r($passenger3);





$addNewPassenger = $first_model-> addPassenger($passenger1);
print_r($first_model-> getPassengers());


$addNewPassenger = $second_model-> addPassenger($passenger2);
print_r($second_model-> getPassengers());


$addNewPassenger = $tird_model-> addPassenger($passenger3);
print_r($tird_model-> getPassengers());
