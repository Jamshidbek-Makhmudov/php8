<?php

//use App\Notification\Email;
//use App\Enums\Status;
use App\DB;
use App\PaymentGeteway\Paddle\Transaction;
require  __DIR__.'/../vendor/autoload.php';


$transaction = new Transaction (25, "Transaction");


$transaction->process();


//access to private properties and methods:
$reflectionProperty= new ReflectionProperty(Transaction::class, 'amount');
$reflectionProperty->setAccessible(true);
$reflectionProperty->setAccessible($transaction, 125);
var_dump( $reflectionProperty->getValue($transaction));

//
$transaction->copyFrom(new Transaction(100));
echo "<hr>";
$toaster=new Toaster();
$toaster->addSlice("bread");
$toaster->toast();


echo "<hr>" . "iterators" . "<hr>";

//$email=new Email();
//var_dump($email);
//$transaction=new Transaction();
//$transaction-> setStatus(Status::PAID);
//var_dump($transaction);






#declare(strict_types = 1);

#echo "<pre>";
#print_r($_SERVER);
#echo "<pre>";

#$router=new App\Router();
//$router-> register(
//    '/',
//    function(){
//        echo "Home";
//    }
//
//);
//$router-> register(
//    '/invoices',
//    function(){
//        echo "Invoices";
//    }
//
//);
//echo $router->resolve($_SERVER['REQUEST_URI']);


/* super globals:
    $_SERVER
    $_GET
    $_POST
    $_FILES
    $_COOKIES
    $_SESSION
    $_REQUEST

    $_ENV

*/




/* grammer: opp->
encapsulations: oopda public private va protecteed methodlari bor. public ishlatsak unga tashqarida xoxlaganimizcha access boladi va bemalol ozgartirsak boladi.
lekin private qilsak uni ozgartira olmaymiz lekin shunda ham preivate bergan clasimizni ichida public function bolsa biz shu public function orqali
private variableni ozgartirsak boladi
Abstraction
Polymorphism
Inheritance
*/
