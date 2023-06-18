<?php
declare(strict_types=1);
namespace App\Classes;



use App\View;

class Home
{
    public function index():string

    {
        setcookie(
          'userName', //name of cookie
          'James',    //value of cookie bunda keyingi larni [] arrayni ichiga yozsa hma boladi
          time()+24*60*60 //when expires
         # '/',      //path cokkie will be valid
         # '',  // doiamn availabe cookie
         # false, //secure parametr
          #false //httply only cant not be access by clientside
        );


      //  $_SESSION['count']=($_SESSION['count'] ?? 0)+1;
       // return View::make('index',$_GET)->render();
        return " home";

    }

}