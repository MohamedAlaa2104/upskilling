<?php

//Class

//Object

//class Person
//{
//    public  string $name;
//    public int $age;
//    public string $location;
//
//    public function sayMyName()
//    {
//        echo $this->name . '<br>';
//    }
//
//    public function sayMyAge()
//    {
//        echo $this->age . '<br>';
//    }
//
//    public function sayMyLocation()
//    {
//        echo $this->location . '<br>';
//    }
//
//    public function printMyData()
//    {
//        $this->sayMyName();
//
//        $this->sayMyAge();
//
//        $this->sayMyLocation();
//    }
//}
//
////$person1 = new Person();
////
////$person1->name = 'Mohamed';
////$person1->age = 30;
////$person1->location = 'Egypt/Cairo';
////
////var_dump($person1->name);
////var_dump($person1->age);
////var_dump($person1->location);
////
////$person1->name = 'Ahmed';
////
////var_dump($person1->name);
//
//$person1 = new Person();
//$person1->name = 'Ahmed';
//$person1->age = 30;
//$person1->location = 'Egypt/Cairo';
//
//$person2 = new Person();
//$person2->name = 'Mohamed';
//$person2->age = 25;
//$person2->location = 'Egypt/Alexandria';
//
//// Data for person 1
//$person1->printMyData();
//
//// Data for person 2
//$person2->sayMyName();
//$person2->sayMyAge();
//$person2-

//class Person
//{
////    public  string $name;
////    public int $age;
////    public string $location;
//
//    public function __construct(public string $name, public int $age, public string $location = 'Egypt/Cairo')
//    {
//        echo 'The object is created' . '<br>';
////        $this->name = $personName;
////        $this->age = $personAge;
////        $this->location = $personLocation;
//    }
//}

//$person1 = new Person(personName: 'Ahmed', personAge: 25, personLocation: 'Egypt/Alexandria');
//$person2 = new Person('Mohamed', 30);
//$person3 = new Person(personLocation: 'Egypt/Giza' ,personAge: 50, personName: 'Osama');
//
//echo $person1->name . '<br>';
//echo $person1->age . '<br>';
//echo $person1->location . '<br>';
//
//
//echo $person2->name . '<br>';
//echo $person2->age . '<br>';
//echo $person2->location . '<br>';
//
//
//echo $person3->name . '<br>';
//echo $person3->age . '<br>';
//echo $person3->location . '<br>';

// Constructor property promotion
//$person1 = new Person('Mohamed', 30);
//
//echo $person1->name . '<br>';
//echo $person1->age . '<br>';
//echo $person1->location . '<br>';

// public
// protected
// private

//class Person
//{
//
//    public function __construct(protected string $name, public int $age, public string $location = 'Egypt/Cairo')
//    {
//        //
//    }
//
//    protected function sayMyName()
//    {
//        echo $this->name . '<br>';
//    }
//
//    public function changeMyName(string $name)
//    {
//        $this->sayMyName();
//
//        if ($this->age < 18) {
//            return;
//        }
//
//        $this->name = $name;
//
//        $this->sayMyName();
//    }
//}
//
//
//$person1 = new Person('Ahmed', 15);
//
//$person1->changeMyName('Osama');

// Class Person -> Name, Age, Location

// Class Account -> Person , Account type, Balance


//require_once 'classes/Person.php';
//require_once 'classes/Account.php';
//
//$person1 = new Person('Ahmed', 25);
//
//$account1 = new Account(balance: 500, isActive: true, accountType: 'EGP', accountOwner: $person1);
//
//$account2 = new Account(balance: 1000, isActive: false, accountType: 'USD', accountOwner: $person1);

//$account->getBalance();
//
//$account->deposit(1000);
//
//$account->getBalance();
//
//$account->withdraw(2000);
//
//$account->getBalance();

//echo $account1->getAccountType();


//class Person
//{
//    public string $name = 'Ahmed';
//    public function __construct()
//    {
//        echo 'The object is created' . '<br>';
//    }
//
//    public function __destruct()
//    {
//        echo 'The object is destroyed' . '<br>';
//    }
//}
//
//$person1 = new Person();
//
//echo $person1->name . '<br>';
//echo $person1->name . '<br>';
//echo $person1->name . '<br>';
//unset($person1);
//echo $person1->name . '<br>';
//echo $person1->name . '<br>';
//echo $person1->name . '<br>';



