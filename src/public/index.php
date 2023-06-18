<?php
require  __DIR__.'/../vendor/autoload.php';

$router=new App\Router();

$router
    -> get('/', [App\Classes\Home::class, "index"])
    -> get('/invoices', [App\Classes\InVoices::class, "index"])
    -> get('/invoices/create', [App\Classes\InVoices::class, "create"])
    -> post('/invoices/create', [App\Classes\InVoices::class, "store"]);


echo $router->resolve($_SERVER['REQUEST_URI'], strtoLower($_SERVER['REQUEST_METHOD']));







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
