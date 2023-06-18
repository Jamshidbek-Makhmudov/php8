<?php
declare(strict_types=1);
namespace App\Classes;

class InVoices
{
    public function index():string

    {

        unset($_SESSION['count']);

        setcookie(
            'userName', //name of cookie
            'James',    //value of cookie bunda keyingi larni [] arrayni ichiga yozsa hma boladi
            time()-24*60*60 //when expires
        # '/',      //path cokkie will be valid
        # '',  // doiamn availabe cookie
        # false, //secure parametr
        #false //httply only cant not be access by clientside
        );
        return "Index";

    }

    public function create():string

    {
        return "<form action='/invoices/create' method='post'><label>Amount</label><input type='text' name='amount'></form>";

    }

    public function store()
    {
        $amount=$_POST["amount"];

        var_dump($amount);
    }

}