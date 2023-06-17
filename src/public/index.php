<?php

//use App\Notification\Email;
//use App\Enums\Status;
use App\DB;
use App\PaymentGeteway\Paddle\Transaction;
require  __DIR__.'/../vendor/autoload.php';


$transaction = new Transaction (25, "Transaction");
var_dump($transaction::$count);
$db = DB::getInstance([]);
$db1 = DB::getInstance([]);

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

