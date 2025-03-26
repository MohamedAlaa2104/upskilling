<?php

//class Animal{
//    public function __construct(private string $name)
//    {
//    }
//
//
//    public function eat(): void
//    {
//        echo $this->name . ' is eating' . '<br>';
//    }
//
//    public function speak(): void
//    {
//        echo $this->name . ' is speaking' . '<br>';
//    }
//
//    private function changeName(string $name): void
//    {
//        $this->name = $name;
//    }
//}
//
//
//Class Dog extends Animal
//{
//    public function changeDogName($name): void
//    {
//        $this->changeName($name);
//    }
//
//
//}
//
//$dog = new Dog('Rex');
//
//$dog->eat();
//
//$dog->changeDogName('Poppy');
//
//$dog->speak();


//Class Shape
//{
//    public function __construct(protected float $width, protected float $height)
//    {
//    }

//    public function getArea(): float
//    {
//        return $this->width * $this->height;
//    }
//}
//
//Class Square extends Shape
//{
//    public function __construct(float $height)
//    {
//        parent::__construct($height, $height);
//    }
//
//}
//
//$square = new Square(10);
//
//
////echo $square->getArea();
//
//Class SpecialSquare extends Square
//{
//    public function __construct(float $height)
//    {
//        parent::__construct($height);
//    }
//}
//
//$specialSquare = new SpecialSquare(10);
////
////echo $square->getArea();
//
//Class Rectangle extends Shape
//{
//    public function __construct($width,$height)
//    {
//        parent::__construct($width, $height);
//    }
//
//    public function getArea(): float
//    {
//        return 0.5 * parent::getArea();
//    }
//}
//
//$rectangle = new Rectangle(10,20);
//
////echo $rectangle->getArea();
//
//
////$shapesArray = [$square, $rectangle];
//
////foreach ($shapesArray as $shape) {
////    echo $shape->getArea() . '<br>';
////}
//
//
////echo get_class($square) . '</br>';
////
////var_dump($specialSquare instanceof Shape);
//
//
//function testFunction(Shape $var)
//{
//    echo $var->getArea() + 2;
//}
//
//
//testFunction($specialSquare);

//Class PaymobService
//{
//    public function __construct(protected string $apiKey, protected string $baseUrl)
//    {
//
//    }
//
//    protected function getToken()
//    {
//        echo 'Sending request to paymob servers to get Token' . '<br>';
//
//        return 'Token';
//    }
//}
//
//Class Subscription extends PaymobService
//{
//    public function createPlan($name, $amount)
//    {
//        $token = $this->getToken();
//
//        echo 'Sending request to paymob servers to create plan with sending my token, name, and amount' . '<br>';
//
//        return true;
//    }
//}
//
//$subscription = new Subscription('API_KEY', 'BASE_URL');
//
//$subscription->createPlan('Plan Name', 100);


//abstract class Shape
//{
//    public function __construct(protected float $width, protected float $height)
//    {
//    }
//
//    abstract public function getArea(): float;
//
//    public function getHeight()
//    {
//        echo 'Shape height: ' . $this->height . '<br>';
//    }
//
//
//}
//class Square extends Shape
//{
//
//    public function getArea(): float
//    {
//        return $this->width * $this->height;
//    }
//}
//
//class Rectangle extends Shape
//{
//    public function getArea(): float
//    {
//        return 0.5 * $this->width * $this->height;
//    }
//
//}
//
//$obj = new Square(10,20);
//
//echo 'Square Area: '.  $obj->getArea() . '<br>';
//$obj->getHeight();
//
//$rectangle = new Rectangle(10,20);
//echo 'Rectangle Area: '.  $rectangle->getArea() . '<br>';
//$rectangle->getHeight();

//Abstract Class for Vehicles

//abstract class Vehicle
//{
//    protected bool $engineStatus = false;
//    public function __construct(public string $brand, public string $model)
//    {
//    }
//
//    abstract public function startEngine(): void;
//
//    public function isEngineStarted(): bool
//    {
//        return $this->engineStatus;
//    }
//
//    public function stopEngine(): void
//    {
//        $this->engineStatus = false;
//        echo "{$this->brand} {$this->model} engine stopped" . '<br>';
//    }
//}
//
//class Car extends Vehicle
//{
//    public function startEngine(): void
//    {
//        $this->engineStatus = true;
//        echo "{$this->brand} {$this->model} engine started" . '<br>';
//    }
//}
//
//class Motorcycle extends Vehicle
//{
//    public function startEngine(): void
//    {
//        $this->engineStatus = false;
//        echo "{$this->brand} {$this->model} engine started" . '<br>';
//    }
//}
//
//class Truck extends Vehicle
//{
//    public function startEngine(): void
//    {
//        $this->engineStatus = true;
//        echo "{$this->brand} {$this->model} engine started" . '<br>';
//    }
//
//}


//$car = new Car('Honda', 'Civic');
////$car->startEngine();
//
//var_dump($car->isEngineStarted());

//$motorcycle = new Motorcycle('Honda', 'R2');
//$motorcycle->startEngine();
//
//var_dump($motorcycle->isEngineStarted());


//$vehicles = [
//    new Car('Toyota', 'Corolla'),
//    new Truck('Volvo', 'FH 16'),
//    new Motorcycle('Yamaha', 'R1'),
//    new Car('Mercedes', 'C300'),
//];
//
//$vehiclesWithProblemsInEngine = [];
//
//foreach ($vehicles as $vehicle) {
//    $vehicle->startEngine();
//
//
//    if (!$vehicle->isEngineStarted()) {
//        $vehiclesWithProblemsInEngine[] = $vehicle;
//        continue;
//    }
//
//
//    echo "{$vehicle->brand} engine started, You can stop it." . '<br>';
//
//    $vehicle->stopEngine();
//
//}
//
//var_dump($vehiclesWithProblemsInEngine);

//interface VehicleInterface
//{
//    public function startEngine(): void;
//}
//
//
//
//
//abstract class Vehicle
//{
//    public string $name;
//    protected bool $engineStatus = false;
//    public function __construct(public string $brand, public string $model)
//    {
//    }
//
//    abstract public function startEngine(): void;
//
//    public function isEngineStarted(): bool
//    {
//        return $this->engineStatus;
//    }
//
//    public function stopEngine(): void
//    {
//        $this->engineStatus = false;
//        echo "{$this->brand} {$this->model} engine stopped" . '<br>';
//    }
//}
//
//class Car implements VehicleInterface
//{
//
//
//    public function startEngine(): void
//    {
//        // TODO: Implement startEngine() method.
//    }
//}
//
//function myFunction(vehicleInterface $vehicle): void
//{
//
//}



interface CanSwim
{
    public function swim();
}



Class Human implements CanSwim
{

    public function swim()
    {
        echo 'Human is swimming' . '<br>';
    }
}

Class Duck implements CanSwim
{
    public function swim()
    {
        echo 'Duck is swimming' . '<br>';
    }
}


function myFunction(CanSwim $obj): void
{
    $obj->swim();
}


$human = new Human();
$duck = new Duck();

myFunction($human);


