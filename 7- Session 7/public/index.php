<?php

// Traits

//require_once '../app/Product.php';
//require_once '../app/User.php';
//
//
//
//$product = new Product('Laptop', 1000);
//
//$product->uploadFile('file.pdf');
//
//$user = new User('John Doe');
//
//$user->uploadFile('profile.jpg');

//                 "../app/Payments/Fawry/Transaction.php"
//require_once '../app/Payments/Fawry/Transaction.php';
//require_once '../app/Payments/MyFatoorah/Transaction.php';

//spl_autoload_register(function ($className) {
//    //file extension
//    $className = $className . '.php';
//    // slash instead of backslash
//    $className = str_replace('\\', DIRECTORY_SEPARATOR, $className);
//    // first letter lowercase
//    $className = lcfirst($className);
//
//    // relative path
//    $className = '..' . DIRECTORY_SEPARATOR . $className;
//
//    require_once $className;
//});

//require '../vendor/autoload.php';
//
//use App\Payments\Fawry\Transaction;
//use App\Payments\MyFatoorah\Transaction as MyFatoorahTransaction;
//
//
//var_dump(new Transaction());
//var_dump(new MyFatoorahTransaction());
//
//$factory = new Ramsey\Uuid\UuidFactory();
//
//$uuid = $factory->uuid4();
//
//var_dump($uuid->toString());


//require '../vendor/autoload.php';
//
//use App\Payments\Fawry\Transaction;
//use App\Payments\MyFatoorah\Transaction as MyFatoorahTransaction;
//
//
//var_dump(new Transaction());
//var_dump(new MyFatoorahTransaction());
//
//var_dump(apiResponse());

interface GeneralProductInterface
{

}

class Product implements GeneralProductInterface
{

}

class PhysicalProduct
{

}

class X
{
   public GeneralProductInterface $product;
}

$product = new Product();
$physicalProduct = new PhysicalProduct();

//function myFunction(PhysicalProduct $x)
//{
//    var_dump($x);
//}
//
//myFunction($product);

$obj = new X();
$obj->product = $product;